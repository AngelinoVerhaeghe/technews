<script setup>
import { Link } from "@inertiajs/vue3";

const logoUrl = "/images/logo.png";
</script>

<template>
    <header>
        <nav>
            <div>
                <img :src="logoUrl" alt="Logo" />
            </div>

            <ul>
                <Link href="/">Home</Link>
                <Link href="/about">About</Link>
                <Link href="/contact">Contact</Link>
            </ul>
        </nav>
    </header>
</template>
