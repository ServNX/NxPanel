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
  import ToolbarEvents from '../mixins/page-toolbar-events';
  import Packages from './Dashboard/Packages';

  export default {
    name: 'dashboard',
    mixins: [ToolbarEvents],
    data () {
      return {
        component: Packages,
        toolbar_items: [
          {
            name: 'packages',
            item: 'Packages',
            icon: 'mdi-package-variant',
            color: 'secondary',
            onClick: () => {
              this.component = Packages
            }
          },
          {
            name: 'graphs',
            item: 'Graphs',
            icon: 'mdi-chart-bell-curve',
            color: 'accent',
            onClick: () => {
              this.component = Packages
            }
          },
          {
            name: 'stats',
            item: 'Statistics',
            icon: 'mdi-poll',
            color: 'pink accent-4',
            onClick: () => {
              this.component = Packages
            }
          },
          {
            name: 'logs',
            item: 'Logs',
            icon: 'mdi-library-books',
            onClick: () => {
              this.component = Packages
            }
          },
          {
            name: 'firewall',
            item: 'Firewall',
            icon: 'mdi-shield-lock',
            color: 'red accent-3',
            onClick: () => {
              this.component = Packages
            }
          },
          {
            name: 'cron',
            item: 'Cron',
            icon: 'mdi-timer',
            color: 'amber lighten-3',
            onClick: () => {
              this.component = Packages
            }
          },
          {
            name: 'backups',
            item: 'Backup',
            icon: 'mdi-content-save',
            color: 'deep-orange lighten-2',
            onClick: () => {
              this.component = Packages
            }
          },
        ]
      };
    }
  };
</script>
