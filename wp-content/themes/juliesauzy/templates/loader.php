<div id="loader" class="fixed flex flex-col items-center justify-center h-screen w-screen bg-white z-50 transition-opacity duration-500 ease-in-out opacity-100">
  <img class="w-96 h-96" fetchpriority="high" width="640" height="640" src="<?php echo get_stylesheet_directory_uri() . '/images/loader.gif'; ?>" alt="">
  <em>I'm loading, please wait...</em>
</div>
<script>
  (function() {

    // Select body & block scroll while loader is loading
    const bodyEl = document.body;
    bodyEl.classList.toggle('overflow-hidden');

    // When the page is totally loaded, remove the loader
    document.addEventListener('DOMContentLoaded', function() {

      // setTimeout(() => {

        // Unlock the body scroll
        bodyEl.classList.toggle('overflow-hidden');

        // Hide visually the loader
        const loaderEl = document.getElementById('loader');
        loaderEl.classList.toggle('opacity-100');
        loaderEl.classList.toggle('opacity-0');

        // Hide completely the loader
        setTimeout(() => {
          loaderEl.classList.toggle('flex');
          loaderEl.classList.toggle('hidden');
        }, 750);

      // }, 250);

    });
  })();
</script>
