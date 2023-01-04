<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome"/>
    <div class="container flex flex-col gap-0">
        <div class="flex flex-none justify-center align-content-center h-[15%] w-screen border-2 border-green-500">
            <div>
              <p>NavBar</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row-reverse h-[85%] w-screen border-2 border-red-500">
            <div class="flex-grow-1 md:flex-grow-0 md:w-[76%] justify-center align-content-center h-[70%] md:h-full border-2 border-blue-500">
              <div>
                <p>Main content</p>
              </div>
            </div>
            <div class="flex md:flex-col md:w-[24%] justify-center align-content-center h-[30%] md:h-full w-screen border-2 border-orange-500">
                <div class="flex flex-col w-[50%] md:w-full md:h-[30%] border border-yellow-500">
                  <div>
                    <p>Name bar</p>
                  </div>
                </div>
                <div class="flex flex-col md:flex-row w-[50%] md:w-full md:h-[70%] border border-yellow-500">
                  <div>
                    <p>Contact</p>
                  </div>
                </div>
            </div>
        </div>
    </div>

</template>
<style>
html, body, .container {
    height:100vh;
    width:100vw;
    margin: 0px;
    padding: 0px;
}
</style>

