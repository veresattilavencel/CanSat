<template>
  <div class="grid grid-cols-2 gap-4 p-4 container mx-auto">
    <ShowObject :object="data[data.length-1]"/>
  </div>
</template>

<script>
import {http} from '@utils/http.mjs'
import ShowObject from '@components/ShowObject.vue';
export default {
  methods: {
    async getDatas(){
      this.data= (await http.get("missionlives")).data.data
    }
  },
  data(){
    return {
      data: {},
      interval: null
    }
  },
  async beforeMount(){
    this.getDatas()
  },
  async mounted(){
    this.interval = setInterval(this.getDatas, 500)
  },
  beforeUnmount(){
    clearInterval(this.interval);
  },
  components:{
    ShowObject
  }
}
</script>
