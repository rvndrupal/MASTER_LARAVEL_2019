new Vue({
    el: "#app",

    data (){
        return{
            saludo: "Hola desde esto es el primer hola mundo"
        }
        
    },
    methods: {
        mostrarMensaje: function(){
            return 'esto es un metodo'
        },

        mensajeDos: function(){
            return "Manda a llamar a saludo-> " + this.saludo;
        }
    },
})
