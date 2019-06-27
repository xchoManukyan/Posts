<template>
  <div>
    <a v-bind:href="props.url"><v-btn color="info">+ add new</v-btn></a>
    <hr>
  </div>
</template>

<script>
    export default {

        props: ['url'],

        data: function(){
            return {
                keywordsAll: this.keywords
            }
        },

        methods: {
            enter: function(){
                let value = this.$refs.input.innerText;
                this.$refs.input.innerHTML = '';
                this.keywordsAll.push(value.trim().replace(/\s+/g," "));
                
            },
            remove: function(index){
                this.keywordsAll.splice(index, 1);
            }
        },
    }
</script>