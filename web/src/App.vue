<!--
 * @Author: your name
 * @Date: 2021-07-30 09:47:20
 * @LastEditTime: 2021-07-30 11:16:46
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \wgj_replace\web\src\App.vue
-->
<template>
  <q-layout view="lHh Lpr lFf">
    <q-page-container>
      <HelloWorld v-if="show" :title="title" :colid="colid"/>
    </q-page-container>
  </q-layout>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: { HelloWorld },
  data(){return{
    title:"",siteid:0,colid:0,show:false
  }},
  mounted(){
    this.getSite()
  },
  methods:{
    getSite(){
      this.siteid = this.getQueryVariable('siteid')
      this.colid = this.getQueryVariable('colid')
      this.axios.get(`/col/${this.siteid}/${this.colid}`).then(res => {
        document.title = res.data
        this.title = res.data
        this.show = true
      })
    },
    getQueryVariable(variable){
      var query = window.location.search.substring(1);
      var vars = query.split("&");
      for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable){
          return pair[1];
        }
      } 
      return(0);
    }
  }
}
</script>
