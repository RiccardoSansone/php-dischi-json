const { createApp } = Vue
createApp({

    data() {
        return {
            discs: []
        }
    },
    mounted(){
        axios.get("server.php")
            .then(response => {
                this.discs = response.data;
                console.log(response)
            })
            .catch(error => {
                console.error("Errore durante il recupero dei dati", error);
            });
    },
    methods: {
    }

}).mount('#app')