<template>
    <div>
        <div class="text-lime-200 font-medium text-xs d-flex align-items-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m17 2 4 4-4 4"/>
                <path d="M3 11v-1a4 4 0 0 1 4-4h14"/>
                <path d="m7 22-4-4 4-4"/>
                <path d="M21 13v1a4 4 0 0 1-4 4H3"/>
            </svg>
            <span>
        {{ tweet.user.name }}
        retweeted
    </span>
            <component
                :is="`app-tweet-variant-${tweet.original_tweet.type}`"
                :tweet="tweet.original_tweet"
            />
        </div>
    </div>
</template>

<script>
export default {
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
