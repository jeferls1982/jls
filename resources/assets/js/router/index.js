import Vue from 'vue'
import VueRouter from 'vue-router'


import HomeHoraComponent from  '../components/horaExtra/Home'
import ListaNoticiasComponent from '../components/noticias/ListaComponent'
import CartelaComponent from '../components/loterias/Cartela'
import LoteriasComponent from '../components/loterias/Home'
import PaginaJogoComponent from '../components/loterias/PaginaJogo'

// ---------------------------------------------------------------------------
import HomeLojaComponent from '../components/ecommerce/Home'


Vue.use(VueRouter)

const routes = [
    {path: '/hora-extra', component:HomeHoraComponent, name:'hora_extra'},
    {path: '/lista-noticias', component:ListaNoticiasComponent, name:'ultimas_noticias'},
    // ---------------------------------------------------------------------------
    {path: '/loterias', component:LoteriasComponent, name:'loterias'},
    {path: '/pagina_jogo', component:PaginaJogoComponent, name:'pagina_jogo', props: true},
    {path: '/cartela', component:CartelaComponent, name:'cartela-jogo'},
    // -----------------------------------------------------------------------------------

    // Rotas Ecommerce
    {path: '/ecommerce', component:HomeLojaComponent, name:'loja'},
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
