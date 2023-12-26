<template>
  <Header></Header>
  <section class="sec-3 ">
    <div class="sec-3-txt">
      <h1 class="p-w-38">Онлайн библиотека</h1>
      <p class="p-w-16 width-sec-3">У нас вы сможете купить и прочитать новейшие книги,
        которые только выходят в свет</p>
      <router-link to="/catalog"><button class="btn-red">Каталог книг</button></router-link>
    </div>
  </section>
  <section class="sec-5">
    <div class="wrapper">
      <div class="sec-5-format-study">
        <h1 class="p-b-30">Ссылки на вкладки</h1>
      </div>
      <div class="sec-5-collage">
        <div class="sec-5-collage-gorizont">
          <div class="sec-5-collage-vert">
            <div class="sec-5-collage-cell1">
              <h3 class="p-w-26"> <span class="li-w">Подписки</span> </h3>
              <router-link to="/subscription"><button class="btn-red">Подробнее</button></router-link>
            </div>

          </div>
          <div class="sec-5-collage-vert">
            <div class="sec-5-collage-cell3">
              <h3 class="p-w-26">Отзывы</h3>
              <router-link to="/comments"><button class="btn-red">Подробнее</button></router-link>
            </div>
            <div class="sec-5-collage-cell2">
              <h3 class="p-w-26">Добавить книгу</h3>
              <router-link to="/createBook"><button class="btn-red">Подробнее</button></router-link>
            </div>
          </div>
        </div>
      </div>

      <div class="arrow-med none">
        <img src="src/assets/img/arrow-l.svg" alt="">
        <div class="inputs-arrow-med none">
          <input type="submit" value=" ">
          <input type="submit" value=" ">
          <input type="submit" value=" ">
        </div>
        <img src="src/assets/img/arrow-r.svg" alt="">
      </div>
      <div class="sec-5-menu">
        <h1 class="p-b-30">Лучшие читатели</h1>
      </div>
      <div class="sec-5-cards">
        <div class="sec-5-card1 sec-5-card1-1-1">
          <div class="sec-5-card-info-2">
            <p class="p-b-20 bold">Александр Воронков</p>
          </div>
        </div>
        <div class="sec-5-card2 sec-5-card1-1-1 med-del">
          <div class="sec-5-card-info-2">
            <p class="p-b-20 bold">Александр Воронков</p>
          </div>
        </div>
        <div class="sec-5-card3 sec-5-card1-1-1 med-del">
          <div class="sec-5-card-info-2">
            <p class="p-b-20 bold">Александр Воронков</p>
          </div>
        </div>
        <div class="sec-5-card3 sec-5-card1-1-1 med-del">
          <div class="sec-5-card-info-2">
            <p class="p-b-20 bold">Александр Воронков</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-8">
    <div class="wrapper">
      <div class="sec-8-info-card-sponsor">
        <h1 class="p-b-30 width-sec-8-sponsor">Мы сотрудничем со следующими копманиями:</h1>
        <div class="sec-8-psonsors">

          <div class="sec-8-psonsors-goriz">
            <div class="sec-8-psonsors-cards">
              <img src="src/assets/img/sber.svg" alt="">
            </div>
            <div class="sec-8-psonsors-cards">
              <img src="src/assets/img/VTB.svg" alt="">
            </div>
            <div class="sec-8-psonsors-cards">
              <img src="src/assets/img/gerb-ru.svg" alt="">
              <p class="p-b-14-Monserat">Министерство здравохранения РФ</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-10"></section>
  <section class="sec-11">
    <div class="wrapper">
      <div class="sec-11-reg-card">
        <div class="sec-11-reg-card-txt">
          <p class="p-b-30 bold">Обратная связь</p>
        </div>
        <div class="sec-11-reg-card-reg">
          <input type="tel" placeholder="Телефон">
          <div class="flex">
            <input type="text" placeholder="Имя">
            <input type="email" placeholder="E-mail">
          </div>
          <div class="flex">
            <button class="btn-red none">Отправить</button>
            <p class="p-b-12">Нажимая на кнопку, я соглашаюсь на обработку
              персональных данных и с правилами
              пользования Платформой</p>
            <button class="btn-red" type="submit">Отправить</button>
          </div>
        </div>
      </div>
      <div class="sec-11-addres">
        <div  class="sec-11-addres-txt">
          <p class="p-b-30 bold">Контактная <br>
            информация</p>
          <p class="p-b-16">
            Адрес: г. Челябинск, ул. Энтузиастов дом 17
            <br><br>
            Телефон: +7 (800) 800 35 35
            <br><br>
            Почта: tochnonelitres10@mail.ru</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d586.6569827849687!2d61.376796016994966!3d55.15135927484153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c59300adc4c025%3A0x401669328c0959c8!2z0JjQvdGB0YLQuNGC0YPRgiDQkNCx0L7QsdC-0LLQtdC00LXQvdC40Y8!5e0!3m2!1sru!2sru!4v1677136878484!5m2!1sru!2sru" width="100%" height="450" style="border:0; border-radius: 20px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <Footer></Footer>
</template>

<script>
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"

export default {
  name: 'Index',
  data(){
    return{}
  },
  components: {
    Header, Footer
  },
  methods: {},
}
</script>
