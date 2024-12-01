<script setup>
import Navbar from '@/Components/Navbar.vue'
</script>

<template>
    <div class="container mx-auto">
        <Navbar />
        <main>
            <slot />
        </main>
    </div>
</template>
