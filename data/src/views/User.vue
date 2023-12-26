<template>
  <Header></Header>
  <section class="sec_user">
    <div class="wrapper">
      <div class="user_info_all">
        <img src="src/assets/img/user-circle.svg" alt="" class="img_user">
        <div class="user_info">
            <p class="p-b-24">Имя: {{name}}</p>
            <p class="p-b-24">Email: {{email}}</p>
            <p class="p-b-24">Телефон: {{phone}}</p>
        </div>
      </div>
    </div>
  </section>

</template>

<script>
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"

export default {
  name: 'User',
  data(){
    return{
      name: localStorage.getItem('name'),
      email: localStorage.getItem('email'),
      phone: localStorage.getItem('phone'),
    }
  },
  components: {
    Header, Footer
  },
  methods: {},
}
</script>
