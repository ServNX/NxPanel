<template>
  <div>
    <v-navigation-drawer
        v-model="drawer"
        app
        clipped
    >
      <v-list dense>

        <v-list-item
            v-for="item in items"
            :key="item.name"
            :to="item.path"
            v-if="!item.hidden"
        >
          <v-list-item-action>
            <v-icon>{{item.icon}}</v-icon>
          </v-list-item-action>

          <v-list-item-content>
            <v-list-item-title>{{item.item}}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

      </v-list>
    </v-navigation-drawer>

    <v-app-bar
        app
        clipped-left
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>NxPanel</v-toolbar-title>
    </v-app-bar>
  </div>
</template>

<script>
  export default {
    name: 'navigation',
    data () {
      return {
        drawer: this.$store.getters['navigation/drawer'],
        items: this.$store.getters['navigation/items']
      };
    },
  };
</script>

<style lang="scss" scoped>

</style>
