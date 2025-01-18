<template>
    <v-container>
            <v-row>
                <v-col v-for="item in data" key="item.id">
                    <v-sheet>
                        <v-img 
                            :lazy-src="'/storage/' + item.cover"
                            :src="'/storage/' + item.cover"
                            alt="error"
                            max-height="150"
                            max-width="250"
                        />
                        <p>{{ item.title }}</p>
                    </v-sheet>
                </v-col>
            </v-row>
    </v-container>
</template>
<script>
export default {
    name: 'Cards',
    data() {
        return {
           data:[]
        };
    },
    methods: {
        async fetching(){
            try {
                const response = await axios.get('/api/events');
                if(response.status == 200){
                    const data = response.data.data;
                    this.data=data;
                }
            } catch (error) {
                console.log(error)
            }
        }
    },
    created(){
        this.fetching();
    }
}
</script>