<template>
  <div class="font-montserrat font-white m-2 ">
    <div class="w-5/6 mx-auto">
      <!--Add md:hidden -->

      <nav id="hamburger-button"
           class="hidden md:flex md:align-items-center position-absolute right-0 gap-0 space-x-8 text-xl w-3/4 mt-3 cursor-pointer">
        <Link href="/" class="w-1/4 hover:opacity-90">Perfil</Link>
        <Link href="#experiencia" class="w-1/4 hover:opacity-90">Experiencia</Link>
        <Link href="#educacion" class="w-1/4 hover:opacity-90">Educación</Link>
        <div class="block w-1/4 ">
          <Link href="#descarga" class=" hover:opacity-90">Descarga CV</Link>
          <MDBSwitch
              label="English"
              v-model="language"
          />
        </div>
      </nav>
      <button id="mobile" class="position-absolute right-2 text-4xl md:hidden ">
        &#9776;
      </button>
    </div>
  </div>
</template>

<script>
import {ref} from "vue";
import {Link} from "@inertiajs/inertia-vue3";
import {MDBSwitch} from "mdb-vue-ui-kit";

export default {
  name: "NavBar",
  components: {
    Link,
    MDBSwitch
  },
  setup() {
    const language = ref(false);
    return {
      language
    };
  }

}
</script>

<style scoped>

</style>
