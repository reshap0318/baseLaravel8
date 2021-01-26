<template>
    <layout title="Home">
        
    </layout>
</template>

<script>
    import Layout from '../layouts/base'
    export default {
        components: {
            Layout,
        },
        created() {
        },
        mounted() {
            console.log(this.$page.props.permissions);
        },
        methods: {
            
        }
    }
</script>