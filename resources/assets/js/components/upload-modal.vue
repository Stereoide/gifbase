<template>
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                Upload content here
            </div>
        </div>

        <button class="modal-close" @click="$emit('closeuploadmodal')"></button>
    </div>
</template>

<script>
    export default {
        props: ['name'],
        mounted() {

        }
    }
</script>
