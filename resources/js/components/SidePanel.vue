<template>
  <div class="side-panel">
    <div class="panel-list">
      <a
        v-for="button in buttons"
        :key="button.id"
        class="panel-item"
        :href="button.href"
      >
        <span class="icon" v-html="button.icon"></span>
        <span class="text" :class="{ 'visible': hoveredText }">
          {{ button.text }}
        </span>
        </a>

    <a class="open" @click.prevent="panelOpen">
        <svg v-show="!hoveredText" class="sprite_icon"><use xlink:href="#arrow_open"></use></svg>
        <svg v-show="hoveredText" class="sprite_icon"><use xlink:href="#close_icon"></use></svg>
    </a>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const hoveredText = ref(false);

const buttons = ref([
  {
    id: 1,
    text: 'Позвонить',
    icon: `<svg class="sprite_icon"><use xlink:href="#ti_phone"></use></svg>`,
    href: 'tel:+73462597171'
  },
  {
    id: 2,
    text: 'Написать в WhatsApp',
    icon: `<svg class="sprite_icon"><use xlink:href="#ws_icon_line_white"></use></svg>`,
    href: 'https://wa.me/79044503207'
  },
  {
    id: 3,
    text: 'Написать в Telegram',
    icon: `<svg class="sprite_icon"><use xlink:href="#tg_icon_line_white"></use></svg>`,
    href: 'tg://resolve?domain=ekaterems'
  },
  {
    id: 4,
    text: 'Калькулятор',
    icon: `<svg class="sprite_icon"><use xlink:href="#calc_icon"></use></svg>`,
    href: '/quiz'
  },
]);

const panelOpen = (action) => {
  hoveredText.value = !hoveredText.value;
};
</script>
