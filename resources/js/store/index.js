// import Axios from "axios"

export default {
    state:{
        category: [],
        post: [],
    },
    getters:{
        getCategory(state){
            return state.category
        },
        getPost(state){
            return state.post
        }
    },
    actions:{
        getAllCategory(context){
            axios.get('/show-category')
                .then((response)=>{
                    context.commit('categories',response.data.categories)
                })
        },
        getaAllPost(context){
            axios.get('/show-post')
            .then((response)=>{
                context.commit('posts',response.data.posts)
            })
        }
    },
    mutations:{
        categories(state,data){
            return state.category = data
        },
        posts(state,data){
            return state.post = data
        }
    },
}