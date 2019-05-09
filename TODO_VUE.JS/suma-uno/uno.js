new Vue({
    el: "#app",

    data (){
        return{
            a:0,
            b:0,
        }        
    },
    computed: {
        total: function() {
            return this.a + this.b; 
        },
    },
})
