<template>
  <Header></Header>
  <section class="sec_user">
    <div class="wrapper">

      <div class="txt_subscription">
        <h1 class="p-b-30">Корзина</h1>
      </div>
        <div class="user_book" v-show="sub[0].id_sub">
            <div class="acor-container" style="color: black">
                <label >
                    {{ sub[0].name }}
                </label>
                <div class="acor-body">
                    <p>{{ sub[0].annotation }}</p>
                </div>
            </div>
        </div>

      <div class="user_book" v-for="(element,id) in to">
          <div class="acor-container">
              <label @click="click(id)">
                  {{ element.title }} - {{element.author}}
              </label>
              <div class="acor-body" v-if="element.hidden">
                  <img :src="element.img" style='width: 250px; height: 350px;'>
                  <p>{{element.annotation}}</p>
              </div>
          </div>
      </div>
    </div>
  </section>

</template>

<script>
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"

export default {
  name: 'Basket',
  data: () => ({

  }),
  components: {
    Header, Footer
  },
  methods: {
      click(id){
          this.to[id].hidden = !this.to[id].hidden
      }
  },
}
</script>
