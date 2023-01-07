<template>
<div class="font-montserrat font-white m-2">
  <div>
    <button id="mobile" class="text-4xl md:hidden focus:outline-none">
      &#9776;
    </button>
    <nav class="md:hidden sm:block space-x-8 text-xl" aria-label="main">
      <Link href="/" class="hover:opacity-90">Inicio</Link>
      <Link href="/experiencia" class="hover:opacity-90">Inicio</Link>
      <Link href="/educacion" class="hover:opacity-90">Inicio</Link>
      <Link href="/descarga" class="hover:opacity-90">Inicio</Link>

    </nav>
  </div>
</div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
  name: "NavBar",
  components: {
    Link
  }
}
</script>

<style scoped>

</style>
