<template>
    <h1>Hello vue and Laravel</h1>
    <router-link :to="{ name: 'AddNew' }">Add New</router-link>
    <router-view />
</template>
<script>
export default {}
</script>
<style></style>
