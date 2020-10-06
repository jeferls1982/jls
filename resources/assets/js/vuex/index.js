import Vue from 'vue'
import Vuex from 'vuex'

// import categorias from './modules/categorias/categorias'
// import preloader from './modules/preloader/index'
// import ingredientes from './modules/cardapio/index'
//import teste from './modules/teste/teste'
import noticias from './modules/noticias/noticias'
//import cardapio_categorias from './modules/cardapio/categorias'


Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
//        teste,
        noticias,
//        cardapio_categorias
    }

})

export default store