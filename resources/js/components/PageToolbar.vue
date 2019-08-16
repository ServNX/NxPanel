<template>
  <v-toolbar>
    <v-toolbar-items>
      <v-btn
          text
          v-for="item in items"
          :key="item.name"
          :to="item.path"
          @click="$emit('onClick', item)"
      >
        <span>{{item.item}}</span>
        <v-icon large :color="item.color">{{ item.icon }}</v-icon>
      </v-btn>
    </v-toolbar-items>
  </v-toolbar>
</template>

<script>
  export default {
    name: 'page-toolbar',
    props: {
      items: {type: Array, required: true}
    }
  };
</script>

<style lang="scss" scoped>
  .v-toolbar ::v-deep .v-btn__content {
    flex-direction: column-reverse;
  }
</style>
