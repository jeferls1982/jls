import Vue from 'vue'
import VueRouter from 'vue-router'


import HomeHoraComponent from  '../components/horaExtra/Home'
import ListaNoticiasComponent from '../components/noticias/ListaComponent'


Vue.use(VueRouter)

const routes = [
    {path: '/hora-extra', component:HomeHoraComponent, name:'hora_extra'},
    {path: '/lista-noticias', component:ListaNoticiasComponent, name:'ultimas_noticias'}
]

const router = new VueRouter({
    // mode: 'history',
    routes
})

export default router
