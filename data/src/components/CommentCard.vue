<template>

  <div class="comments">
    <div class="comments_user_info">
      <img src="src/assets/img/user-circle.svg" alt="">
        {{user_id}}
    </div>
      {{text}}
  </div>
</template>

<script>

export default {
  props:['item', 'user_id', 'text'],
  data: () => {
    return{

    }
  },
  methods: {

  }
}

</script>
