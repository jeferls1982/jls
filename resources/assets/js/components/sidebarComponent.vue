<template>
  <div>
    <b-button v-b-toggle.sidebar-1>
      <b-col md="6" class="">
        <b-icon
          icon="layout-text-sidebar"
          animation="fade"
          font-scale="1"
        ></b-icon>
      </b-col>
    </b-button>
    <b-sidebar id="sidebar-1" title="Menu" shadow>
      <b-list-group align="left">
        <a href="/he"
          ><b-list-group-item button v-b-toggle.sidebar-1
            >Compensação de horas</b-list-group-item
          ></a
        >
        <router-link :to="{ name: 'ultimas_noticias' }">
          <b-list-group-item button v-b-toggle.sidebar-1 @click="getNoticias"
            >Últimas Notícias</b-list-group-item
          >
        </router-link>

        <!-- <b-list-group-item button v-b-toggle.sidebar-1
          >Disabled button</b-list-group-item
        >
        <b-list-group-item button v-b-toggle.sidebar-1
          >This is a button too</b-list-group-item
        > -->
      </b-list-group>
    </b-sidebar>
  </div>
</template>


<script>
export default {
  methods: {
    getNoticias() {
      this.$store.dispatch("getNoticias");
    },
  },
};
</script>