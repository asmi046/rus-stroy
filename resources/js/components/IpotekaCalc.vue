
<template>
  <div class="ipoteka-calc">
    <form class="ipoteka-calc__form" @submit.prevent>
      <div class="ipoteka-calc__fields">
        <label>
          <span>Стоимость дома</span>
          <input type="number" v-model.number="price" min="0" />
        </label>
        <label>
          <span>Ставка по ипотеке (%)</span>
          <input type="number" v-model.number="rate" min="0" step="0.01" />
        </label>
        <label>
          <span>Сроком на (лет):</span>
          <input type="number" v-model.number="years" min="1" />
        </label>
        <label>
          <span>С первоначальным взносом (руб):</span>
          <input type="number" v-model.number="downPayment" min="0" />
        </label>
      </div>
      <div class="ipoteka-calc__result">
        <span>Ежемесячный платеж:</span>
        <strong>{{ formattedMonthlyPayment }} ₽</strong>
      </div>
      <div class="ipoteka-calc__actions">
        <a  href="#coll" type="button" class="button">Оставить заявку</a>
        <a  href="#coll" type="button" class="button button-orange">Позвоните нам</a>
      </div>
    </form>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const price = ref(1105000);
const rate = ref(6);
const years = ref(15);
const downPayment = ref(50000);

const monthlyPayment = computed(() => {
  const principal = price.value - downPayment.value;
  const monthlyRate = rate.value / 100 / 12;
  const n = years.value * 12;
  if (monthlyRate === 0) {
    return principal / n;
  }
  return (
    principal * monthlyRate * Math.pow(1 + monthlyRate, n)
  ) / (Math.pow(1 + monthlyRate, n) - 1);
});

const formattedMonthlyPayment = computed(() => {
  return monthlyPayment.value
    ? monthlyPayment.value.toLocaleString('ru-RU', { maximumFractionDigits: 0 })
    : '0';
});
</script>
