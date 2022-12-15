<script setup>
    defineProps(["pot"]);
</script>

<template>
    <v-card>
        <v-card-title primary-title>
            {{pot.user_id}}
        </v-card-title>

    </v-card>
</template>