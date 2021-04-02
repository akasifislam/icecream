import AdminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import CategoryEdit from './components/admin/category/Edit.vue'
import CategoryAdd from './components/admin/category/New.vue'
import PostList from './components/admin/post/List.vue'
import PostAdd from './components/admin/post/New.vue'
import PostEdit from './components/admin/post/Edit.vue'

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
  {
      path: '/category-edit/:categoryid',
      component: CategoryEdit
  },
  // post route


    {
        path: '/post-list',
        component: PostList
    },
    {
        path: '/post-add',
        component: PostAdd
    },
    {
        path: '/post-edit/:postid',
        component: PostEdit
    },










]