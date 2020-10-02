<template>
    <div class="container py-4">
        <b-card bg-variant="dark" text-variant="white" title="Compensado Horas">
            <b-card-text>
                Calcular o quanto de horas vc precisa pagar...
            </b-card-text>
            <router-link to="/hora-extra">HoraExtra</router-link>
            <b-button href="#" variant="primary">Acessar</b-button>
        </b-card>
        
</template>

<script>
    import HoraComponent from './horaExtra/Home'
    export default {
        components:{
            HoraComponent
        }
    }
</script>
