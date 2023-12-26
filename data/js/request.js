export async function request(url, method = 'GET', body = false, formData = false){

    let content = {}

    if(method !== 'GET') {
        content = {
            method,
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify(body)
        }
    }

    // https://dummyjson.com/

    //let res = await fetch('http://bvhpeax-m3.wsr.ru/localhost/api/' + url, content)
    let res = await fetch('http://localhost/api/' + url, content)
    let json = await res.json()

    return {response: res, json}
}