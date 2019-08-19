<template>
  <div>
    <page-toolbar
        @onClick="onClick"
        :items="toolbar_items"
    />

    <component :is="component"/>
  </div>
</template>

<script>
  import ToolbarEvents from '../mixins/page-toolbar-events'
  import Graphs from './Graphs'
  import Statistics from './Statistics'
  import Logs from './Logs'

  export default {
    name: 'dashboard',
    mixins: [ToolbarEvents],
    data () {
      return {
        component: Graphs,
        toolbar_items: [
          {
            name: 'graphs',
            item: 'Graphs',
            icon: 'mdi-chart-bell-curve',
            color: 'accent',
            onClick: () => {
              this.component = Graphs
            }
          },
          {
            name: 'stats',
            item: 'Statistics',
            icon: 'mdi-poll',
            color: 'pink accent-4',
            onClick: () => {
              this.component = Statistics
            }
          },
          {
            name: 'logs',
            item: 'Logs',
            icon: 'mdi-library-books',
            onClick: () => {
              this.component = Logs
            }
          },
        ]
      };
    }
  };
</script>
