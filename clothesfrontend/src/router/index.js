import Vue from 'vue'
import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'
import Clothe from '@/components/Clothe'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Clothe',
      component: Clothe
    }
  ]
})
