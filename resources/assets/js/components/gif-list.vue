<template>
    <div class="columns">
        <gif v-for="gif in gifs" :name="gif"></gif>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                gifs: []
            }
        },
        methods: {
            fetchData() {
                // this.gifs = ['Dope', 'Fury', 'City of God', 'Snatch', 'Punch-Drunk Love', 'Garden State', 'It\'s Such a Beautyful Day', 'L4yer Cake', 'Babadook', 'Wish I was Here'];
                this.gifs = [];
            }
        },
        mounted() {
            console.log("gif-list mounted");
            this.fetchData();
        }
    }
</script>
