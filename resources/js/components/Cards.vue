<template>
    <v-container>
            <v-row>
                <v-column v-for="item in data" key="item.id">
                     <v-img 
                        :lazy-src="'/storage/' + item.cover"
                        :src="'/storage/' + item.cover"
                        alt="error"
                    />
                </v-column>
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