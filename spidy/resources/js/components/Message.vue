<!--
<template>
    <transition name="demo-transition">
        <div class="alert alert-info">{{ messaggio }}</div>
    </transition>
</template>


<script>
    export default {
        props: ['messaggio'],
        mounted () {
            // Do something useful with the data in the templatE
        }
    }
</script>

<style>
    .demo-transition-enter-active, .demo-transition-leave-active {
        transition: opacity .5s
    }
    .demo-transition-enter, .demo-transition-leave-to {
        opacity: 0
    }
</style>
-->
<template>
    <div>
        <transition name="fade" appear>
            <div v-if="visible" class="alert alert-info">{{ messaggio }}</div>

        </transition>
    </div>
</template>

<script>
    export default {
        props: ['messaggio'],
        data: function(){
            return{
                visible: true,
            };
        },
        created() {
            //setTimeout(() => this.visible = false, 1000);

        },
        mounted () {
            // Do something useful with the data in the template
            // console.log(this.visible);
            //setTimeout(function() {
            //   this.visible = false;
            //}, 2000); // hide the message after 3 seconds
            //console.log(this.visible);
            //console.log("3 secondi");
        }

    }
</script>

<style>

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 1s;
    }
    .fade-enter {
        opacity: 1;
    }

    .fade-enter-to {
        opacity: 0;
    }

</style>
