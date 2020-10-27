<template>
  <div class="mt-3">
    
    
    <div>
      <div class="row">
        <router-link
          class="col-sm-6 mb-3"
          :to="{
            name: 'pagina_jogo',
            params: {
              nomeJogo: 'Megasena',
              totalNumeros: 60,
              quebraLinha: 10,
              qtdPalpite: 6,
              classe: 'megasena',
            },
          }"
        >
          <b-card class="megasena" text-variant="white" title="Megasena">
          </b-card>
        </router-link>
        <router-link
          class="col-sm-6 mb-3"
          :to="{
            name: 'pagina_jogo',
            params: {
              nomeJogo: 'Lotofacil',
              totalNumeros: 25,
              quebraLinha: 5,
              qtdPalpite: 15,
              classe: 'lotofacil',
            },
          }"
        >
          <b-card class="lotofacil" text-variant="white" title="Lotofácil">
          </b-card>
        </router-link>
        <!-- <router-link
          class="col-sm-6 mb-3"
          :to="{
            name: 'pagina_jogo',
            params: {
              nomeJogo: 'Quina',
              totalNumeros: 60,
              quebraLinha: 10,
              qtdPalpite: 15,
              classe: 'quina',
            },
          }"
        >
          <b-card class="quina" text-variant="white" title="Quina"> </b-card>
        </router-link> -->
      </div>
    </div>
  </div>
</template>

<script>
import NavComponent from "./navloterias";
export default {
  components: {
    NavComponent,
  },
};
</script>

<style lang="css" >
img {
  max-height: 150px;
}
.megasena {
  background-color: green;
  color: white;
}
.lotofacil {
  background-color: orchid;
  color: white;
}
.quina {
  background-color: darkslateblue;
  color: white;
}

.bola {
 background-color: green;
 width: 25px;
 box-sizing: border-box;
}
</style>