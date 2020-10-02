export default {
    state: {
        items: ['lavar','passar', 'coçar', 'correr']
       
    },
    mutations: {
        // LOAD_CATEGORIAS (state, categorias){
        //     state.items = categorias
        // }
    },
    actions: {
        // loadCategorias(context) {
            

        //     axios
        //         .get("http://localhost:3000/contas")
        //         .then((response) => {
        //             this.categorias = response.data;
        //             console.log(response);

        //             context.commit('LOAD_CATEGORIAS', response)
        //         })
        //         .catch((errors) => {
        //             console.log(errors);
        //         })
        //         .finally(()=> context.commit('PRELOADER',false));
        // }


    },
    getters: {
        getTarefas(state){
            return state.items
        }
    }
}