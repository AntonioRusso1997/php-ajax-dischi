Vue.config.devtools = true;

const app = new Vue(
    {
        el: '#root',
        data: {
            songs: ''
        },
        created() {
            axios
                // .get('http://localhost/esercizi/php-ajax-dischi/api/server.php')
                .get('api/server.php')
                .then((response) =>{
                    this.songs = response.data;
                })
        }
    }
)