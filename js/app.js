Vue.createApp({
    data() {
        return {
            message: 1,
            info : {
                numClient : "",
                province : ""
            },
            factures : undefined,
            no_data : false,
            msg : ""
        }
    },
    methods: {
        get_data() {
            if('' === this.info.numClient || '' === this.info.province.toUpperCase()){
                alert('veullez remplir tout les champs')
            }else{
                this.no_data = false
                console.log(this.info.numClient, this.info.province)
                fetch('php/get_data.php').then(response => response.json()).then((data) => {
                    this.factures = []
                    data.forEach(element => {
                        if(element.numClient === this.info.numClient && element.province === this.info.province.toUpperCase()){
                            this.factures.push(element)
                        }
                    });

                    if(this.factures.length === 0){
                        this.msg = "Pas de données pour l'utilisateur ''"+this.info.numClient+"'' associé a la province ''"+this.info.province+"''"
                        this.no_data = true
                    }
                })
            }
        }
    }
}).mount('#app')


