import {createApp} from 'vue'

require('./bootstrap')
import App from './App.vue'
import axios from 'axios'
import router from './router'
import { createStore } from 'vuex'



// Create a new store instance.
const store = createStore({
  state () {
    return {
      count: 0
    }
  },
  mutations: {
    increment (state) {
      state.count++
      console.log(state.count)
    }
  }
})


const app = createApp(App)
app.config.globalProperties.$axios = axios;
app.use(router)
app.use(store)
app.mount('#app')
