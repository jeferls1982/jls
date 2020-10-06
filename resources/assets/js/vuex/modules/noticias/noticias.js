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
        getNoticias(context) {
            axios
                .get("/noticias/getNoticias")
                .then((response) => {
                    //  this.state.items = response.data.articles;
                      //console.log(response.data.articles);

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
            console.log(state.items)
            return state.items
        }
    }
}