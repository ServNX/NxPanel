import Vue from 'vue'
import Vuetify from 'vuetify/lib'

Vue.use(Vuetify)

export default new Vuetify({
  theme: {
    dark: true,
    themes: {
      dark: {
        primary: '#51D6FF',
        secondary: '#2F9C95',
        accent: '#B4ADEA',
        anchor: '#8c9eff',
        success: '#37FF8B',
        warning: '#FFFD82',
        error: '#E84855',
      },
    },
  },
})
