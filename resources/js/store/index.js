// import Axios from "axios"

export default {
    state:{
        category: [],
    },
    getters:{
        getCategory(state){
            return state.category
        }
    },
    actions:{
        getAllCategory(context){
            axios.get('/show-category')
                .then((response)=>{
                    context.commit('categories',response.data.categories)
                })
        }
    },
    mutations:{
        categories(state,data){
            return state.category = data
        }
    },
}