<template>
  <nav class="mb-3 z-10 ">
    <MDBNavbar dark expand="lg" class="bg-[#414042] border-bottom-0 shadow-0" container>
      <MDBNavbarBrand></MDBNavbarBrand>
      <MDBNavbarToggler
          @click="collapse1 = !collapse1"
          target="#navbarSupportedContent"
          toggler-class="text-right"
      ></MDBNavbarToggler>
      <MDBCollapse v-model="collapse1" id="navbarSupportedContent" collapse-class="mt-4 h-1/2">
        <MDBNavbarNav center class="mb-6 mb-lg-0 gap-4 lg:gap-10">
          <li class="nav-item text-white text-right">
            <Link href="/">Perfil</Link>
          </li>
          <li class="nav-item text-white text-right">
            <Link href="/#experiencia">Experiencia</Link>
          </li>
          <li class="nav-item text-white text-right">
            <Link href="/#educacion">Educación</Link>
          </li>
          <li class="nav-item text-white text-right flex flex-col justify-end relative">
              <Link href="/#educacion">Descarga</Link>
              <div class="w-1/7 absolute right-0 top-5" >
                <MDBSwitch v-model="language" label="Eng"/>
              </div>

          </li>
          <!--          <MDBNavbarItem linkClass="text-white text-right" href="/#" >
                      Experiencia
                    </MDBNavbarItem>
                    <MDBNavbarItem linkClass="text-white text-right" href="/#" >
                      Educación
                    </MDBNavbarItem>
                    <MDBNavbarItem linkClass="text-white text-right" href="/#" >
                      Descarga CV
                      <MDBSwitch v-model="language" label="English" />
                    </MDBNavbarItem>-->
        </MDBNavbarNav>
      </MDBCollapse>
    </MDBNavbar>
  </nav>


</template>

<script>
import {ref} from "vue";
import {Link} from "@inertiajs/inertia-vue3";
import {
  MDBNavbar,
  MDBNavbarBrand,
  MDBNavbarNav,
  MDBNavbarItem,
  MDBNavbarToggler,
  MDBCollapse,
  MDBBtn,
  MDBIcon,
  MDBSwitch,
} from "mdb-vue-ui-kit";

export default {
  name: "NavBar",
  components: {
    MDBNavbar,
    MDBNavbarBrand,
    MDBNavbarNav,
    MDBNavbarItem,
    MDBNavbarToggler,
    MDBCollapse,
    MDBBtn,
    MDBIcon,
    MDBSwitch,
    Link
  },
  setup() {
    const collapse1 = ref(false);
    const language = ref(false);
    return {
      language,
      collapse1
    };
  }

}
</script>

<style lang="scss" scoped>

</style>
