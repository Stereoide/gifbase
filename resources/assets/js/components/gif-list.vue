<template>
    <div class="gif-list">
        <gif v-for="gif in gifs">{{ gif }}</gif>
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
            fetchData : function() {
                this.gifs = ['Dope', 'Fury', 'City of God', 'Snatch', 'Punch-Drunk Love', 'Garden State', 'It\'s Such a Beautyful Day', 'L4yer Cake', 'Babadook', 'Wish I was Here'];
            }
        },
        mounted() {
            this.fetchData();
        }
    }
</script>
