<template>
    <div>
        <div v-if="keywordsAll.length > 0" class="mb-2">
            <span class="badge badge-secondary mr-1 font-weight-light" style="font-size:14px;" v-for="(keyword, index) in keywordsAll" v-bind:key="index">
                {{keyword}} 
                <a class="ml-1 text-white" href="" v-on:click.prevent="remove(index)">x</a>
            </span>
        </div>
        <div style="height:24px; overflow: hidden;" class="form-control" contenteditable="true" v-on:keydown.enter="enter" ref="input"></div>
        <input type="hidden" name="keywords" v-model="keywords"> 
    </div>
</template>

<script>
    export default {

        props: ['keywords'],

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