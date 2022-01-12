import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Register from '@/components/Register'
import Home from '@/components/Home'
import Login from '@/components/Login'
import Karta from '@/components/Karta'
import Kategorie from '@/components/Kategorie'
import Znajomi from '@/components/Znajomi'
import Forgot from '@/components/Forgot'
import User from '@/components/User'
import pay from '@/components/pay'



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
    },
    {
      path: '/kategorie',
      name: 'kategorie',
      component: Kategorie
    },
    {
      path: '/Znajomi',
      name: 'Znajomi',
      component: Znajomi
    },
    {
      path: '/forgot',
      name: 'forgot',
      component: Forgot
    },
    {
      path: '/user',
      name: 'user',
      component: User
    },
    {
      path: '/pay',
      name: 'pay',
      component: pay
    }
  ]
})
