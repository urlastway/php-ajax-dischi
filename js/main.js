const app = new Vue({
    el: '#root',
    data: {
        dischi: [],
    },
    created(){
        axios.get('http://localhost:8888/php-ajax-dischi/backend/api.php')
        .then((response) => {
            this.dischi = response.data;
        })
    }
});