<template>
  <Header></Header>
    <div class="wrapper">
        <form  method="post" @submit.prevent="login" class="form_registration">
            <input required type="email" placeholder="Почта" name="email" v-model="email" class="input_registration">
            <input required type="password" placeholder="Пароль" name="password" v-model="password" class="input_registration">
            <input  type="submit" class="input_registration_submit">
        </form>

    </div>

</template>

<script>
import Header from "@/components/Header.vue"
import {request} from "../../js/request";

export default {
  name: 'Input',
  data:() =>{
    return{
      email: '',
      password: '',
    }
  },
  components: {
    Header
  },
  methods: {
    async login (){
        let res = await request("routes/input.php", "POST", {
           email: this.email,
           password: this.password,
        })
      console.log(res.json)


      if (res['json']['message']=="Success Login"){
         localStorage.setItem('token', res["json"]['token'])
         localStorage.setItem('name', res["json"]['name'])
         localStorage.setItem('email', res["json"]['email'])
         localStorage.setItem('phone', res["json"]['phone'])
         localStorage.setItem('password', res["json"]['password'])
         this.$router.push('/user')
      }
    },

}
}
</script>
