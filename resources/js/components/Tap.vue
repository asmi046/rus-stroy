<template>
    <div class="tap_element">
        <div class="tap_headers">
            <div class="work-step-section__grid">
                <div @click="selectElement(index)" v-for="(item, index) in props.header" :key="index" :class="{ active: (index == selected) }" class="work-step">
                    <div class="work-step__text">{{ item }}</div>
                </div>
            </div>
        </div>


        <div class="tap_bodys">
            <div v-for="(item, index) in props.header" :key="index" :class="{ active: (index == selected) }" class="tap_body">
                <slot :name="'body'+(index+1)"></slot>
            </div>
        </div>
    </div>


</template>

<script setup>
    import { ref } from 'vue';

    const props = defineProps({
        header: Array
    })

    const selectElement = (index) => {
        selected.value = index
    }
    let selected = ref(0)
</script>
