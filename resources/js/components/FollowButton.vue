<template>
    <div>
         <button type="button" class="btn btn-danger" @click="followUser">Follow</button>
    </div>
</template>

<script>
export default {
    props: ['userId'],

    mounted() {
        console.log('Component mounted.')
    },

    methods:{
        followUser(){
            axios.post('/follow/' + this.userId)
            .then(response => {
                alert(response.data);
            });
        }
    }
}
</script>