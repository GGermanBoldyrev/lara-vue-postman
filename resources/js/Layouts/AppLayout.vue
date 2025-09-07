<script setup>

import AppHeader from "@/Components/organisms/AppHeader.vue";
</script>

<template>
    <v-app>
        <AppHeader />

        <v-container>
            <v-main>
                <slot />
            </v-main>
        </v-container>
    </v-app>
</template>

<style scoped>

</style>
