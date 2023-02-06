<template>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/hello">Show Page</Link>&nbsp;
  <Link href="/listing">Listing Page</Link>&nbsp;
  <Link href="/listing/create">New Element</Link>&nbsp;
  <!-- <div>The page with time {{ timer }}</div> -->
  <div v-if="$page.props.flash.success" class="alert">
    {{ $page.props.flash.success }}
  </div>
  <slot />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
// import { ref } from 'vue'

// const timer = ref(0)   

// setInterval(() => {
//   timer.value++
// }, 1000)
</script>