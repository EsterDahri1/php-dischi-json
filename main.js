const { createApp } = Vue
createApp({
    data() {
        return {
            discs: null,
            clickedDisc: null,
        }
    },
    methods: {
        discInfo(index) {
            this.clickedDisc = this.discs[index];

            // console.log(this.discs[index]);
        }
    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                this.discs = response.data
            })
    }
}).mount('#app')