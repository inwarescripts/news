<template>
  <div>
    <p>{{message}}</p>
    <small>{{user}}</small>
  </div>
</template>

<script>
    export default {
      data(){
        return {
          message :"Message text is hear",
          user :"ThongDV1"
        }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="css">

</style>
