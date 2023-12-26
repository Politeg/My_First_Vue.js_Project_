<template>

  <header class="med-del">
    <div class="wrapper">
      <div class="header-menu-contacts">
        <div class="header-menu-contacts-addres">
          <p class="p-w-13">Челябинск</p>
          <p class="p-w-13">ул. Энтузиастов дом 17</p>
        </div>
        <div class="header-menu-contacts-number">
          <p class="p-w-13">+7 (800) 800 35 35</p>
        </div>
      </div>

    </div>
  </header>
  <section class="sec-2">
    <div class="wrapper">
      <div class="header-menu-links">
        <input type="checkbox" id="dsw" class="dis-none">
        <div class="header-menu-dop none">
          <div class="header-med-menu-cell">
            <a href="#" class="p-b-16 bold">Подписки</a>
          </div>
          <div class="header-med-menu-cell">
            <a href="#" class="p-b-16 bold">Каталог книги</a>
          </div>
          <div class="header-med-menu-cell">
            <a href="#" class="p-b-16 bold">Добавить свою книгу</a>
          </div>
          <div class="header-med-menu-cell">
            <a href="#" class="p-b-16 bold">Отзывы</a>
          </div>
          <div class="header-med-menu-cell"></div>
          <div class="header-med-menu-cell">
            <img src="@/assets/img/man.svg" alt="">
            <a class="p-b-16 bold">Мой кабинет</a>
          </div>
          <div class="header-med-menu-cell">
            <img src="@/assets/img/phone.svg" alt="">
            <a class="p-b-16 bold">+7 (495) 111 22 72</a>
          </div>
          <div class="header-med-menu-cell-spec">
            <img src="@/assets/img/map-point.svg" alt="">
            <a class="p-b-16 bold">ул. Макаренко дом 2/21 стр.2</a>
          </div>
          <div class="header-med-menu-cell-spec">
            <img src="@/assets/img/messege.svg" alt="">
            <a class="p-b-16 bold">info@genesis-forum.ru</a>
          </div>
        </div>
        <label for="dsw" class="none">
          <img src="@/assets/img/header-menu.svg" alt="">
        </label>
        <router-link to="/"><p class="logo-p">ТочноНеЛитРес</p></router-link>
        <img src="@/assets/img/door.svg" alt="" class="none">
        <div class="header-menu-links-links med-del">
          <router-link to="/catalog" class="p-b-16-Montserrat">Каталог книг</router-link>
          <router-link to="/subscription" class="p-b-16-Montserrat">Подписки</router-link>
          <router-link to="/createBook" class="p-b-16-Montserrat">Добавить книгу</router-link>
          <router-link to="/basket" class="p-b-16-Montserrat">Корзина</router-link>
          <router-link to="/comments" class="p-b-16-Montserrat">Отзывы</router-link>

        </div>
        <div v-if="!user_mode">
          <router-link to="/registration"><button class="btn-border-red ">Регистрация</button></router-link>
          <router-link to="/login"><button class="btn-border-red ">Войти</button></router-link>
        </div>

        <div v-if="user_mode">
          <router-link to="/user"><button class="btn-border-red ">Профиль</button></router-link>
          <button  @click="exit" class="btn-border-red ">Выйти</button>
        </div>

      </div>
    </div>
  </section>

</template>

<script>
import {request} from "../../js/request";

export default {
  data:() => {
    return {
      user_mode: false,
    }
  },
  name: 'Header',
  methods: {
     exit (){
      localStorage.removeItem('token');
      localStorage.removeItem('userData');
      location = '/'
    }
  },
  mounted() {
    let token = localStorage.getItem("token")
    if (token){
      this.user_mode=true
    }
  }
}

</script>
