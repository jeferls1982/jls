<template>
    <div>
        <label for="form-hora-fim">Horario de Fim</label>
        <b-form-timepicker id='form-hora-fim' name='fim' v-model="value" locale="pt-br"></b-form-timepicker>
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                value: '17:15:00'
            }
        }
    }
</script>
