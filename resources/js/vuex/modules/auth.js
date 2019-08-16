import axios from '../../axios';

export default {
  namespaced: true,
  state: {
    user: null,
    token: null,
  },
  getters: {
    user (state) {
      return state.user;
    },
    token (state) {
      return state.token;
    },
  },
  mutations: {
    SET_USER (state, user) {
      state.user = user;
      localStorage.setItem('user', user);
    },
    SET_TOKEN (state, token) {
      state.token = token;
      localStorage.setItem('token', token);
    },
  },
  actions: {
    Login ({commit, state}, frmData) {
      return new Promise((resolve, reject) => {
        axios.post('/auth/login', {
          'email': frmData.email,
          'password': frmData.password,
        }).then(resp => {
          const user = JSON.stringify(resp.data.user, ' ');
          commit('SET_TOKEN', resp.data.access_token);
          commit('SET_USER', user);
          resolve(resp.data.user);
        }).catch(err => {
          reject(err);
        });
      });
    },
    ValidateAuth ({commit, state}) {
      let url = '/auth/validate';

      return new Promise((resolve, reject) => {
        axios.get(url)
          .then(response => {
            resolve(response.data);
          })
          .catch(err => {
            commit('SET_TOKEN', null);
            localStorage.clear();
            reject(err);
          });
      });
    }
  },
};
