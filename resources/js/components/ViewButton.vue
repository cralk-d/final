<template>
    <div>
        <button class="btn btn-primary" @click="viewPost" v-text="buttonText"></button>
    </div>
</template>
<script>
    export default {
        props: ['UserId','views'],
        mounted()
        {
            console.log('Component mounted.')
        },
    }
</script>
