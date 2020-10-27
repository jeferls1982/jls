<template>
  <div class="">
    <div class="alert alert-info mt-2 shadow-sm">Cartela de jogos</div>
    <!-- --------------------------------------------------ajuste de num do concurso e qut de jogos -->
    <div class="row">
      <div class="col-4">
        <label for="concurso">Concurso</label>
        <input
          id="concurso"
          class="form-control"
          v-model="concurso"
          type="number"
          placeholder="Nº concurso..."
          v-focus
        />
      </div>
      <div class="col-4">
        <label for="qtd">Qtd Jogos</label>
        <input id="qtd" class="form-control" v-model="qtd" type="number" />
      </div>
      <div class="col-4">
        <label for="qtd">jogos</label>
        <input
          id="qtd"
          class="form-control"
          v-model="lista.length"
          type="number"
          disabled
        />
      </div>
    </div>
    <!-- ----------------------------------------------------------cartela para escolher os numeros -->
    <div class="row mt-3">
      <div class="col-sm-6 mt-3 text-center">
        <span class="numeros mt-1" v-for="item in totalNumeros" :key="item.id">
          <span @click="add(item)" v-if="item < 10">
            <span :id="item" class="bolinha">0{{ item }}</span>
          </span>
          <span @click="add(item)" v-else>
            <span :id="item" class="bolinha">{{ item }}</span>
          </span>

          <!-- ----------------------------------------------------------------------------------------- -->

          <!-- --------------------------------------------------------------------------- -->
          <span v-if="item % quebraLinha == 0">
            <br />
            <br />
          </span>
        </span>
      </div>
      <!-- --------------------------------------------------------------------alerta de quantos jogos feitos -->
      <div class="col-sm-6">
        <div class="" v-if="lista != ''">
          <span class="alert alert-info shadow-sm"
            >Total de Jogos: {{ lista.length }}</span
          >
        </div>
        <!-- ----------------------------------------------------listagem dos nº escolhidos -->
        <div id="list-demo" class="mt-3">
          <transition-group name="list" tag="p">
            <span v-for="item in items" v-bind:key="item" class="list-item">
              <span @click="remove(item)" class="bolinha" v-if="item < 10">
                0{{ item }}
              </span>
              <span @click="remove(item)" class="bolinha" v-else>
                {{ item }}
              </span>
            </span>
          </transition-group>
        </div>
        <!-- ----------------------------------------------------------------listas dos jogos feitos -->
        <div v-if="lista != ''">
          <div class="mt-2" v-for="(jogo, index) in lista" :key="index">
            <span v-for="numero in jogo" :key="numero.id">
              <span class="bolinha" v-if="numero < 10"> 0{{ numero }} </span>
              <span class="bolinha" v-else>
                {{ numero }}
              </span>
            </span>
            <span @click="removeJogo(index)" class="trash ml-4"
              ><b-icon icon="trash2"></b-icon>
            </span>
          </div>
          <button
            v-if="qtd == lista.length"
            @click="save"
            class="btn btn-success mt-3"
          >
            Salvar jogos
          </button>
        </div>
        <!-- -------------------------------------------------------------- -->
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  props: ["nomeJogo", "totalNumeros", "classe", "quebraLinha", "qtdPalpite"],
  data() {
    return {
      // totalNumeros: 60,
      nomeConcurso: "mega_sena",
      items: [],
      nextNum: 10,
      lista: [],
      concurso: 1,
      total: 0,
      qtd: 1,
      count: 0,
    };
  },
  directives: {
    focus: {
      // directive definition
      inserted: function (el) {
        el.focus();
      },
    },
  },
  created: function () {
    console.log(this.items.length);
  },
  computed: {
    getClass(i) {
      this.items.forEach((element) => {
        if (element == i) {
          return "";
        }
        return "bolinha";
      });
    },
  },
  methods: {
    save() {
      // Use sweetalert2

      axios
        .post("/loto/save_apostas", {
          concurso: this.concurso,
          nomeConcurso: this.nomeConcurso,
          jogos: this.lista,
        })
        .then((response) => {
          this.$swal({
            position: "top-end",
            icon: "info",
            title: "Salvando jogos",
            showConfirmButton: false,
            timer: 1500,
          });

          console.log(response.data);
        })
        .catch((errors) => {
          console.log(errors);
        })
        .finally(() =>
          this.$swal({
            position: "top-end",
            icon: "success",
            title: "Jogos Salvos",
            showConfirmButton: false,
            timer: 1500,
          })
        );
    },
    jogoRepetido() {
      var flag = false;
      this.lista.forEach((jogo) => {
        var count = 0;
        jogo.forEach((numero) => {
          this.items.forEach((n) => {
            if (n == numero) {
              count++;
              if (count == this.qtdPalpite) {
                flag = true;
              }
            }
          });
        });
      });
      return flag;
    },
    add: function (i) {
      document.getElementById(i).classList = "danger";
      if (this.concurso) {
        if (this.count < this.qtd) {
          if (this.items.length < this.qtdPalpite) {
            if (!this.testRepeat(i)) {
              this.items.splice(i, 0, i);
              if (this.items.length == this.qtdPalpite) {
                if (this.jogoRepetido()) {
                  this.$swal({
                    position: "top-end",
                    icon: "error",
                    title: "Jogo Repetido!!",
                    showConfirmButton: false,
                    timer: 1500,
                  });
                  this.items = [];
                  for (i = 1; i <= this.totalNumeros; i++) {
                    document.getElementById(i).classList.remove("danger");
                    document.getElementById(i).classList.add("bolinha");
                  }
                } else {
                  this.lista.push(this.items);
                  this.items = [];
                  this.count++;

                  for (i = 1; i <= this.totalNumeros; i++) {
                    document.getElementById(i).classList.remove("danger");
                    document.getElementById(i).classList.add("bolinha");
                  }
                }
              }
            }
          }
        } else {
          this.$swal(
            "Se quiser fazer mais jogos, aumente a quantidade de jogos"
          );
        }
      } else {
        this.$swal("Qual é o número do concurso?");
      }
    },

    testRepeat(i) {
      this.items.forEach((element) => {
        if (element == i) {
          return tru;
        }
      });

      return false;
    },

    remove: function (i) {
      
      this.items.forEach((element) => {
        if (element == i) {          
          document.getElementById(i).classList.remove("danger");
          document.getElementById(i).classList.add("bolinha");
        }
      });
      this.items.splice(this.items.indexOf(i), 1);     
    },
    removeJogo: function (i) {
      this.lista.splice(this.items.indexOf(i), 1);
      this.count--;
      this.$swal({
        position: "top-end",
        icon: "error",
        title: "Jogo Removido!!",
        showConfirmButton: false,
        timer: 1500,
      });
    },
  },
};
</script>

<style scoped>
.numeros {
}
.bolinha {
  padding: 3px;
  /* background-color: green; */
  border: 2px solid green;
  border-radius: 50%;
  margin: 2px;
  box-shadow: 2px 2px 2px grey;
  color: green;
  font-weight: bold;
  font-size: 12px;
}
.danger {
  padding: 3px;
  /* background-color: green; */
  border: 2px solid red;
  border-radius: 50%;
  margin: 2px;
  box-shadow: 2px 2px 2px grey;
  color: red;
  font-weight: bold;
  font-size: 12px;
}
.trash {
  padding: 5px;
  /* background-color: green; */
  border: 2px solid red;
  border-radius: 50%;
  margin: 2px;
  box-shadow: 2px 2px 2px grey;
  color: red;

  font-size: 10px;
}

.list-item {
  display: inline-block;
  margin-right: 10px;
}
.list-enter-active,
.list-leave-active {
  transition: all 1s;
}
.list-enter, .list-leave-to /* .list-leave-active below version 2.1.8 */ {
  opacity: 0;
  transform: translateY(-30px);
}
</style>