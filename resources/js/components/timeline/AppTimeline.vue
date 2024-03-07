<template>
    <app-tweet
    v-for="tweet in tweets"
    :key="tweet.id"
    :tweet="tweet"
    />
</template>
<script>
    export default {
        data (){
            return {
                tweets:[]
            }
        },
        methods:{
            async getTweets(){
                let response = await axios.get('/api/timeline')
                this.tweets = response.data.data
            }
        },
        mounted() {
            this.getTweets()
        }
    }
</script>
