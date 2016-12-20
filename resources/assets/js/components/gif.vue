<template>
    <div class="gif"><slot></slot></div>
</template>

<script>
    export default {
        mounted() {
            console.log('gif mounted.')
        }
    }
</script>
