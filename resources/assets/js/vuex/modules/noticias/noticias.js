export default {
    state: {
        items: []

    },
    mutations: {
        LOAD_NOTICIAS (state, noticias){
            
            state.items = noticias
        }
    },
    actions: {
        loadNoticias(context) {
            axios
                .get("/getNoticias")
                .then((response) => {
                    //  this.state.items = response.data.articles;
                    //  console.log(response);

                     context.commit('LOAD_NOTICIAS', response.data.articles)
                })
                .catch((errors) => {
                    console.log(errors);
                })
                .finally(() => {});
        },
        atualizarNoticias(context) {
            axios
                .get("/noticias")
                .then((response) => {
                    //  this.state.items = response.data.articles;
                    //  console.log(response);

                     context.commit('LOAD_NOTICIAS', response.data.articles)
                })
                .catch((errors) => {
                    console.log(errors);
                })
                .finally(() => {});
        },
        loadEsportes(context) {
            axios
                .get("/getEsportes")
                .then((response) => {
                    //  this.state.items = response.data.articles;
                    //  console.log(response);
                    console.log(response)
                     context.commit('LOAD_NOTICIAS', response.data.articles)
                })
                .catch((errors) => {
                    console.log(errors);
                })
                .finally(() => {});
        },



    },
    getters: {
        getNoticias(state) {
            return state.items
        }
    }
}