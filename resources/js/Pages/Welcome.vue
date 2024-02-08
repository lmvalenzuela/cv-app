<script>
import FrontEndLayout from '../Layouts/FrontEndLayout.vue'

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

