<template>
  <div>
    <navloteria-component></navloteria-component>

    <div>
      <b-dropdown
        :text="nomeJogo"
        text-variant="white"
        block
        variant="default"
        :class="classe"
        menu-class="w-100 light"
      >
        <b-dropdown-item @click="showCartela = !showCartela">Nova Aposta</b-dropdown-item>
        <!-- <b-dropdown-item href="#">Another action</b-dropdown-item>
        <b-dropdown-item href="#">Something else here</b-dropdown-item> -->
      </b-dropdown>
    </div>
    
    <span v-if="showCartela">
        <cartela-component :totalNumeros="totalNumeros" :quebraLinha="quebraLinha" :qtdPalpite="qtdPalpite"></cartela-component>
    </span>
  </div>
</template>

<script>
import CartelaComponent from "./Cartela";
export default {
  components: {
    CartelaComponent,
  },
  data() {
    return {
      showCartela: false,
    };
  },
  props: ["nomeJogo", "totalNumeros", "classe", "quebraLinha","qtdPalpite"],
};
</script>

<style lang="scss" scoped>
.textDropdown {
  color: white;
}
</style>