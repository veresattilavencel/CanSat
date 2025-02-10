<template>
  <div class="grid grid-cols-2 gap-4 p-4 container mx-auto">
    <ShowObject :object="gps"/>
    <ShowObject :object="barometicsensor"/>
    <ShowObject :object="gyroscope"/>
    <ShowObject :object="lightintensity"/>
    <ShowObject :object="sensirionsps30"/>
  </div>
</template>

<script>
import {http} from '@utils/http.mjs'
import ShowObject from '@components/ShowObject.vue';
export default {
  methods: {
    async getDatas(){
      this.gps= (await http.get("gps")).data.data
      this.barometicsensor= (await http.get("barometicsensor")).data.data
      this.gyroscope= (await http.get("gyroscope")).data.data
      this.lightintensity= (await http.get("lightintensity")).data.data
      this.sensirionsps30= (await http.get("sensirionsps30")).data.data
    }
  },
  data(){
    return {
      gps: {},
      barometicsensor: {},
      gyroscope: {},
      lightintensity: {},
      sensirionsps30: {},
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
