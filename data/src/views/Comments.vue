<template>
  <Header></Header>
  <div class="wrapper">
    <div class="txt_subscription">
      <h1 class="p-b-30">Отзывы</h1>
    </div>
    <form @submit.prevent="submit" method="post" class="form_bookPage">
      <input class="input_registration input_bookPage" placeholder="Добавить отзыв" v-model="comments" type="text">
      <input type="submit" class="input_registration_submit">
    </form>

    <Card
        v-for="item in comment"
        :key="item"

        :user_id="item['user_id']"
        :text="item['text']">

    </Card>
  </div>

  <Footer></Footer>
</template>

<script>
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"
import {request} from "../../js/request";
import Card from "@/components/CommentCard.vue"

export default {
  name: 'Comments',
  data:()=>{
    return{
      comment: [],
      token: localStorage.getItem('token'),
      comments: '',
    }
  },
  components: {
    Header, Footer, Card
  },
  methods: {
    async submit (){
      let res = await request("routes/comments.php", "POST", {
        token: this.token,
        comments: this.comments,
      })
      // console.log(regInfo)
    },
    async getCatalogItem() {
      let res = await request('routes/output_comments.php', "POST")
      let comment = res['json']
      comment = Object.entries(comment)
      comment.pop()
      comment.pop()
      comment.forEach(item => {
        this.comment.push(item[1])
      })
      console.log(this.comment)
    }
  },
  mounted() {
    this.getCatalogItem()
  },
}
</script>
