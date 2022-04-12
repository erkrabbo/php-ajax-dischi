const App = new Vue({
    el: '#app',
    data: {
        arrDischi: [],
        arrGeneri: [],
        filtro: '',
    },
    methods: {
        filtraDischi($event){
            this.filtro=$event.target.value;

        }
    },
    // computed: {
    //     dischiFiltrati(){
    //         this.arrDischi.filter(disc => )
    //     }
    // },
    created(){
        axios.get('../api.php')
        .then(result => this.arrDischi = result.data);

        axios.get('../lista-generi.php')
        .then(result => this.arrGeneri = result.data);
    }
})