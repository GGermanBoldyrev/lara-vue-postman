<script setup>

</script>

<template>
    <div class="min-h-screen flex flex-col bg-gray-100">
        <!-- Хедер -->
        <header class="bg-white shadow p-4">
            <h1 class="text-xl font-bold text-gray-700">🚀 My Inertia + Vue App</h1>
        </header>

        <!-- Контент -->
        <main class="flex-1 p-6">
            <slot />
        </main>

        <!-- Футер -->
        <footer class="bg-white border-t p-4 text-center text-sm text-gray-500">
            &copy; {{ new Date().getFullYear() }} MyApp. Все права защищены.
        </footer>
    </div>
</template>

<style scoped>

</style>
