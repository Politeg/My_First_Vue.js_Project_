<template>
  <Header></Header>
  <div class="" >
    <img :src="cover" alt="">
    <p class="p-b-20">{{ titel }}</p>
    <p class="p-b-20">Автор:  {{ author }}</p>
    <p class="p-b-20">Аннотация:  {{ annotation }}+</p>
    <p class="p-b-20">{{ price }} ₽</p>
    <button class="btn-border-red">Купить</button>
  </div>

</template>

<script>

import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"
import Card from "@/components/Card.vue"

export default {
  props:['item', 'id', 'titel', 'author', 'annotation', 'cover', 'genre', 'price'],
  name: "bookPage",
  data() {
    return {
      film: null,
    }
  },

  components: {
    Header, Footer, Card
  },
  computed: {
    getId(){
      return this.$router.currentRoute._value.params.id
    }
  },
  methods: {

  },
  async mounted() {
    let res = await fetch(`http://localhost/cinema/php/bookPage.php?id=${this.getId}`, {
      method: 'GET',
    })

  }
}
</script>

<style scoped>

</style>