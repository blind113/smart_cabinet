<script setup >
    import CabinetComponent from '../components/CabinetComponent.vue';
    const pots=[{user_id:"10", description:"Novo"}];
</script>

<template>
    <CabinetComponent :pots="pots"></CabinetComponent> 
</template>

