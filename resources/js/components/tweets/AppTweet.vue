<template>
    <div class="w-full inline-block p-4 border-b border-gray-800 cursor-pointer hover:bg-gray-800">
        <component
        :is="`app-tweet-variant-${tweet.type}`"
        :tweet = "tweet"
        />


        <!--        <div class="flex w-full">-->
        <!--            <div class="mr-3">-->
        <!--                <img :src="tweet.user.avatar" alt="" class="w-12 rounded-12">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <app-tweet-username-->
        <!--            :user="tweet.user"-->
        <!--        />-->
        <!--        <p class="text-gray-300 whitespace-pre-wrap">-->
        <!--            {{ tweet.body }}-->
        <!--        </p>-->
    </div>
</template>
<script>
export default {
    props: {
        tweet: {
            required: true,
            type: Object
        }
    }
}
</script>
