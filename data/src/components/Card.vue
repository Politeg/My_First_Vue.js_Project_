<template>
  <div class='card_book' >
    <div class="div_flex_card">
      <div class="card_info">
        <h2>Название: {{titel}} </h2>
        <h2> Автор: {{author}}</h2>
        <img :src="cover" alt='' style='width: 250px; height: 350px;'>
      </div>
<!--        <h2 class="text_block_card"> Аннотация <br> <br><br>{{annotation}} </h2>-->
    </div>

    <h2>{{price-((price/100)*discount)}} руб.</h2>
    <button class='btn-red'>Подробнее</button>
  </div>

</template>

<script>

export default {
  props: ['item', 'id', 'titel', 'author', 'annotation', 'cover', 'genre', 'price'],
  data: () => {
    return {
      discount: 5,
    }
  },
  methods: {}
}

</script>
