import {request} from "./request.js"


async function registration(){
    let res = await request('api/routes/registration.php', 'POST', {
        'name':'Pivchan',
        'email':'rick@gmail.com',
        'password':'12345678910',
        'password_req':'12345678910',
        'phone':'89515553535'
    })

    console.log(res)
}
async function auth(){
    let res = await request('api/routes/input.php', 'POST', {
        'email':'enot@gmail.com',
        'password':'12345678901'
    })

    console.log(res)
}
async function exit(){
    let res = await request('api/routes/exit.php', 'POST', {})
    console.log(res)
}



async function createBook(){
    let res = await request('api/routes/createBook.php', 'POST', {
        'titel':'Темные искусства',
        'annotation':'Аннотация',
        //'cover':'',
        //'text_file':"",
        'author':'Оскар Де Мюриэл',
        'price':'500',
        'genre_id':'1'
    })

    console.log(res)
}
async function buyBook(){
    let res = await request('api/routes/buyBook.php', 'POST', {
        'bookID': '3',
        'userId': '13'
    })

    console.log(res)
}
async function delBook(){
    let res = await request('api/routes/deleteBook.php', 'POST', {
        'bookID': '2'
    })

    console.log(res)
}
async function catalog(){
    let res = await request('api/routes/catalog.php', 'POST', {
        'search': ''
    })

    console.log(res)
}



async function addComments(){
    let res = await request('api/routes/comments.php', 'POST', {
        'comments':'gaow',
        'user_id': '13'
    })

    console.log(res)
}
async function delComments(){
    let res = await request('api/routes/delComments.php', 'POST', {
        'userID': '13',
        'text': ''
    })

    console.log(res)
}
async function outputComments(){
    let res = await request('api/routes/output_comments.php', 'POST', {
        'userID': '',
    })

    console.log(res)
}



async function buySubscription(){
    let res = await request('api/routes/subscription.php', 'POST', {
        'subscriptionID':'2',
        'user_id':'13'
    })

    console.log(res)
}


async function basket(){
    let res = await request('api/routes/basket.php', 'POST', {
        'userID': '1'
    })

    console.log(res)
}
