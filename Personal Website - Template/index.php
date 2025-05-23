<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo 'Malcolm Lismore - Portfolio'; ?></title>
    <meta name="description"
        content="Hello there, I'm Malcolm Lismore – an intrepid explorer through the lens, on a relentless quest to capture the world's boundless wonders. Join me in unraveling the extraordinary through my lens as I embark on a visual journey like no other.">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
    <link rel="stylesheet" href="dist/output.css" />
    <link rel="stylesheet" href="styles.css" />
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Start - Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@400;700&display=swap" rel="stylesheet">
    <!-- End - Fonts -->
    <!-- Start - Fancybox Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- End - Fancybox Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        content: ["./dist/*.{html,js}"],
        theme: {
            extend: {
                fontFamily: {
                    'nothingyoucoulddo': ['Nothing You Could Do', 'cursive'],
                    'signika': ['Signika', 'sans-serif'],
                },
            },
        },
        plugins: [],
    }
    </script>
</head>

<body
    class="dark:bg-black bg-white h-screen text-black dark:text-white px-5 md:px-20 opacity-0 animate-fade-in transition duration-500">
    <!-- Navbar -->
    <header class="flex w-full overflow-hidden pt-10 pb-1">
        <!-- Navbar -->
        <nav id="nav" x-data="{ open: false }" role="navigation" class="w-full">
            <div class="container mx-auto flex flex-wrap items-center md:flex-no-wrap">
                <div class="mr-4 md:mr-8">
                    <a href="index.php" class="text-2xl font-signika font-bold">Malcolm Lismore</a>
                </div>
                <div class="ml-auto md:hidden flex items-center justify-start">
                    <button onclick="menuToggle()" @click="open = !open"
                        class="tap-highlight-transparent text-black dark:text-white w-5 h-5 relative focus:outline-none">
                        <span class="sr-only">Open main menu</span>
                        <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <span aria-hidden="true"
                                class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                                :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                            <span aria-hidden="true"
                                class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out"
                                :class="{'opacity-0': open } "></span>
                            <span aria-hidden="true"
                                class="block absolute h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out"
                                :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                        </div>
                    </button>
                </div>
                <div id="menu"
                    class="w-full h-0 transition-all ease-out duration-500 md:transition-none md:w-auto md:flex-grow md:flex md:items-center">
                    <ul id="ulMenu"
                        class="flex flex-col duration-300 ease-out md:space-x-5 sm:transition-none mt-5 md:flex-row md:items-center md:ml-auto md:mt-0 md:pt-0 md:border-0">
                        <li class="group transition duration-300">
                            <a href="index.php" class="font-signika text-2xl tap-highlight-transparent">PORTFOLIO <span
                                    class="hidden md:block h-0.5 bg-black dark:bg-white"></span></a>
                        </li>
                        <li class="group transition duration-300">
                            <a href="dist/about_me.php" class="font-signika text-2xl tap-highlight-transparent">ABOUT ME
                                <span
                                    class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white"></span></a>
                        </li>
                        <li class="group transition duration-300">
                            <a href="services.php" class="font-signika text-2xl">SERVICES <span
                                    class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white"></span></a>
                        </li>
                        <li class="group transition duration-300">
                            <a href="dist/contact.php" class="font-signika text-2xl tap-highlight-transparent">CONTACT
                                <span
                                    class="hidden md:block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-black dark:bg-white"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Content -->
    <div class="container mx-auto">
        <h1 class="text-4xl pt-10 pb-8 font-bold">PORTFOLIO</h1>
        <section class="text-neutral-700">
            <div class="container w-full">
                <div class="flex flex-wrap w-full">
                    <div class="flex w-full md:w-1/2 flex-wrap">
                        <div class="w-full md:w-1/2 p-1">
                            <div class="overflow-hidden h-full w-full">
                                <a href="https://images.unsplash.com/photo-1675789203977-70070dae0799?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    data-fancybox="gallery">
                                    <img alt="a person standing in front of a rock formation"
                                        class="block h-full w-full object-cover object-center opacity-0 animate-fade-in transition duration-500 transform scale-100 hover:scale-110"
                                        src="https://images.unsplash.com/photo-1675789203977-70070dae0799?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" />
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-1">
                            <div class="overflow-hidden h-full w-full">
                                <a href="https://images.unsplash.com/photo-1674985594089-eab270e843c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1963&q=80"
                                    data-fancybox="gallery">
                                    <img alt="a cat laying on top of a sidewalk next to the ocean"
                                        class="block h-full w-full object-cover object-center opacity-0 animate-fade-in transition duration-500 transform scale-100 hover:scale-110"
                                        src="https://images.unsplash.com/photo-1674985594089-eab270e843c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1963&q=80" />
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:w-full p-1">
                            <div class="overflow-hidden h-full w-full">
                                <a href="https://images.unsplash.com/photo-1675584053086-134d8ff2e134?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                                    data-fancybox="gallery">
                                    <img alt="a person in a kayak paddling on a lake"
                                        class="block h-full w-full object-cover object-center opacity-0 animate-fade-in transition duration-500 transform scale-100 hover:scale-110"
                                        src="https://images.unsplash.com/photo-1675584053086-134d8ff2e134?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full md:w-1/2 flex-wrap">
                        <div class="w-full md:w-full p-1">
                            <div class="overflow-hidden h-full w-full">
                                <a href="https://images.unsplash.com/photo-1675789199636-35e694346d54?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1633&q=80"
                                    data-fancybox="gallery">
                                    <img alt="a bench on top of a sandy beach"
                                        class="block h-full w-full object-cover object-center opacity-0 animate-fade-in transition duration-500 transform scale-100 hover:scale-110"
                                        src="https://images.unsplash.com/photo-1675789199636-35e694346d54?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1633&q=80" />
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-1">
                            <div class="overflow-hidden h-full w-full">
                                <a href="https://images.unsplash.com/photo-1675789202868-394becc50788?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1959&q=80"
                                    data-fancybox="gallery">
                                    <img alt="a cat laying on top of a wooden table"
                                        class="block h-full w-full object-cover object-center opacity-0 animate-fade-in transition duration-500 transform scale-100 hover:scale-110"
                                        src="https://images.unsplash.com/photo-1675789202868-394becc50788?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1959&q=80" />
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-1">
                            <div class="overflow-hidden h-full w-full">
                                <a href="https://images.unsplash.com/photo-1675789201931-3527fc87b1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    data-fancybox="gallery">
                                    <img alt="a cat laying on top of a tree trunk"
                                        class="block h-full w-full object-cover object-center opacity-0 animate-fade-in transition duration-500 transform scale-100 hover:scale-110"
                                        src="https://images.unsplash.com/photo-1675789201931-3527fc87b1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="pt-20 pb-4">
        <p class="text-center font-signika font-bold">&copy; <?php echo date('Y'); ?> Malcolm Lismore</p>
    </footer>
</body>

</html>