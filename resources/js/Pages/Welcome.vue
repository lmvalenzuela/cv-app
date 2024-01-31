<script>
import FrontEndLayout from '../Layouts/FrontEndLayout.vue'

/*defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    layout: FrontEndLayout
});*/
export default {
  layout: FrontEndLayout,
  props: {
    headerTilte: String,
    mainDescription: String,

  }
}
</script>

<template>
<p>MainContent</p>

</template>
<style>
html, body, .container {
    height:100vh;
    width:100vw;
    margin: 0px;
    padding: 0px;
}
</style>

