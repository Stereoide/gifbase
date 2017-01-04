<template>
    <div class="category">
        {{ name }} ({{ id }})
        <span v-if="canEdit">(edit)</span>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                canEdit: this.edit
            }
        },
        props: {
            id: { required: true },
            name: { required: true },
            edit: { default: false }
        },
        methods: {

        },
        mounted() {

        }
    }
</script>
