<template>
    <div>
        <label for="form-hora-inicio">Horario de Início</label>
        <b-form-timepicker id='form-hora-inicio' name='inicio' v-model="value" locale="pt-br"></b-form-timepicker>
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                value: '16:15:00'
            }
        }
    }
</script>
