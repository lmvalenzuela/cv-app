<script>
import {Head} from "@inertiajs/inertia-vue3";
import NavBar from "../Components/public/NavBar.vue";
import NameBar from "../Components/public/NameBar.vue";
import Contact from "../Components/public/Contact.vue";


export default {
  name: "FrontEndLayout.vue",
  components: {
    Head,
    Contact,
    NameBar,
    NavBar
  }
}
</script>
<template>
  <Head title="Welcome"/>
  <main class="container flex flex-col gap-0">
    <header class="flex flex-none justify-end h-[15%] w-screen bg-[#414042] text-white">
      <NavBar/>
    </header>
    <div class="flex flex-col md:flex-row-reverse h-[85%] w-screen gap-0">
      <section
          class="flex-grow-1 md:flex-grow-0 md:w-[76%] gap-0 justify-center align-content-center h-[70%] md:h-full">
        <div>
          <slot/>
        </div>
      </section>
      <section
          class="flex md:flex-col md:w-[24%] gap-0 justify-center align-content-center h-[30%] md:h-full w-screen">
        <div class="flex flex-col w-[50%] md:w-full md:h-[30%] bg-[#E6E7E8]">
          <!--NameBar-->
          <NameBar/>
          <!--/NameBar-->
        </div>
        <div class="flex flex-col md:flex-row w-[50%] md:w-full md:h-[70%] bg-[#414042] text-white">
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
