<template>
    <div class="RandomFact">
        {{ fact.fact }}
    </div>
</template>

<script>
    export default {
        name: 'Randomfact',
        data() {
            return {
                fact: ''
            }
        },
        mounted() {
            this.fetchRandomFact()
        },
        methods: {
            fetchRandomFact() {
                axios.get( '/api/cat_fact' )
                    .then( response => this.fact = response.data )
                    .catch( error => console.log( 'fact error ' + error ) )
            }
        }
    };
</script>
