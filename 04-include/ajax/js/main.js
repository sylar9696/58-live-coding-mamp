var app = new Vue({
  el: '#app',
  data: {
    arrayNumeri: [],
  },
  created(){
    axios.get( 'http://localhost/%2358/58-live-coding-mamp/04-include/ajax/api/integers.php/?min=1&max=10&items=8' )
        .then((res) => {
          console.log(res.data.response);
          this.arrayNumeri = res.data.response;
        })
  }
})
