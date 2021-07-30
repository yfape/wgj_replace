/*
 * @Author: your name
 * @Date: 2021-07-23 10:21:02
 * @LastEditTime: 2021-07-30 15:43:44
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \djspider_web\src\utils\axios.js
 */
// 这个时axios的配置
import axios from 'axios';
// import { config } from 'vue/types/umd';
// axios.defaults.baseURL = 'http://wgj_api.scdjw.com.cn';
axios.defaults.baseURL = 'http://192.168.2.3:8000/v1';
// 错误信息处理
const  errorHandle = (status) => {
    if(status != 200 && status != 201){
      // main.config.globalProperties.$notify(msg)
    }
}
// 添加请求拦截器
axios.interceptors.request.use(function (config) {
  // 在发送请求之前做些什么
  // console.log(config);
  if(localStorage.elementToken){
    config.headers.Authorization=localStorage.elementToken;
  }
  return config;
}, function (error) {
  // 对请求错误做些什么
  return Promise.reject(error);
});

// 添加响应拦截器
axios.interceptors.response.use(function (response) {
  // 对响应数据做点什么
  // console.log();
  // console.log(response.data.token);
  // response.headers['Authorization'] = response.data.token;
  return (response.status=== 200 || response.status=== 201) ? Promise.resolve(response.data): Promise.reject(response);
}, function (error) {
  // 对响应错误做点什么
  const {response}=error;
  if(response){
    errorHandle(response.status,response.data.msg)
    return Promise.reject(response.data);
  }else{
    // main.config.globalProperties.$notify()
  }
});
export default axios;

