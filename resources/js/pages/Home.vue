<template>
    <v-container class="flex justify-center">
        <img src="/asset/banner.svg" alt="">
    </v-container>
    <v-container>
        <v-row justify="center">
           <v-col>
                <div class="my-2" v-for="item in homesection" :key="item.id">
                    <v-img 
                        :lazy-src="'/storage/' + item.cover"
                        :src="'/storage/' + item.cover"
                        alt="error"
                    />
                    <p class="my-1 font-extrabold text-[#020B75]">{{ item.category }}</p>
                    <p class="font-bold">{{ item.title }}</p>
                </div>
            </v-col>
            <v-col>
                <v-img 
                    :lazy-src="'/storage/' + centersection.cover"
                    :src="'/storage/' + centersection.cover"
                    alt="error"
                />
                <p class="my-1 font-extrabold text-[#020B75]">{{ centersection.category }}</p>
                <p class="font-bold text-2xl">{{ centersection.title }}</p>
            </v-col>
            <v-col>
                <p class="font-black text-[#020B75] text-3xl">ИХ УНШСАН</p>
                <div v-for="item in data" :key="item.id">
                    <p class="grid grid-cols-2 my-2">
                        <img class="col-span-1" src="/asset/Vector7.png" alt="">
                        <p class="col-span-2">
                            <span class="font-black text-2xl text-[#020B75]">{{ item.id }}</span>
                            <span class="font-bold text-[#020B75] px-2">{{ item.category }}</span>
                            <p class="font-bold">{{ item.title }}</p>
                        </p>
                    </p>
                </div>
            </v-col>
        </v-row>

    </v-container>
</template>

<script>
import axios from 'axios';
export default {
    name: "HomePage",
    data() {
        return {
            homesection: [],
            centersection: [],
            data: []
        };
    },
    methods:{
        async fetching(){
            try {
                const response = await axios.get('/api/posts');
                if(response.status == 200){
                    const data = response.data.data;
                    this.homesection = data.slice(0, 2);
                    this.centersection = data.slice(-1)[0];
                    this.data=data;
                }
            } catch (error) {
                console.log(error);
            }
        }
    },
    created() {
        this.fetching();
    }
};
</script>
