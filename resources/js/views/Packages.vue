<template>
  <div>
    <page-toolbar
        @onClick="onClick"
        :items="toolbar_items"
    />

    <PackagesDataTable/>
  </div>
</template>

<script>
  import ToolbarEvents from '../mixins/page-toolbar-events';
  import PackagesDataTable from '../components/Packages/PackagesDataTable';

  export default {
    name: 'packages',
    mixins: [ToolbarEvents],
    components: {PackagesDataTable},
    data () {
      return {
        toolbar_items: [
          {
            name: 'add-package',
            item: 'Add Package',
            icon: 'mdi-package-variant',
            color: 'secondary',
            onClick: () => {

            }
          },
        ]
      };
    }
  };
</script>

<style scoped>

</style>
