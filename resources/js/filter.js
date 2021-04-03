// momentjs
import moment from 'moment';
import Vue from 'vue'

Vue.filter('timeformat',(arg)=>{
  return moment(arg).format("Do-MM-YY");
})

Vue.filter('shortlength',(text,length,suffix)=>{
  return text.substring(0,length)+suffix;
})