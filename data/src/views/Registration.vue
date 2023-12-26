<template>
  <Header></Header>
  <div class="wrapper">
    <div class="txt_subscription">
      <h1 class="p-b-30">Регистрация</h1>
    </div>
  </div>
    <div class="wrapper">
        <form @submit.prevent="submit" class="form_registration">
            <input required type="text" placeholder="ФИО" name="name" v-model="name" class="input_registration">
            <input required type="email" placeholder="Почта" name="email" v-model="email"  class="input_registration">
            <input required type="tel" placeholder="Номер телефона" name="phone" v-model="phone"  class="input_registration">
            <input required type="password" placeholder="Пароль" name="password" v-model="password"  class="input_registration">
            <input required type="password" placeholder="Повторить пароль" v-model="password_repeat"  name="password_repeat" class="input_registration">
            <input type="submit" class="input_registration_submit" value="Зарегистрироваться">
        </form>
    </div>

  <Footer></Footer>
</template>

<script>
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"
import {request} from "../../js/request.js"

export default {
  data: () => {
    return{
      name: '',
      email: '',
      phone: '',
      password: '',
      password_repeat: '',
    }
  },
  components: {
    Header, Footer
  },
  methods: {
      async submit (){
        if (this.password === this.password_repeat){
        let res = await request("routes/registration.php", "POST", {
          name: this.name,
          email: this.email,
          phone: this.phone,
          password: this.password,
          password_repeat: this.password_repeat,
        })
          this.$router.push('/login')
        }
        else{
          console.log('Пароли разные')
        }
      }
  },
}
</script>
