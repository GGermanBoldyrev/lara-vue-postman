<script setup>

import AppHeader from "@/Components/organisms/AppHeader.vue";
import AppSidebar from "@/Components/organisms/AppSidebar.vue";

</script>

<template>
    <v-app>
        <!-- Header -->
        <AppHeader/>

        <v-main>
            <v-container>
                <div class="d-flex" style="gap: 16px;">
                    <!-- Левый сайдбар -->
                    <AppSidebar/>

                    <!-- Основной контент -->
                    <section class="flex-grow-1 main-content">
                        <slot/>
                    </section>
                </div>
            </v-container>
        </v-main>
    </v-app>
</template>

<style scoped>

</style>
