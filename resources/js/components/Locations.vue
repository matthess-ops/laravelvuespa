<template>
    <div>
          <button @click="increment">increment count</button>
    {{this.$store.state.count}}
        locaiton data hieronder
        <div v-for="location in locations" :key="location.id">
                <p>{{ location.city }}</p>
        </div>
    </div>

</template>

<script>
export default {
 data() {
        return {
            locations: [],
        }
    },
    created() {
        this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get('/api/locations')
                .then(response => {
                    this.locations = response.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
    },
  methods: {
  increment() {
    this.$store.commit('increment')
    console.log(this.$store.state.count)
  }
},
    beforeRouteEnter(to, from, next) {
        if (!window.Laravel.isLoggedin) {
            window.location.href = "/";
        }
        next();
    }
}
</script>
