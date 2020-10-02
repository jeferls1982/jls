import Vue from 'vue'
import VueRouter from 'vue-router'


import HomeHoraComponent from  '../components/horaExtra/Home'



Vue.use(VueRouter)

const routes = [
    {path: '/hora-extra', component:HomeHoraComponent}
]

const router = new VueRouter({
    // mode: 'history',
    routes
})

export default router
