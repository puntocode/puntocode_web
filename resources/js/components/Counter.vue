<template>
    <!-- <ICountUp :delay="delay" :endVal="endVal" :options="options" @ready="onReady"/> -->
    <ICountUp :delay="delay" :endVal="endVal"/>
</template>

<script>
import ICountUp from 'vue-countup-v2';
export default {
    name: 'Counter',
    components: {
      ICountUp
    },
    props: {
        valor: Number
    },
    data() {
      return {
        delay: 1000,
        endVal: this.valor,
        /*options: {
          useEasing: true,
          useGrouping: true,
          separator: ',',
          decimal: '.',
          prefix: '',
          suffix: ''
        }*/
      };
    },
    methods: {
        onReady: function(instance, CountUp) {
            const that = this;
        //instance.update(that.endVal + 100);
        },
        handleScroll: function(e) {
            console.log("Scroll");
            if ((e.target.scrollHeight-300) <= e.target.scrollTop) {
                alert("oi sou Eduardo Martins");
            }
        }
    }
}
</script>
