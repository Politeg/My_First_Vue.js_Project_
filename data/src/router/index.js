import { createRouter, createWebHistory } from 'vue-router'
import Index from "@/views/Index.vue"
import Input from "@/views/Input.vue"
import Registration from "@/views/Registration.vue"
import Catalog from "@/views/Catalog.vue"
import Comments from "@/views/Comments.vue"
import Basket from "@/views/Basket.vue"
import CreateBook from "@/views/CreateBook.vue"
import Subscription from "@/views/Subscription.vue"
import User from "@/views/User.vue"
import bookPage from "@/views/bookPage.vue"

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
      {
      path: "/",
      name: "home",
      component: Index
    },
    {
      path: "/login",
      name: "login",
      component: Input
    },
      {
          path: "/registration",
          name: "registration",
          component: Registration
      },
      {
          path: "/basket",
          name: "basket",
          component: Basket
      },
      {
          path: "/user",
          name: "user",
          component: User
      },
      {
          path: "/catalog",
          name: "catalog",
          component: Catalog
      },
      {
          path: "/comments",
          name: "comments",
          component: Comments
      },
      {
          path: "/createBook",
          name: "createBook",
          component: CreateBook
      },
      {
          path: "/subscription",
          name: "subscription",
          component: Subscription
      },{
          path: "/bookPage/:id?",
          name: "bookPage",
          component: bookPage
      },

  ]
})

export default router

let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}