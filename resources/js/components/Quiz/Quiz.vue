<template>
   <div class="quiz-container">
    <div v-if="(currentStep <= questions.length) && !showContactForm" class="quiz-content">
      <h2>Вопрос {{ currentStep }} из {{ questions.length }}</h2>



      <transition :name="transitionDirection" mode="out-in">
            <div class="question-container" :key="currentStep">
                <h3>{{ currentQuestion.text }}</h3>


                <div v-if="currentQuestion.type === 'multiple-choice'" class="options-container">

                    <div
                        v-for="(option, index) in currentQuestion.options"
                        :key="index"
                        class="option"
                        :class="{ 'selected': answers[currentStep - 1]?.answer === option }"
                        @click="selectOption(option)"
                    >
                        {{ option }}
                    </div>
                </div>


                <div v-else class="input-container">
                    <input
                    type="text"
                    v-model="answers[currentStep - 1].answer"
                    :placeholder="currentQuestion.placeholder || 'Введите ваш ответ'"
                    @input="showTextFieldButton=($event.target.value.length > 0)?true:false"
                >
                <button @click.prevent="goToStep(currentStep + 1)" v-show="showTextFieldButton">Продолжить</button>
                </div>


            </div>
        </transition>


      <div class="reviews_btn_wrapper">
        <a title="Предыдущий вопрос" @click.prevent="prevStep" class="arrow_button arrow_pred" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow_slide_left"></use>
            </svg>
        </a>
        <a title="Следующий вопрос" v-show="currentStep < questions.length" @click.prevent="nextStep" class="arrow_button arrow_next" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow_slide_right"></use>
            </svg>
        </a>

        <a title="Завершить расчет" v-show="currentStep === questions.length" @click.prevent="showContactForm = true" class="arrow_button arrow_next" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow_slide_right"></use>
            </svg>
        </a>
      </div>
    </div>

    <div v-if="showContactForm && submissionStatus == null" class="contact-form">
      <h3>Почти готово!</h3>
      <p>Пожалуйста, оставьте ваши контактные данные, чтобы мы могли связаться с вами.</p>

        <br>

      <div class="form-group">
        <label for="phone">Номер телефона:</label>
        <input
          type="tel"
          id="phone"
          v-mask="{mask: '+N (NNN) NNN-NN-NN', model: 'cpf' }"
          v-model="contactInfo.phone"
          placeholder="Введите ваш номер телефона"
          required
        >
      </div>

        <label class="checbox_label" for="policy_ch">
            <input v-model="policy_ch" type="checkbox" id="policy_ch">
            <span>Я соглашаюсь с <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx"> политикой в области обработки персональных данных</a></span>
        </label>

        <label class="checbox_label" for="accept_ch">
            <input v-model="accept_ch" type="checkbox" id="accept_ch">
            <span>Я даю <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">согласие на обработку моих персональных данных</a></span>
        </label>
        <br>
        <div class="error_list_wrap">
            <div v-for="(item, index) in errorList" :key="index" class="error">{{item}}</div>
        </div>

      <div class="form-actions">

        <button @click="submitQuiz" class="button">
          Отправить
        </button>

        <button @click="showContactForm = false" class="button">
          Вернуться к опросу
        </button>

      </div>
    </div>

    <div v-if="submissionStatus === 'success'" class="success-message">
      <h2>Спасибо!</h2>
      <p>Ваши ответы успешно отправлены.</p>
      <p>Мы свяжемся с вами в ближайшее время.</p>
    </div>

    <div v-if="submissionStatus === 'error'" class="error-message">
      <h2>Произошла ошибка</h2>
      <p>При отправке ваших ответов произошла ошибка. Пожалуйста, попробуйте позже.</p>
      <button @click="resetSubmission" class="try-again-button">
        Попробовать снова
      </button>
    </div>

    <div class="progress-indicator">
      <div
        v-for="(question, index) in questions"
        :key="index"
        class="progress-step"
        :class="{
          'active': currentStep === index + 1,
          'answered': answers[index]?.answer,
          'current-form': showContactForm && currentStep > questions.length
        }"
        @click="goToStep(index + 1)"
      >
        {{ index + 1 }}
      </div>
      <div
        class="progress-step contact-step"
        :class="{
          'active': showContactForm,
          'current-form': submissionStatus
        }"
      >
        <span>✓</span>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import axios from 'axios'

// Конфигурация вопросов
const questions = ref([
  {
    id: 1,
    text: 'Какой дом необходимо построить?',
    type: 'multiple-choice',
    options: ['Дом из кирпича', 'Дом из бруса', 'Дом из бревна', 'Дом из SIP-панелей', 'Каркасный дом', 'Баня'],
  },
  {
    id: 2,
    text: 'Сколько нужно этажей?',
    type: 'multiple-choice',
    options: ['1 этаж', '2 этажа', '3 этажа', '4 и более'],
  },
  {
    id: 3,
    text: 'Предполагаемая площадь дома?',
    type: 'text-input',
    placeholder: 'Введите ваш ответ...'
  },
])

const errorList = ref([]);
const policy_ch = ref(false)
const accept_ch = ref(false)

const transitionDirection = ref('slide')
const showTextFieldButton = ref(false)

// Состояние компонента
const currentStep = ref(1)
const showContactForm = ref(false)
const submissionStatus = ref(null) // null, 'success', или 'error'

// Инициализация массива ответов
const answers = ref(questions.value.map(question => ({
  questionId: question.id,
  questionText: question.text,
  answer: ''
})))

const contactInfo = ref({
  phone: '',
})

// Вычисляемые свойства
const currentQuestion = computed(() => {
  return questions.value[currentStep.value - 1]
})

// Методы
const nextStep = () => {
transitionDirection.value = 'slide-next'
  if (currentStep.value < questions.value.length) {
    currentStep.value++
  }
}

const prevStep = () => {
transitionDirection.value = 'slide-prev'
  if (currentStep.value > 1) {
    currentStep.value--
  }
}

const goToStep = (step) => {
  if (step >= 1 && step <= questions.value.length) {
    currentStep.value = step
    showContactForm.value = false
    transitionDirection.value = (currentStep.value < step)?'slide-prev':'slide-next';
    showTextFieldButton.value=false;
  }

    if (step === questions.value.length + 1) {
        showContactForm.value = true
        transitionDirection.value = 'slide-next'
    }


}

const selectOption = (option) => {
    answers.value[currentStep.value - 1].answer = option

    function delayedFunction() {
        goToStep(currentStep.value + 1)
    }
    setTimeout(delayedFunction, 200)
}

const submitQuiz = async () => {

  errorList.value = [];

    if (contactInfo.value.phone === "") {
        errorList.value.push("Поле 'Телефон' не заполнено");
    }

    if (policy_ch.value == false) {
        errorList.value.push("Вы не согласились с политикой");
    }

    if (accept_ch.value == false) {
        errorList.value.push("Вы не согласились на обработку персональных данных");
    }

    if (errorList.value.length !== 0) return;

  const submissionData = {
    answers: answers.value,
    contactInfo: contactInfo.value,
    timestamp: new Date().toISOString()
  }

  try {
    // Замените на ваш реальный API endpoint
    const response = await axios.post(
        '/send_quiz', submissionData)

    if (response.status === 200) {
      submissionStatus.value = 'success'
    } else {
      submissionStatus.value = 'error'
    }

  } catch (error) {
    console.error('Ошибка при отправке опроса:', error)
    submissionStatus.value = 'error'
  }
}

const resetSubmission = () => {
  submissionStatus.value = null
  showContactForm.value = false
  currentStep.value = 1
}
</script>
