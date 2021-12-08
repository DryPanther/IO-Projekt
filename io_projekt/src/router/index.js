import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Register from '@/components/Register'
import Home from '@/components/Home'
import Login from '@/components/Login'
import Karta from '@/components/Karta'


Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/register',
      name: 'register',
      component: Register
    },
    {
      path: '/home',
      name: 'home',
      component: Home
      },
      {
        path: '/login',
        name: 'login',
        component: Login
      },
    {
      path: '/Karta',
      name: 'Karta',
      component: Karta
    }
  ]
})
