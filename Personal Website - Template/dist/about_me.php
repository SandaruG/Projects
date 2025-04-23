<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo "Malcolm Lismore - About Me"; ?></title>
  <meta name="description" content="<?php echo "Hello there, I'm Malcolm Lismore – a passionate photographer capturing Scotland's natural beauty. Join me as I share stunning landscapes, wildlife, and special moments through my lens."; ?>">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
  <link rel="stylesheet" href="output.css" />
  <link rel="stylesheet" href="styles.css" />
  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- Start - Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@400;700&display=swap" rel="stylesheet">
  <!-- End - Fonts -->
</head>

<body
  class="dark:bg-black bg-white h-screen text-black dark:text-white px-5 md:px-20 opacity-0 animate-fade-in transition duration-500">
  <!-- Navbar -->
  <header class="flex w-full overflow-hidden pt-10 pb-1">
    <nav id="nav" x-data="{ open: false }" role="navigation" class="w-full">
      <div class="container mx-auto flex flex-wrap items-center md:flex-no-wrap">
        <div class="mr-4 md:mr-8">
          <a href="../index.php" class="text-2xl font-signika font-bold"><?php echo "Malcolm Lismore"; ?></a>
        </div>
        <div class="ml-auto md:hidden flex items-center justify-start">
          <button onclick="menuToggle()" @click="open = !open"
            class="tap-highlight-transparent text-black dark:text-white w-5 h-5 relative focus:outline-none"
            @click="open = !open">
            <span class="sr-only">Open main menu</span>
            <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <span aria-hidden="true"
                class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
              <span aria-hidden="true"
                class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out"
                :class="{'opacity-0': open } "></span>
              <span aria-hidden="true"
                class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out"
                :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
            </div>
          </button>
        </div>
        <div id="menu"
          class="w-full h-0 transition-all ease-out duration-500 md:transition-none md:w-auto md:flex-grow md:flex md:items-center">
          <ul id="ulMenu"
            class="flex flex-col duration-300 ease-out md:space-x-5 sm:transition-none mt-5 md:flex-row md:items-center md:ml-auto md:mt-0 md:pt-0 md:border-0">
            <li class="group transition duration-300">
              <a href="../index.php" class="font-signika text-2xl">PORTFOLIO
                <span
                  class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white">
                </span>
              </a>
            </li>
            <li class="group transition duration-300">
              <a href="about_me.php" class="font-signika text-2xl">ABOUT ME
                <span class="hidden md:block h-0.5 bg-black dark:bg-white"></span>
              </a>
            </li>
            <li class="group transition duration-300">
              <a href="services.php" class="font-signika text-2xl">SERVICES
                <span class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white"></span>
              </a>
            </li>
            <li class="group transition duration-300">
              <a href="contact.php" class="font-signika text-2xl">CONTACT ME
                <span
                  class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white">
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Content -->
  <div class="container mx-auto">
    <h1 class="text-4xl pt-10 pb-8"><b><?php echo "ABOUT ME"; ?></b></h1>
    <div class="grid grid-cols-2 gap-14 md:gap-20">
      <div class="col-span-2 md:col-span-1">
        <div
          class="bg-white dark:bg-neutral-900 p-5 pb-28 m-6 md:m-12 shadow-lg border border-gray-100 dark:border-neutral-800 hover:rotate-0 transition duration-500 -rotate-6 relative">
          <img src="./assets/Avatar.png" alt=""
            class="smooth-edges flex flex-col w-full aspect-square object-cover h-auto" />
          <div class="absolute bottom-0 left-0 right-0 text-center">
            <p class="text-gray-800 dark:text-slate-200 pb-7 h-full text-6xl font-nothingyoucoulddo"><?php echo "me"; ?></p>
          </div>
        </div>

      </div>
      <section class="font-normal text-center text-base md:text-start mx-3 col-span-2 md:col-span-1 my-auto">
        <div class="block md:hidden">
          <p class="text-3xl font-serif font-bold mb-1">Hello there,</p>
          <p class="text-3xl font-serif font-bold mb-6">I'm Malcolm <span class="animate-wave">👋</span></p>
        </div>
        <p class="hidden md:block text-3xl font-serif font-bold mb-6">Hello there, I'm Malcolm
          <span class="animate-wave">👋</span>
        </p>
        <p class="mb-4">
          <?php echo "I'm a photographer based on the North West coast of Scotland with over 6 years of experience. I specialize in capturing Scotland's natural beauty and special moments. My style blends natural beauty with vibrant colors and bold compositions."; ?>
        </p>
        <p class="mb-4">
          <?php echo "When I'm not behind the camera, you can find me exploring Scotland's rugged landscapes, discovering new hiking trails, or spending time with my family and friends. I believe every moment is an opportunity to experience something new and create lasting memories."; ?>
        </p>
        <p>
          <?php echo "Thank you for taking the time to learn a little bit about me and my work. If you're interested in collaborating or would like to see more of my portfolio, please don't hesitate to get in touch. Let's work together to bring your vision to life!"; ?>
        </p>
      </section>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="max-w-screen-xl py-16 mx-auto">
      <div class="grid grid-cols-1 gap-8 text-center mx-auto">
        <div>
          <p class="font-signika"><b><?php echo "Malcolm Lismore"; ?></b></p>
          <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
            <?php echo "123 Highland Avenue, Inverness, Scotland, IV3 8NW<br />(415) 397-8008"; ?>
          </p>
          <div class="flex mx-auto">
            <div class="mx-auto space-x-6 flex mt-8 text-gray-600 dark:text-gray-300">
              <a class="transition duration-300 hover:opacity-75" href="https://www.facebook.com" target="_blank"
                rel="noreferrer">
                <span class="sr-only"> Facebook </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.99h-2.54V12h2.54v-1.7c0-2.5 1.493-3.88 3.77-3.88 1.093 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.772-1.63 1.562V12h2.773l-.443 2.888h-2.33v6.99C18.344 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
              <a class="transition duration-300 hover:opacity-75" href="https://www.instagram.com" target="_blank"
                rel="noreferrer">
                <span class="sr-only"> Instagram </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.054 1.97.24 2.675.51a5.416 5.416 0 011.96 1.27 5.417 5.417 0 011.27 1.959c.27.706.457 1.506.511 2.676.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.054 1.17-.24 1.97-.51 2.675a5.405 5.405 0 01-1.27 1.96 5.413 5.413 0 01-1.96 1.27c-.706.27-1.506.457-2.676.511-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.054-1.97-.24-2.675-.51a5.414 5.414 0 01-1.96-1.27 5.414 5.414 0 01-1.27-1.96c-.27-.706-.457-1.506-.511-2.676-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.054-1.17.24-1.97.51-2.675a5.41 5.41 0 011.27-1.96 5.41 5.41 0 011.96-1.27c.706-.27 1.506-.457 2.676-.511 1.266-.058 1.646-.07 4.85-.07zM12 0C8.741 0 8.332.014 7.052.072 5.76.13 4.68.364 3.7.776c-.985.41-1.82.964-2.654 1.797A8.166 8.166 0 00.776 5.227c-.41.985-.647 2.065-.704 3.348C.014 9.855 0 10.263 0 13.5s.014 3.645.072 4.925c.057 1.283.293 2.363.704 3.348.41.985.964 1.82 1.797 2.653.832.833 1.668 1.388 2.654 1.798.985.41 2.065.646 3.348.703 1.28.058 1.689.072 4.925.072s3.645-.014 4.925-.072c1.283-.057 2.363-.293 3.348-.703a7.844 7.844 0 002.653-1.798 7.845 7.845 0 001.798-2.653c.41-.985.646-2.065.703-3.348.058-1.28.072-1.689.072-4.925s-.014-3.645-.072-4.925c-.057-1.283-.293-2.363-.703-3.348a7.848 7.848 0 00-1.798-2.654 7.845 7.845 0 00-2.653-1.797c-.985-.41-2.065-.646-3.348-.703C15.645.014 15.237 0 12 0zM12 5.838A6.162 6.162 0 005.838 12 6.162 6.162 0 0012 18.162 6.162 6.162 0 0018.162 12 6.162 6.162 0 0012 5.838zm0 10.153A3.991 3.991 0 018.01 12c0-2.203 1.787-3.99 3.99-3.99S15.99 9.797 15.99 12A3.991 3.991 0 0112 15.99zM18.406 5.594a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"
                    clip-rule="evenodd" />
                </svg>
              </a>
              <a class="transition duration-300 hover:opacity-75" href="https://www.linkedin.com" target="_blank"
                rel="noreferrer">
                <span class="sr-only"> LinkedIn </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M19.416 3.5C20.851 3.5 22 4.6 22 6.062v11.875C22 19.4 20.851 20.5 19.416 20.5H4.584A2.585 2.585 0 012 17.937V6.063C2 4.6 3.149 3.5 4.584 3.5h14.832zM18.12 8.503h-2.61v-.456c0-1.045-.015-2.39-1.456-2.39-1.458 0-1.682 1.14-1.682 2.313v.533H9.761v7.994h2.61v-4.074c0-.973.186-2.07 1.513-2.07 1.313 0 1.325 1.246 1.325 2.13v4.014h2.61v-5.99h-.003v-.994zm-9.597-3.02a1.553 1.553 0 100 3.107 1.553 1.553 0 000-3.106zm-1.308 3.02h2.61v7.994h-2.61V8.503z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <p class="font-signika font-bold text-center mt-6">
        <?php echo "Copyright © 2023 Malcolm Lismore. All rights reserved."; ?>
      </p>
    </div>
  </footer>
</body>

</html>
