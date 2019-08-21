<template>
  <v-app id="inspire">
    <navigation></navigation>

    <v-content>
      <v-container fluid>
        <router-view/>
      </v-container>
    </v-content>

    <v-footer app>
      <span>&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
  export default {
    name: 'app-component',
    data () {
      return {};
    }
  };
</script>

<style scoped>

</style>
