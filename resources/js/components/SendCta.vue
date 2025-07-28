<template>
    <form v-show="!showAccept" class="cta-form">
        <div class="cta-form__fields">
            <input v-model="name" type="text" name="name" placeholder="Имя" class="form-input">
            <input v-model="phone" type="tel" name="phone" v-mask="{mask: '+N (NNN) NNN-NN-NN', model: 'cpf' }" placeholder="Телефон" class="form-input">
        </div>

        <div class="cta-form__checkboxes">
            <label class="checbox_label" for="policy_ch">
                <input v-model="policy_ch" type="checkbox" id="policy_ch">
                <span>
                    Я соглашаюсь с
                    <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx">
                        политикой в области обработки персональных данных
                    </a>
                </span>
            </label>

            <label class="checbox_label" for="accept_ch">
                <input v-model="accept_ch" type="checkbox" id="accept_ch">
                <span>
                    Я даю
                    <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">
                        согласие на обработку моих персональных данных
                    </a>
                </span>
            </label>
        </div>

        <div class="control_wrap">
            <button :disabled="showLoader"  @click.prevent="sendMsg()" type="submit" class="button button-orange">Отправить</button>
            <div v-show="showLoader" class="loader">
                <svg class="sprite_icon">
                    <use xlink:href="#loader_icon"></use>
                </svg>
            </div>
        </div>

    </form>
    <div v-show="showAccept" class="accept_message">
                <p class="emoji">📢🤝✅</p>
                <h2>Ваше сообщение отправлено</h2>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const phone = ref("");
const name = ref("");
const policy_ch = ref(false)
const accept_ch = ref(false)
const showAccept = ref(false)
const showLoader = ref(false);
const _token = ref(document.querySelector('meta[name="_token"]').content);


const sendMsg = () => {

    if (phone.value === "") {
        alert("Поле 'Телефон' не заполнено");
        return;
    }

    if (policy_ch.value == false) {
        alert("Вы не согласились с политикой");
        return;
    }

    if (accept_ch.value == false) {
        alert("Вы не дали согласие на обработку персональных данных");
        return;
    }

    showLoader.value = true;

    axios.post("/send_cta", {
        _token: _token.value,
        phone: phone.value,
        name: name.value,
    })
    .then((response) => {
        showLoader.value = false;
        showAccept.value = true;
    })
    .catch((error) => {
        showLoader.value = false;
        console.log(error)
        errorList.value.push(error.response.data.message)

    });
};

</script>
