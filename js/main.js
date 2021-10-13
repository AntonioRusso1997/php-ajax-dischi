Vue.config.devtools = true;

const app = new Vue(
    {
        el: '#root',
        data: {
            songs: [],
            filteredList: [],
            selected: 'All',
            genre: ['All','Jazz','Metal','Pop','Rock']
        },
        created() {
            axios
                // .get('http://localhost/esercizi/php-ajax-dischi/api/server.php')
                .get('api/server.php') //Per rendere "la vita facile" ad Alessio e Filippo.
                .then((response) =>{
                    return (this.songs = response.data, this.filteredList = response.data);
                })
        },
        computed: {
            filterGenre() {
                if (this.selected === '' || this.selected === 'All') {
                    return this.filteredList = this.songs;
                }
                axios.get('api/server.php/search/' + this.selected)
                    .then((response) => {
                        const tmpResponse = response.data
                        let tmp = []
                        for (let i = 0; i < tmpResponse.length; i++) {
                            console.log(tmpResponse[i].genre)
                            if (tmpResponse[i].genre === this.selected) {
                                tmp.push(tmpResponse[i])
                            }
                        }
                        return this.filteredList = tmp;
                    });
            }
        }
    }
)