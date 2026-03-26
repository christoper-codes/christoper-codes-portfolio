<script setup>
const year = new Date().getFullYear();
</script>

<template>
  <footer class="pt-12 border-t border-[rgb(var(--border))]">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <p class="text-sm text-[rgb(var(--muted))]">
        Built with Laravel, Inertia &amp; Vue.js
      </p>
      <p class="text-sm text-[rgb(var(--muted))]">
        © {{ year }} Christoper Patiño Santos ·
        <a
          href="https://github.com/christoper-codes/christoper-codes-portfolio"
          target="_blank"
          rel="noopener noreferrer"
          class="underline hover:text-[rgb(var(--foreground))] transition-colors"
        >open source</a>
      </p>
    </div>
  </footer>
</template>
