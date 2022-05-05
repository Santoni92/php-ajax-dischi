console.log('VUE JS OK!!');

const app = new Vue({
    el:'#app',
    data:{
        albums:[]
    },
    mounted(){
        axios.get("strutturaDati.php").then((response) => {
            console.log(response);
           // console.log(response.data);
           /* if(response.status === 200)
            {
                this.albums = response.data;
                console.log(this.albums[0]);
            }*/
        }).catch((error) => {
            console.log(error);
        })
    }
})