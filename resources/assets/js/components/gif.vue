<template>
    <div class="column">
        <div class="notification is-primary has-text-centered">
            {{ name }}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['name'],
        mounted() {
            console.log('gif mounted.')
        }
    }
</script>
