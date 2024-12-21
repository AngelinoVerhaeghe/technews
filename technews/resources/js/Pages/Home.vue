<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Home | Technews"></Head>
    <AppLayout>
        <div class="container mx-auto bg-amber-500">
            <h1 class="text-center text-4xl font-bold">Welcome to TechNews</h1>
            <p class="mt-5 text-center">
                The latest news and articles about technology
            </p>
        </div>
    </AppLayout>
</template>
