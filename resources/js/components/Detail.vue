<template>
    <v-container>
        <section class="mx-52">
            <v-row justify="center">
            <v-col class="text-3xl font-bold">
               {{ title }}
            </v-col>
        </v-row>
        <v-row justify="center">
            <v-col>
                <div v-html="content"></div>
            </v-col>
        </v-row>
        </section>
    </v-container>
</template>
<script>
import axios from 'axios';
export default {
    name: "DetailPage",
     data: () => ({
        title: "",
        content: [],
    }),
    methods: {
       async fetching() {
      try {
        const id = this.$route.params.id
        const response = await axios.get(`/api/posts/${id}`)
        if(response.status == 200){
            this.title = response.data.data.title
            this.content = response.data.data.content
        }

      } catch (error) {
        console.error('Error fetching post:', error)
      }
    }
  },
    created(){
        this.fetching();
    }
};
</script>
