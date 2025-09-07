<script setup>

</script>

<template>
    <v-app-bar color="primary" app>
        <v-container class="d-flex align-center">
            <v-app-bar-title class="app-title ma-0">
                <span class="text-h5 font-weight-bold">Postman Alternative</span>
                <div class="tagline text-caption opacity-80">API Testing Made Simple</div>
            </v-app-bar-title>

            <v-btn
                variant="text"
                color="white"
                icon="mdi-github"
                class="hidden-xs-only mr-4"
                href="https://github.com/GGermanBoldyrev/lara-vue-postman"
                target="_blank"
            ></v-btn>


            <v-btn
                variant="outlined"
                color="white"
                prepend-icon="mdi-login"
                @click="navigateToLogin"
                class="login-btn"
            >
                <span>Login</span>
            </v-btn>
        </v-container>
    </v-app-bar>
</template>

<style scoped>

</style>
