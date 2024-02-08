<template>
  <div class="grid grid-rows-2 mx-4 h-full">
    <div class="relative h-full pt-0 w-full justify-self-start ">
      <p class="absolute bottom-0 w-full font-serif text-center text-base text-slate-700 lg:mb-2 lg:text-2xl">Luis Miguel Valenzuela</p>
    </div>
    <div class="h-full align-self-end justify-self-center align-self-start lg:m-2 lg:mt-4 lg:pt-2">      <p class="text-xs text-sky-400 w-full lg:text-base font-serif">
      {{ titleDescription }}</p>
    </div>
  </div>
</template>

<script setup>
import {usePage} from "@inertiajs/inertia-vue3";
import {computed} from "vue";

const page = usePage()
const titleDescription = computed(() => page.props.value.titleDescription)
</script>

<style scoped>

</style>
