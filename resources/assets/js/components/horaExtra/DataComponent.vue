
<template>
  <div>
    <label for="form-data">Escolha a Data</label>
    <b-form-datepicker  id="form-data" v-model="value" name='data'  class="mb-2" placeholder='Insira a Data'></b-form-datepicker>
    
  </div>
</template>

<script>
  export default {
    data() {
      return {
        value: new Date
      }
    }
  }
</script>