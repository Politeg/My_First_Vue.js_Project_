<template>
  <Header></Header>
  <div class="wrapper">
    <form method="post" class="form_bookPage">
      <input class="input_registration input_bookPage" placeholder="Названия книг, авторы, жанры, теги" type="text">
      <input type="submit" class="input_registration_submit input_page_submit" value="Найти">
    </form>
  </div>

  <div class="wrapper">
    <div class="txt_subscription">
      <h1 class="p-b-30">Каталог</h1>
    </div>
    <div class="bookPage_catalog">

      <Card

          v-for="item in catalog"
          :key="item"

          :id="item['id']"
          :titel="item['titel']"
          :author="item['author']"
          :annotation="item['annotation']"
          :cover="item['cover']"
          :genre="item['genre']"
          :price="item['price']"

          @getElementId="goToBookPage(id=item['id'])"
      />

    </div>

  </div>
  <Footer></Footer>
</template>

<script>
import {request} from "../../js/request";
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"
import Card from "@/components/Card.vue"

export default {
  name: 'Catalog',
  data(){
    return{
        catalog:[]
    }
  },
  mounted() {
    this.getCatalogItem()
  },
  components: {
    Header, Footer, Card
  },
  methods: {
     goToBookPage(id){
       this.$router.push({name: 'bookPage', params: {id: id}})

     },
    async getCatalogItem() {
      let res = await request('routes/catalog.php', "POST")
      let catalog = res['json']
      catalog = Object.entries(catalog)
      catalog.pop()
      catalog.pop()
      catalog.forEach(item => {
        this.catalog.push(item[1])
      })
      console.log(this.catalog)
    }
  },
}
</script>
