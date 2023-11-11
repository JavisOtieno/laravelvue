<template>
    <div>
    <div v-for="clothe in result" v-bind:key="clothe.id">
        <h1>{{ clothe.name }}</h1>

    </div>
    </div>

    </template/>

    <script>
        import Vue from 'vue';
        import axios from 'axios';

        // Vue.use(axios)

        export default{
            name: 'Clothe',
            data(){
                return {
                    result:{},
                    clothe:{
                        id: '',
                        name:'',
                        price: '',
                        description: ''
                    }
                }
            },
            created(){
                this.ClotheLoad();
            },
            mounted(){
                console.log("mounted() called ....");
            }, 
            methods: {
                ClotheLoad(){
                  
                    
                }
            }
        }
    </script>
