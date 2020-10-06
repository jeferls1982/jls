<template>
  <div>
    <div v-for="item in getNoticias" :key="item.id" class="py-3">
      <b-card :img-src="item.urlToImage" img-bottom class="card-noticia shadow">
        <b-card-text>
          {{ item.title }}
        </b-card-text>
      </b-card>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      noticias: null,
    };
  },

  methods: {},
  computed: {
    getNoticias() {
      return this.$store.getters.getNoticias;
    },
  },
};
</script>

<style scoped>
card-noticia {
  border-radius: 10px;
  box-shadow: 3px 3px 3px grey;
}
</style>