<template>
        <div class="container row">
            <form @submit.prevent="submitdata">
                <div class="col-sm-7">
                    <div>
                        <label for="">Enter Name</label>
                        <input v-model="name" type="text" name="" class="form-control" id="">
                    </div>
                    <div>
                        <label for="">Enter Email</label>
                        <input v-model="email" type="text" name="" class="form-control" id="">
                    </div>
                    <div>
                        <label for="">Enter Number</label>
                        <input v-model="number" type="text" name="" class="form-control" id="">
                    </div>
                    <div>
                        <label for="">Message</label>
                        <textarea name="" v-model="message" class="form-control" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>

                <button class="mt-2 btn btn-primary">Submit</button>
            </form>
            <div class="mt-4">
                <h3>My Inquiries</h3>
                <div v-for="contact in contacts" :key="contact.id" >
                    <div class="contact">
                    <h4>{{ contact.name }} </h4>
                    </div>
                </div>
            </div>
        </div>
</template>

<style>
.contact{
    background-color: grey;
    padding: 10px;
    margin: 10px;
}

</style>

<script>
import axios from 'axios';
export default {
    data(){
        return {
            name:null,
            email:null,
            number:null,
            message:null,
            contacts:[],
        }
    },
    mounted(){
        this.getContacts();
    },
    methods: {
        async submitdata(e){
            console.log(e);
            const submitData = await axios.post('contact/store',{
                name:this.name,
                email:this.email,
                number:this.number,
                message:this.message,   
            });

            if(submitData.status == 200){
                this.name=null;
                this.email=null;
                this.number=null;
                this.message=null;
                alert('submiteed')
            }
            console.log(submitData);
        },
        async getContacts(){
            try {
                const response = await axios.get('/fetch/contact');
                this.contacts = response.data;
            } catch (error) {
                console.error('Error fetching posts:', error);
    
            }
        }
    },

}
</script>

