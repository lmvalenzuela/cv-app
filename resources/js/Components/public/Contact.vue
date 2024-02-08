<template>
  <div class="flex flex-row justify-between lg:flex-col">
    <div class="flex-row lg:flex-col ">
      <p class="lg:text-xl font-bold">{{ contactLegend }}</p>
      <p class="font-mono text-base font-bold pt-2">{{ addressLegend }}</p>
      <p class="font-mono text-sm pt-2">
          Periférico Sur 3380a-902<br />
          Jardines del Pedregal,<br />
          01900, CDMX
      </p>
    </div>
    <div class="flex-row lg:flex-col pt-8">
      <p class="font-mono text-base font-bold">{{ phoneLegend }}</p>
      <p class="font-mono text-sm pt-1">+52 5530604582</p>
    </div>
    <div class="flex-row lg:flex-col pt-8">
      <p class="font-mono text-base">{{ emailLegend }}</p>
      <a href="mailto:lmvalenzuela@ctrl-zeta.com" class="font-mono text-sm pt-1" >lmvalenzuela@ctrl-zeta.com</a>
    </div>
  </div>
</template>

<script setup>
import {computed} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";

const page = usePage()
const contactLegend = computed(() => page.props.value.contact)
const addressLegend = computed(() => page.props.value.address)
const phoneLegend = computed(() => page.props.value.phone)
const emailLegend = computed(() => page.props.value.email)

</script>

<style scoped>

</style>
