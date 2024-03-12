<template>
    <span class="text-gray-300 font-bold">{{user.name}}</span>
    <span class="text-teal-400">@{{user.username}}</span>
</template>
<script>
export default {
    props:{
        user:{
            required:true,
            type:Object
        }
    }
}
</script>
