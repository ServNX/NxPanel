import './bootstrap'
import store from './vuex/store'

import vuetify from './plugins/vuetify'
import router from './plugins/router.js'

import App from './layouts/App'

window.Vue = require('vue')

Vue.component('navigation', require('./components/Navigation').default)
Vue.component('page-toolbar', require('./components/PageToolbar').default)

const app = new Vue({
  el: '#app',
  store,
  vuetify,
  router,
  render: h => h(App),
})

window.App = app
