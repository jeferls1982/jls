export default {
    state: {
        items: []

    },
    mutations: {
        LOAD_CATEGORIAS(state, categorias) {

            state.items = categorias
        }
    },
    actions: {
        loadCardapioCategorias(context) {
            axios
                .get("/cardapios/categorias")
                .then((response) => {
                    // console.log(response.data);
                    context.commit('LOAD_CATEGORIAS', response.data)
                })
                .catch((errors) => {
                    console.log(errors);
                })
                .finally(() => { });
        },
        storeCardapioCategorias(context, nomeCategoria) {
            
            return new Promise((resolve,reject)=>{
                axios
                .post("/cardapios/categorias",{nome: nomeCategoria, user_id: '', ativo: true})
                .then(response => resolve())
                .catch((errors) => reject(errors))
                .finally(() => { });
            })

            
        },




    },
    getters: {
        getCategorias(state) {
            
            return state.items
        }
    }
}