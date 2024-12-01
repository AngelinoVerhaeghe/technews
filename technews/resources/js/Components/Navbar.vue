<script setup>
import { Link } from '@inertiajs/vue3'
import { Bars3BottomRightIcon, XMarkIcon } from '@heroicons/vue/24/solid'
import { ref } from 'vue'

const open = ref(false)
const toggle = () => (open.value = !open.value)
</script>

<template>
    <header class="container absolute text-white">
        <nav class="flex h-24 items-center justify-between px-4 lg:px-0">
            <a href="/" class="text-xl font-bold lg:text-3xl">
                <span class="text-2xl text-amber-400 lg:text-4xl">T</span
                >echNews
            </a>
            <ul class="hidden space-x-6 font-semibold lg:flex">
                <li>
                    <Link href="/news" class="group transition duration-300"
                        >News
                        <span
                            class="block h-0.5 max-w-0 bg-amber-400 transition-all duration-500 group-hover:max-w-full"
                        ></span
                    ></Link>
                </li>
                <li>
                    <Link href="/about" class="group transition duration-300"
                        >About
                        <span
                            class="block h-0.5 max-w-0 bg-amber-400 transition-all duration-500 group-hover:max-w-full"
                        ></span
                    ></Link>
                </li>
                <li>
                    <Link href="/contact" class="group transition duration-300"
                        >Contact
                        <span
                            class="block h-0.5 max-w-0 bg-amber-400 transition-all duration-500 group-hover:max-w-full"
                        ></span
                    ></Link>
                </li>
            </ul>
            <Bars3BottomRightIcon
                v-if="!open"
                @click="toggle"
                class="size-8 cursor-pointer text-white lg:hidden"
            />
        </nav>
    </header>

    <!-- Mobile Navbar -->
    <nav
        v-if="open"
        class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-black bg-opacity-90 text-white transition-opacity duration-500"
    >
        <div class="absolute right-4 top-10">
            <XMarkIcon
                @click="toggle"
                class="size-8 cursor-pointer items-end text-white lg:hidden"
            />
        </div>
        <ul class="space-y-6 text-center text-lg">
            <li>
                <Link href="/news" @click="toggle">News</Link>
            </li>
            <li>
                <Link href="/about" @click="toggle">About</Link>
            </li>
            <li>
                <Link href="/contact" @click="toggle">Contact</Link>
            </li>
        </ul>
    </nav>
</template>
