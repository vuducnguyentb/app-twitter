<template>
    <div class="flex w-full">
        <div class="mr-3">
            <img :src="tweet.user.avatar" alt="" class="w-12 rounded-12">
        </div>
    </div>
    <div class="flex-grow">
        <app-tweet-username
            :user="tweet.user"
        />
        <p class="text-gray-300 whitespace-pre-wrap">
            {{ tweet.body }}
        </p>

        <app-tweet
        class="border border-gray-700 rounded-lg mt-4"
        :tweet="tweet.original_tweet"
        />

    </div>
</template>

<script>
import AppTweet from "@/components/tweets/AppTweet.vue";

export default {
    components: {AppTweet},
    props: {
        tweet: {
            required: true,
            type: Object
        }
    },
    mounted() {
    }
}
</script>
