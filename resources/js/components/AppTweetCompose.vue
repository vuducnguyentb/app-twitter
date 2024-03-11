<template>
    <form class="flex" @submit.prevent="submit">
        <div class="mr-3">
            <img :src="$user.avatar" class="w-12 rounded-12">
        </div>

        <div class="flex-grow">
            {{form}}
            <textarea class="bg-gray-600 w-full outline-none text-gray-300
text-lg resize-none mb-2"
                      autofocus
                      placeholder="What's happening"
                      v-model="form.body"
            ></textarea>

            <div class="flex justify-between">
                actions //retweets replies
            </div>

            <button type="submit" class="bg-blue-500 rounded-full text-gray-300 text-center
px-4 font-bold leading-none
">
                Tweet
            </button>
        </div>

    </form>
</template>
<script>
import axios from "axios";

export default {
    data(){
        return {
            form:{
                body:''
            }
        }
    },
    methods:{
        async submit()
        {
            await axios.post('/api/tweets',this.form)
        }
    }
}
</script>
