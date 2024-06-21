<template>
    <h3>Posts</h3>
    <div v-for="post in posts" :key="post.id">
        <h2> {{ post.name }} </h2>
        <p> {{ post.description }} </p>
    </div>
</template>

<script>
import axios from 'axios';

export default {

    data(){
        return {
            posts:[],
        }
    },
    mounted() {
        this.getPosts();
    },

    methods: {
        async getPosts(){
            try {
                const response = await axios.get('/fetch/posts');
                this.posts = response.data;
            } catch (error) {
                console.error('Error fetching posts:', error);
    
            }
        }
    },

}

</script>