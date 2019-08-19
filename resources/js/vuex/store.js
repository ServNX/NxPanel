import Vue from 'vue';
import Vuex from 'vuex';

import AuthModule from './modules/auth';
import NavModule from './modules/navigation';
import UsersModule from './modules/users';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    auth: AuthModule,
    navigation: NavModule,
    users: UsersModule
  }
});
