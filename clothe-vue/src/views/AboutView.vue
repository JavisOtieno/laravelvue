<template>
  <div class="about">
    <h1>about page</h1>
    <h3>Add</h3>
    <form @submit.prevent="submit" id="saveCloths">
                            <div class="">
                                <div>
                                    <label for="name" class="">Name</label>
                                    <input v-model="name" type="text" id="name" class="">
                                   
                                </div>
                                <div>
                                    <label for="price" class="">Price</label>
                                    <input v-model="price" type="text" id="price" class="">
                                    
                                </div>
                                <div>
                                    <label for="description" class="">Description</label>
                                    <textarea v-model="description" id="description" class=""></textarea>
                                    
                                </div>
                                <button form="saveCloths" type="submit" class="">Save</button>
                            </div>
                        </form>
    <h3>List</h3>
    <table>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
      </tr>
      <tr v-for="cloth in cloths" v-bind:key="cloth.id">
        <td>{{ cloth.name }}</td>
          <td>{{ cloth.price }}</td>
          <td>{{ cloth.description }}</td>
      </tr>
    </table>
    <div >
        <h1></h1>
    </div>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios';
import {onMounted, ref} from "vue";

let cloths=ref([]);
let name=ref('')
let price=ref('')
let description=ref('')
let formData: {
      name: '',
      price:'',
      description: '',
    }

const getCloths=(async (params:type) => {
  const res= await axios.get(`http://127.0.0.1:8000/api/cloths`);
    cloths.value= await res.data;
})

const submit = () => {
  axios.post(`http://127.0.0.1:8000/api/cloths`, {
    name:name.value,
    price:price.value,
    description: description.value
  })
        .then(response => {
          console.log('Data posted successfully:', response.data);
        })
        .catch(error => {
          console.error('Error posting data:', error);
        });
}
 
onMounted(() => {
    getCloths()
})
</script>

<style>
@media (min-width: 1024px) {
  .about {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>
