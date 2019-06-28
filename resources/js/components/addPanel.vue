<template>
        <div>
        <div class="text-lg-right">
            <a v-bind:href="url" class="btn"><v-btn color="info">+ add new {{name}}</v-btn></a>
        </div>
        <hr>
        </div>
</template>

<script>
    export default {
        props: ['name', 'url'],
        
        mounted() {
            console.log(this.url)
        }
    }
</script>
