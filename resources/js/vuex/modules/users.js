import axios from '../../axios'

export default {
  namespaced: true,
  state: {
    users: [
      // Temporary data
      {
        id: 1001,
        username: 'Poppabear',
        first_name: 'Mike',
        last_name: 'Wiley',
        package_name: 'Basic',
        domains: 4,
        domains_total: 10,
        emails: 10,
        emails_total: 20,
        email: 'servnx@gmail.com',
        dns_domains: 1,
        dns_records: 24,
        dns_total: 100,
        disk_space: 85,
        disk_space_total: 0,
        ssh_shell: 'bash',
        databases: 2,
        databases_total: 10,
        backups: 5,
        backups_total: 5
      },
      {
        id: 2346,
        username: 'DGRoofing',
        first_name: 'Gerri',
        last_name: 'Howard',
        package_name: 'Premium',
        domains: 4,
        domains_total: 10,
        emails: 10,
        emails_total: 20,
        email: 'servnx@gmail.com',
        dns_domains: 1,
        dns_records: 24,
        dns_total: 100,
        disk_space: 85,
        disk_space_total: 0,
        ssh_shell: 'bash',
        databases: 2,
        databases_total: 10,
        backups: 5,
        backups_total: 5
      },
      {
        id: 3534,
        username: 'ServNX LLC',
        first_name: 'Mike',
        last_name: 'Wiley',
        package_name: 'Premium',
        domains: 4,
        domains_total: 10,
        emails: 10,
        emails_total: 20,
        email: 'servnx@gmail.com',
        dns_domains: 1,
        dns_records: 24,
        dns_total: 100,
        disk_space: 85,
        disk_space_total: 0,
        ssh_shell: 'bash',
        databases: 2,
        databases_total: 10,
        backups: 5,
        backups_total: 5
      }
    ],
  },
  getters: {
    users (state) {
      return state.users
    },
  },
  mutations: {
    SET_USERS (state, users) {
      state.users = users
    },
  },
  actions: {
    FetchUsers ({ commit, state }) {
      return new Promise((resolve, reject) => {
        axios.get('/users').then(resp => {
          commit('SET_USERS', resp.data)
          resolve(resp.data)
        }).catch(err => {
          reject(err)
        })
      })
    },
  },
}
