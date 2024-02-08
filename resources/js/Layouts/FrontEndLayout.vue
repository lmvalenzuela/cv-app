<script setup>
import {computed} from "vue";
import {Head, usePage} from '@inertiajs/inertia-vue3'
import NavBar from '../Components/public/NavBar.vue'
import NameBar from '../Components/public/NameBar.vue'
import Contact from '../Components/public/Contact.vue'

const page = usePage()
const profileLegend = computed(() => page.props.value.profile)
console.log(page)

</script>
<template>
  <Head title="CV-APP"/>
  <main class="container flex flex-col gap-0">
    <header class="flex-none w-screen bg-[#414042] text-white z-10">
      <NavBar/>
    </header>
    <div class="flex flex-col lg:flex-row-reverse h-full w-screen gap-0 z-0">
      <!-- md:flex-grow-0 md:w-[66%]  md:h-full      -->
      <section
          class="gap-0 justify-center align-content-center mt-2 h-[70%] flex-grow-0 lg:w-[73%] lg:h-full">
        <div class="flex m-2">
          <div class="flex-col">
            <img src="/storage/images/perfil.png"/>
          </div>
          <div class="flex-col w-100 ml-3">
            <p class="font-sans text-3xl font-bold text-[#414042]">{{ profileLegend }}</p>
            <hr style="border:solid 2px #00AEEF"/>
            <div class="mt-2">
              <slot/>
            </div>
          </div>
        </div>
      </section>
      <section class="gap-0 h-[30%] lg:w-[27%] lg:h-full">
        <div class="h-[25%] pt-4 bg-[#E6E7E8]">
          <!--NameBar-->
          <NameBar/>
          <!--/NameBar-->
        </div>
        <div class="h-[75%] lg:px-8 lg:pt-11  bg-[#414042] text-white font-serif">
          <Contact/>
        </div>
      </section>
    </div>
  </main>
</template>


<style>
html, body, .container {
  height: 100vh;
  width: 100vw;
  margin: 0;
  padding: 0;
}
</style>
