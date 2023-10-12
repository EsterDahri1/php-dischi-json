const { createApp } = Vue
createApp({
    data() {
        return {
            discs: null,
        }
    },
    mounted() {
        axios
            .get('./server.php')
            .then(response => {
                console.log(response)
                this.discs = response.data
            })
    }
}).mount('app')