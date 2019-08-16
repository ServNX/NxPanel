import Dashboard from '../../views/Dashboard/index'
import Users from '../../views/Users/index'

export default {
  namespaced: true,
  state: {
    drawer: true,
    items: [
      {
        item: 'Dashboard',
        name: 'dashboard',
        icon: 'mdi-view-dashboard',
        path: '/',
        component: Dashboard,
      },
      {
        item: 'User',
        name: 'users',
        icon: 'mdi-account-group',
        path: '/users',
        component: Users,
      },
      {item: 'Web', name: 'web', icon: 'mdi-earth', path: '/web', component: Dashboard},
      {item: 'DNS', name: 'dns', icon: 'mdi-dns', path: '/dns', component: Dashboard},
      {item: 'Mail', name: 'mail', icon: 'mdi-email', path: '/mail', component: Dashboard},
      {item: 'Database', name: 'database', icon: 'mdi-database', path: '/databases', component: Dashboard},
      {item: 'Server', name: 'server', icon: 'mdi-tune', path: '/server', component: Dashboard},
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
