<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Malcolm Lismore - Services</title>
  <meta name="description"
    content="Hello there, I'm Malcolm Lismore – an intrepid explorer through the lens, on a relentless quest to capture the world's boundless wonders. Join me in unraveling the extraordinary through my lens as I embark on a visual journey like no other.">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
  <link rel="stylesheet" href="output.css" />
  <link rel="stylesheet" href="styles.css" />
  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- Start - Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
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
          <a href="../index.php" class="text-2xl font-signika font-bold">Malcolm Lismore</a>
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
                  class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white"></span>
              </a>
            </li>
            <li class="group transition duration-300">
              <a href="about_me.php" class="font-signika text-2xl">ABOUT ME
                <span
                  class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white"></span>
              </a>
            </li>
            <li class="group transition duration-300">
              <a href="services.php" class="font-signika text-2xl">SERVICES
                <span class="hidden md:block h-0.5 bg-black dark:bg-white"></span>              </a>
            </li>
            <li class="group transition duration-300">
              <a href="contact.php" class="font-signika text-2xl">CONTACT
                <span class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white"></span>

              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Content -->
  <div class="container mx-auto">
    <div class="grid grid-cols-2 gap-16">
      <section class="col-span-2 md:col-span-1">
        <div class="max-w-full">
          <h1 class="text-4xl pt-10 pb-8"><b>SERVICES & PRICING</b></h1>
  
          <div class="overflow-x-auto">
            <table class="w-full bg-white dark:bg-neutral-900 text-lg border-collapse">
              <thead>
                <tr>
                  <th class="py-14 px-24 bg-gray-100 dark:bg-neutral-800 text-left">Service</th>
                  <th class="py-14 px-24 bg-gray-100 dark:bg-neutral-800 text-left">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;"><b>Platinum Packages</b></td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;"></td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Wedding Photography - Full Day</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$2500</td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Event Photography - Full Day</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$1800</td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Corporate Photography</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$2200</td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;"><b>Gold Packages</b></td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;"></td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Wedding Photography - Half Day</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$1500</td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Portrait Photography</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$700</td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Event Photography - Half Day</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$1200</td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;"><b>Silver Packages</b></td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;"></td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Engagement Photography</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$500</td>
                </tr>
                <tr>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">Family Photography</td>
                  <td class="py-14 px-24 border-b border-gray-200 dark:border-neutral-800" style="line-height: 2;">$500</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- Footer -->
  <footer class="flex flex-col mt-12 gap-5 justify-center items-center w-full text-center">
    <ul class="flex gap-5 justify-center items-center">
      <li>
        <a href="https://www.instagram.com/malcolm_lismore" target="_blank" aria-label="Instagram"
          class="group rounded-lg bg-black dark:bg-white h-10 w-10 text-black dark:text-white dark:hover:bg-white border border-transparent hover:border-black dark:hover:text-black hover:bg-white hover:text-black dark:hover:border-white flex items-center justify-center">
          <svg width="24" height="24" fill="currentColor">
            <use href="#instagram"></use>
          </svg>
        </a>
      </li>
      <li>
        <a href="https://www.behance.net/malcolmlismore" target="_blank" aria-label="Behance"
          class="group rounded-lg bg-black dark:bg-white h-10 w-10 text-black dark:text-white dark:hover:bg-white border border-transparent hover:border-black dark:hover:text-black hover:bg-white hover:text-black dark:hover:border-white flex items-center justify-center">
          <svg width="24" height="24" fill="currentColor">
            <use href="#behance"></use>
          </svg>
        </a>
      </li>
      <li>
        <a href="https://github.com/malcolmlismore" target="_blank" aria-label="GitHub"
          class="group rounded-lg bg-black dark:bg-white h-10 w-10 text-black dark:text-white dark:hover:bg-white border border-transparent hover:border-black dark:hover:text-black hover:bg-white hover:text-black dark:hover:border-white flex items-center justify-center">
          <svg width="24" height="24" fill="currentColor">
            <use href="#github"></use>
          </svg>
        </a>
      </li>
    </ul>
    <small class="text-gray-400 dark:text-gray-600">Malcolm Lismore &copy; 2024. All Rights Reserved.</small>
  </footer>

  <!-- SVG Symbols -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="instagram" viewBox="0 0 24 24">
      <path
        d="M12,2.16c3.2,0,3.584,0.012,4.85,0.07c1.17,0.055,1.8,0.246,2.22,0.407c0.558,0.217,0.957,0.476,1.378,0.897 c0.421,0.421,0.68,0.82,0.897,1.378c0.161,0.42,0.352,1.05,0.407,2.22c0.058,1.266,0.07,1.65,0.07,4.85s-0.012,3.584-0.07,4.85 c-0.055,1.17-0.246,1.8-0.407,2.22c-0.217,0.558-0.476,0.957-0.897,1.378c-0.421,0.421-0.82,0.68-1.378,0.897 c-0.42,0.161-1.05,0.352-2.22,0.407c-1.266,0.058-1.65,0.07-4.85,0.07s-3.584-0.012-4.85-0.07c-1.17-0.055-1.8-0.246-2.22-0.407 c-0.558-0.217-0.957-0.476-1.378-0.897c-0.421-0.421-0.68-0.82-0.897-1.378c-0.161-0.42-0.352-1.05-0.407-2.22 c-0.058-1.266-0.07-1.65-0.07-4.85s0.012-3.584,0.07-4.85c0.055-1.17,0.246-1.8,0.407-2.22c0.217-0.558,0.476-0.957,0.897-1.378 c0.421-0.421,0.82-0.68,1.378-0.897c0.42-0.161,1.05-0.352,2.22-0.407C8.416,2.172,8.8,2.16,12,2.16 M12,0C8.735,0,8.332,0.015,7.052,0.073 C5.765,0.131,4.63,0.374,3.7,0.762c-0.964,0.405-1.782,0.947-2.598,1.763c-0.816,0.816-1.358,1.634-1.763,2.598 c-0.388,0.93-0.631,2.065-0.689,3.352C0.015,8.332,0,8.735,0,12s0.015,3.668,0.073,4.948c0.058,1.287,0.3,2.422,0.689,3.352 c0.405,0.964,0.947,1.782,1.763,2.598c0.816,0.816,1.634,1.358,2.598,1.763c0.93,0.388,2.065,0.631,3.352,0.689 C8.332,23.985,8.735,24,12,24s3.668-0.015,4.948-0.073c1.287-0.058,2.422-0.3,3.352-0.689c0.964-0.405,1.782-0.947,2.598-1.763 c0.816-0.816,1.358-1.634,1.763-2.598c0.388-0.93,0.631-2.065,0.689-3.352C23.985,15.668,24,15.265,24,12s-0.015-3.668-0.073-4.948 c-0.058-1.287-0.3-2.422-0.689-3.352c-0.405-0.964-0.947-1.782-1.763-2.598c-0.816-0.816-1.634-1.358-2.598-1.763 c-0.93-0.388-2.065-0.631-3.352-0.689C15.668,0.015,15.265,0,12,0L12,0z" />
      <path
        d="M12,5.84c-3.398,0-6.16,2.762-6.16,6.16S8.602,18.16,12,18.16S18.16,15.398,18.16,12S15.398,5.84,12,5.84z M12,16c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,16,12,16z" />
      <circle cx="18.406" cy="5.594" r="1.44" />
    </symbol>
    <symbol id="behance" viewBox="0 0 24 24">
      <path
        d="M8.297,12.875c-0.858,0-1.594-0.289-1.594-1.172c0-0.844,0.734-1.078,1.547-1.078c0.938,0,1.641,0.328,1.641,1.156 C9.891,12.578,9.266,12.875,8.297,12.875z M8.172,8.812C9.141,8.812,9.797,9.234,9.797,10H6.531C6.578,9.281,7.266,8.812,8.172,8.812z M11.344,9.812c0,0,0.812-0.703,2.172-0.703c1.797,0,3.109,0.922,3.109,3.156v4.25h-1.688v-0.547h-0.062c-0.391,0.406-1.063,0.688-1.781,0.688 c-1.594,0-2.828-1.219-2.828-2.828c0-1.547,1.125-2.828,2.766-2.828c0.813,0,1.484,0.266,1.844,0.719h0.062v-0.625 c0-0.828-0.656-1.469-1.516-1.469c-0.719,0-1.266,0.375-1.328,1H11.5C11.438,10.422,11.344,9.812,11.344,9.812z M16.375,14.797v-1.438 c-0.203-0.297-0.594-0.531-1.016-0.531c-0.75,0-1.25,0.578-1.25,1.266c0,0.75,0.516,1.219,1.25,1.219 C15.734,15.312,16.172,15.047,16.375,14.797z M4.312,15.047h2.469c1.563,0,2.547-0.891,2.547-2.172c0-0.953-0.641-1.781-1.641-1.969v-0.031 c0.719-0.156,1.297-0.812,1.297-1.625c0-1.312-1.109-2.016-2.469-2.016H4.312V15.047z M20.5,7.75h-5.25V9h5.25V7.75z" />
    </symbol>
    <symbol id="github" viewBox="0 0 24 24">
      <path
        d="M12,0.297C5.375,0.297,0,5.672,0,12.297c0,5.297,3.438,9.797,8.203,11.391c0.594,0.109,0.812-0.25,0.812-0.578 c0-0.281-0.016-1.031-0.016-2.031c-3.344,0.719-4.047-1.609-4.047-1.609c-0.531-1.391-1.297-1.766-1.297-1.766 c-1.078-0.734,0.078-0.719,0.078-0.719c1.188,0.078,1.812,1.219,1.812,1.219c1.063,1.812,2.781,1.297,3.453,0.984 c0.109-0.797,0.406-1.297,0.75-1.594c-2.672-0.297-5.469-1.328-5.469-5.922c0-1.297,0.453-2.359,1.203-3.188 c-0.109-0.297-0.516-1.5,0.109-3.125c0,0,0.984-0.312,3.234,1.203c0.938-0.266,1.938-0.406,2.938-0.406s2,0.141,2.938,0.406 c2.234-1.516,3.234-1.203,3.234-1.203c0.625,1.625,0.219,2.828,0.109,3.125c0.75,0.828,1.203,1.891,1.203,3.188 c0,4.609-2.813,5.625-5.484,5.922c0.422,0.359,0.813,1.078,0.813,2.203c0,1.594-0.016,2.891-0.016,3.281c0,0.328,0.203,0.688,0.813,0.578 C20.563,22.094,24,17.594,24,12.297C24,5.672,18.625,0.297,12,0.297z" />
    </symbol>
  </svg>
</body>

</html>

