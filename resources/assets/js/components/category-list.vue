<template>
    <div class="categories">
        <category v-for="category in categories" :id="category.id" :name="category.name" :edit="true"></category>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                categories: []
            };
        },
        methods: {
            fetchData() {
                var self = this;

                $.getJSON('categories')
                    .done(function(categories) {
                        self.categories = categories;
                    })
                    .fail(function() {
                        alert("Error while fetching categories");
                    });
            }
        },
        mounted() {
            this.fetchData();
        }
    }
</script>
