<template>
  <Header></Header>
  <div class="wrapper">
    <div class="txt_subscription">
      <h1 class="p-b-30">Добавить свою книгу</h1>
    </div>
  </div>
    <div class="wrapper">
        <form @submit.prevent="submit" method="post" class="form_createBook" enctype="multipart/form-data">
            <input class="input_registration" type="text" v-model="titel" name="titel" placeholder="Название книги">
            <textarea class="input_registration" placeholder="Аннотация" v-model="annotation" name="annotation"></textarea>
            <p class="p-b-20">Жанр</p>
            <select name="select" class="select" v-model="genre">
                <option value="1" >Комедия</option>
                <option value="2">Трагедия</option>
                <option value="3">Драма</option>
                <option value="4">Ужасы</option>
                <option value="5">Фэнтези</option>
                <option value="6">Фантастика</option>
                <option value="7">Роман</option>
                <option value="8">Новелла</option>
                <option value="9">Повесть</option>
                <option value="10">Сказка</option>
            </select>
            <label class="input-file" for="file">
                <span>Выберите обложку</span>
              <input ref="Cover" type="file" id="file" name="file" @change="changeFile">
            </label>
            <input class="input_registration" type="text" v-model="author" name="author" placeholder="Автор">
            <input class="input_registration" type="number" v-model="price" name="price" placeholder="Цена">
            <input type="submit" value="Создать" class="input_registration_submit">
        </form>

    </div>

  <Footer></Footer>
</template>

<script>
import Header from "@/components/Header.vue"
import Footer from "@/components/Footer.vue"
import {request} from "../../js/request";

export default {
  name: 'CreateBook',
  data:()=>{
    return{
      titel: '',
      annotation: '',
      select: '',
      cover: '',
      author: '',
      genre: '',
      price: '',
    }
  },
  components: {
    Header, Footer
  },
  methods: {
    changeFile(e){
      this.fileOperator = this.$refs.Cover.files[0];
      this.cover = this.fileOperator;
      this.preview = URL.createObjectURL(this.cover);
    },
    async submit (){
      let formData = new FormData()

      formData.append('titel', this.titel)
      formData.append('annotation', this.annotation)
      formData.append('cover', this.cover)
      formData.append('author', this.author)
      formData.append('genre', this.genre)
      formData.append('price', this.price)

      let res = await fetch('http://localhost/api/routes/createBook.php', {
        method: 'POST',
        headers: {},
        body: formData
      })

      this.$router.push('/catalog')
      console.log(res)
    },

  },
}
</script>
