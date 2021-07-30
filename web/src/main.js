import './plugins/axios'
import { createApp } from 'vue'
import App from './App.vue'
import { Quasar } from 'quasar'
import axios from './plugins/axios'
import VueAxios from 'vue-axios'
import quasarUserOptions from './quasar-user-options'

createApp(App).use(Quasar, quasarUserOptions).use(VueAxios, axios).mount('#app')
