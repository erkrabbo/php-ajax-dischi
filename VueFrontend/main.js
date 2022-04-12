const App = new Vue({
    el: '#app',
    data: {
        arrDischi: []
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/api.php')
        .then(result => this.arrDischi = result.data)
    }
})