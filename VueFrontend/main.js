const App = new Vue({
    el: '#app',
    data: {
        arrDischi: [],
        arrGeneri: [],
        // filtro: '',
    },
    methods: {
        filtraDischi($event){
            // this.filtro=$event.target.value;
            axios.get('../filtro-genere.php?genere=' + $event.target.value)
                .then(result => this.arrDischi = result.data);
        }
    },
    // computed: {
    //     dischiFiltrati(){
    //        return this.arrDischi.filter(disc => disc.genre.includes(this.filtro));
    //     }
    // },
    created(){
        axios.get('../api.php')
        .then(result => this.arrDischi = result.data);

        axios.get('../lista-generi.php')
        .then(result => this.arrGeneri = result.data);
    }
})