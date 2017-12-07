import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
import Example from '../components/Example'

const router = new Router({
  mode: 'history',
  routes:[
    { path:'/', component:Example}
  ]
})

console.log(router)

export default router
