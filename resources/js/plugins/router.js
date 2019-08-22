import Vue from 'vue'
import Router from 'vue-router'
import store from '../vuex/store'
import Login from '../views/Login'

Vue.use(Router)

const router = new Router({
  mode: 'history',
  routes: [
    ...store.getters['navigation/items'],
    {
      name: 'login',
      path: '/login',
      component: Login,
    },
  ]
})

window.Router = router

export default router
