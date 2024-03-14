<template>
    <ul class="flex mt-4">
        <li class="w-3/12">
            <reply-action />
        </li>
        <li class="w-3/12">
            <retweet-action />
        </li>
        <li class="w-3/12">
            <like-action />
        </li>
    </ul>
</template>
<script>
import RetweetAction from "@/components/actions/RetweetAction.vue";
import ReplyAction from "@/components/actions/ReplyAction.vue";
import LikeAction from "@/components/actions/LikeAction.vue";

export default {
    components: {LikeAction, ReplyAction, RetweetAction}

}
</script>
