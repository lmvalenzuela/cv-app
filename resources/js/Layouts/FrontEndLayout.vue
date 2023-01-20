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
    <header class="flex-none h-[15%] w-screen bg-[#414042] text-white z-10">
      <NavBar />
    </header>
    <div class="flex flex-col lg:flex-row-reverse h-[85%] w-screen gap-0 z-0">
<!-- md:flex-grow-0 md:w-[66%]  md:h-full      -->
      <section
          class="gap-0 justify-center align-content-center h-[70%] flex-grow-0 lg:w-[73%] lg:h-full">
        <div>
          <slot/>
        </div>
      </section>
      <section class="gap-0 h-[30%] lg:w-[27%] lg:h-full">
        <div class="h-[25%] p-2">
          <!--NameBar-->
          <NameBar/>
          <!--/NameBar-->
        </div>
        <div class="h-[75%] p-2 bg-[#414042] text-white">
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
