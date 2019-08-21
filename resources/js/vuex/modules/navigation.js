import Dashboard from '../../views/Dashboard';
import Users from '../../views/Users';
import Packages from '../../views/Packages';

export default {
  namespaced: true,
  state: {
    drawer: true,
    items: [
      {item: 'Dashboard', name: 'dashboard', icon: 'mdi-view-dashboard', path: '/', component: Dashboard},
      {item: 'Packages', name: 'packages', icon: 'mdi-package-variant', path: '/packages', component: Packages},
      {item: 'User', name: 'users', icon: 'mdi-account-group', path: '/users', component: Users},
      {item: 'Web', name: 'web', icon: 'mdi-earth', path: '/web', component: Dashboard},
      {item: 'DNS', name: 'dns', icon: 'mdi-dns', path: '/dns', component: Dashboard},
      {item: 'Mail', name: 'mail', icon: 'mdi-email', path: '/mail', component: Dashboard},
      {item: 'Database', name: 'database', icon: 'mdi-database', path: '/databases', component: Dashboard},
      {item: 'Firewall', name: 'firewall', icon: 'mdi-shield-lock', path: '/firewall', component: Packages},
      {item: 'Cron', name: 'cron', icon: 'mdi-timer', path: '/cron', component: Packages},
      {item: 'Server', name: 'server', icon: 'mdi-tune', path: '/server', component: Dashboard},
      {item: 'Backup', name: 'backup', icon: 'mdi-content-save', path: '/backup', component: Packages},
    ],
  },
  getters: {
    drawer (state) {
      return state.drawer;
    },
    items (state) {
      return state.items;
    },
  },
  mutations: {},
  actions: {}
};
