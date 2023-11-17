<template>
    <div>
       <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
    props: ['userId', 'follows'],
    mounted() {
        console.log('Component mounted.')
    },

    data: function () {
        return{
            status: this.follows ? 'Unfollow' : 'Follow',
        }
    },
    methods: {
        async followUser(){
            try {
                let response = await axios.patch('/follow/' + this.userId);
                this.status = this.status === 'Follow' ? 'Unfollow' : 'Follow';
                console.log(response.data);
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>