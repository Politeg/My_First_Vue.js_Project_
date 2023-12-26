<template>
  <Header></Header>
  <div class="wrapper">
  </div>
  <div class="wrapper">
    <div class="txt_subscription">
      <h1 class="p-b-30">Подписки</h1>
    </div>
  </div>
  <div class="wrapper">
    <section class="sec_subscription">
      <div class="card_subscription">
        <h2 class="p-b-20">Начинающий</h2>
        <p class="p-b-14">Скидки на все книги в размере 5% <br> <br>
          Уведомления о нововышедших произведениях <br><br>
          Возмонжость стать лучшим читателем на одну неделю
        </p>
        <h2 class="p-r-20" >Цена 199₽</h2>
        <button class="btn-red">Купить</button>
      </div>
      <div class="card_subscription">
        <h2 class="p-b-20">Средний</h2>
        <p class="p-b-14">Скидки на все книги в размере 15% <br> <br>
          Уведомления о нововышедших произведениях<br> <br>
          Возможность прорекламировать свою книгу - Ваша книга будет  находитьсяв
          топе один день
        </p>
        <h2 class="p-r-20">Цена 499₽</h2>
        <button class="btn-red">Купить</button>
      </div>
      <div class="card_subscription">
        <h2 class="p-b-20">Профессионал</h2>
        <p class="p-b-14">Скидки на все книги в размере 25% <br> <br>
          Уведомления о нововышедших произведениях<br> <br>
          Возможность прорекламировать свою книгу - Ваша книга будет  находитьсяв
          топе неделю
        </p>
        <h2 class="p-r-20">Цена 799₽</h2>
        <button class="btn-red">Купить</button>
      </div>
      <div class="card_subscription">
        <h2 class="p-b-20">Для писателей</h2>
        <p class="p-b-14">Скидки на все книги в размере 55% <br> <br>
          Уведомления о нововышедших произведениях <br><br>
          Возможность прорекламировать свою книгу - Ваша книга будет  находитьсяв
          топе месяц
        </p>
        <h2 class="p-r-20">Цена 1999₽</h2>
        <button class="btn-red">Купить</button>
      </div>
    </section>
  </div>
  <Footer></Footer>

</template>

<script>
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"

export default {
  name: 'Subscription',
  data(){
    return{}
  },
  components: {
    Header, Footer
  },
  methods: {},
}
</script>
