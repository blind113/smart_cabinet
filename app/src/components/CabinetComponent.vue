<script setup >
    import PotComponent from './PotComponent.vue';
    defineProps(["pots"]);
</script>

<template>
    <div v-for="pot in pots">  
        <PotComponent :pot="pot"> </PotComponent>
    </div>    

</template>