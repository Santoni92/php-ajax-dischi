console.log('VUE JS OK!!');

const app = new Vue({
    el:'#app',
    data:{
        albums:[]
    },
    mounted(){
        axios.get("https://localhost/php-ajax-dischi/strutturaDati.php").then((response) => {
            console.log(response);
        }).then((error) => {
            console.log(error);
        })
    }
})