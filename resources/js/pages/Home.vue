<template>
    <v-container class="flex justify-center">
        <img src="/asset/banner.svg" alt="">
    </v-container>
    <v-container>
        <div>{{ title }}</div>

    </v-container>
</template>

<script>
import axios from 'axios';
export default {
    name: "HomePage",
};
</script>
