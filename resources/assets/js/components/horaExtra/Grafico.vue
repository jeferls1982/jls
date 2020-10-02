<template>
  <div class="small">
    <line-chart :chart-data="datacollection"></line-chart>
  </div>
</template>

<script>
import axios from "axios";
import LineChart from "./charts/LineChart";

export default {
  components: {
    LineChart,
  },
  data() {
    return {
      datacollection: null,
      horas: {},
    };
  },
  created: function () {
    this.getDados();
    this.fillData();
  },
  mounted() {},
  methods: {
    getDados() {},

    fillData() {
      axios
        .get("/he/get_dados_grafico")
        .then((response) => {
          let a = response.data;
          let restantes = (a.faltantes * 100)/a.total;
          let pagas = (a.pagas * 100)/a.total;
          this.datacollection = {
            labels: ["Horas Restantes(%)", "Horas Pagas(%)"],
            datasets: [
              {
                label: ["Data One", "g"],
                backgroundColor: ["#F29EAA", "#009EAC"],
                data: [restantes.toFixed(2), pagas.toFixed(2)],
              },
            ],
          };
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => console.log("Finally"));
    },
    getRandomInt() {
      return Math.floor(Math.random() * (50 - 5 + 1)) + 5;
    },
  },
};
</script>

<style>
.small {
  max-width: 600px;
  margin: 150px auto;
}
</style>