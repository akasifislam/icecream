import AdminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import CategoryAdd from './components/admin/category/New.vue'

export const routes = [
  {
      path: '/home',
      component: AdminHome
  },
  {
      path: '/category-list',
      component: CategoryList
  },
  {
      path: '/category-add',
      component: CategoryAdd
  },
]