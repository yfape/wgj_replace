<!--
 * @Author: your name
 * @Date: 2021-07-30 09:47:20
 * @LastEditTime: 2021-07-30 15:13:45
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \wgj_replace\web\src\components\HelloWorld.vue
-->
<template>
  <q-page class="bg-grey-2 q-px-md q-py-lg">
    <div class="row items-center q-mb-md">
      <div class="q-mr-sm"><q-img style="width:25px" src="../assets/bt.png"/></div>
      <div class="text-bold text-h5 text-grey-9">{{title}}</div>
    </div>
    <q-infinite-scroll @load="onLoad" :offset="50" :disable="end">
      <q-item @click="GoUrl(item.url)" class="bg-white q-mb-sm" clickable v-ripple v-for="item in content" :key="item.article_id">
        <q-item-section>{{item.title}}</q-item-section>
        <q-item-section avatar>
          <q-img style="width:75px;border-radius:3px" :ratio="16/11" :src="item.img"/>
        </q-item-section>
      </q-item>
      <template v-slot:loading>
        <div class="row justify-center q-my-md">
          <q-spinner-dots color="blue-10" size="40px" />
        </div>
      </template>
    </q-infinite-scroll>
    <div v-if="end" class="q-px-lg q-py-md text-caption text-grey-6 text-center">—— 无更多文章 ——</div>
  </q-page>
</template>

<style>
</style>

<script>
export default {
  name: 'HelloWorld',
  props:['title','colid'],
  data(){return{
    content:[],end:false
  }},
  mounted(){

  },
  methods:{
    onLoad(index, done){
      this.axios.get(`/articles/${this.colid}/${index}`).then(res => {
        if(res.data.length > 0){
          this.content.push(...res.data)
          done()
        }else{
          this.end = true
        }
      })
    },
    GoUrl(url){
      window.open(url)
    }
  }
}
</script>
