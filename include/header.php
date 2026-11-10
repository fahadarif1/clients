<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wajahat Ali — Attorney at Law</title>
    <meta name="description"
        content="Trusted legal counsel for growing businesses. Business, family, criminal, civil and real estate law.">
    <meta property="og:title" content="Wajahat Ali — Attorney at Law">
    <meta property="og:description" content="Trusted legal counsel for growing businesses.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Anton&family=Manrope:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

       <script src="script.js" defer></script>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="font-sans antialiased">
    <main class="bg-background text-foreground overflow-x-hidden" data-tsd-source="/src/routes/index.tsx:67:5">
        
        <!-- Header -->
        <header class="fixed inset-x-0 top-0 z-50 flex items-center justify-between px-6 py-5 md:px-24"
            data-tsd-source="/src/routes/index.tsx:69:7">
            
            <a aria-label="Home" data-tsd-source="/src/routes/index.tsx:70:9" href="#top">
                <svg aria-hidden="true" class="lucide lucide-gavel h-9 w-9 text-primary" data-tsd-source="/src/routes/index.tsx:70:42"
                    fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m14 13-8.381 8.38a1 1 0 0 1-3.001-3l8.384-8.381"></path>
                    <path d="m16 16 6-6"></path>
                    <path d="m21.5 10.5-8-8"></path>
                    <path d="m8 8 6-6"></path>
                    <path d="m8.5 7.5 8 8"></path>
                </svg>
            </a>

            <!-- Menu Button (Click to open overlay) -->
            <button id="open-menu" class="flex items-center gap-3 font-display text-2xl uppercase cursor-pointer"
                data-tsd-source="/src/routes/index.tsx:71:9">
                Menu 
                <svg aria-hidden="true" class="lucide lucide-menu h-6 w-6" data-tsd-source="/src/routes/index.tsx:72:16" fill="none"
                    height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 5h16"></path>
                    <path d="M4 12h16"></path>
                    <path d="M4 19h16"></path>
                </svg>
            </button>
        </header>

        <!-- Full-Screen Navigation Menu Overlay (Initially Hidden) -->
        <div id="menu" class="fixed inset-0 z-50 flex flex-col bg-background p-6 md:px-24 py-5 hidden overflow-y-auto">
            
            <!-- Close Button -->
            <button type="button" id="close-menu" class="ml-auto flex items-center gap-2 font-display text-2xl uppercase cursor-pointer" aria-label="Close menu">
                Close ×
            </button>

            <!-- Navigation Links -->
            <nav class="mt-12 flex flex-col gap-4">
                
                <!-- About -->
             <div class="flex flex-col">
                    <a class="font-display text-6xl uppercase transition-colors hover:text-primary md:text-8xl" href="./">Home</a>
                </div>


                <div class="flex flex-col">
                    <a class="font-display text-6xl uppercase transition-colors hover:text-primary md:text-8xl" href="about-us.php">About</a>
                </div>

                <!-- Services with Dropdown -->
                <div class="flex flex-col menu-item">
                    <a class="font-display text-6xl uppercase transition-colors hover:text-primary md:text-8xl flex items-center justify-between" href="#" data-has-sub="true">
                        <span>Services</span>
                        <span class="arrow transition-transform duration-300 text-4xl">↓</span>
                    </a>
                    
                    <!-- Sub-services Dropdown -->
                    <div class="submenu hidden ml-4 mt-2 flex-col gap-2">
                              <a class="font-display text-2xl uppercase text-gray-400 hover:text-primary md:text-3xl" href="Criminal-Law.php">Criminal Law</a>
                        <a class="font-display text-2xl uppercase text-gray-400 hover:text-primary md:text-3xl" href="Family-Law.php">Family Law</a>
                        <a class="font-display text-2xl uppercase text-gray-400 hover:text-primary md:text-3xl" href="Property-Law.php">Property Law</a>
                        <a class="font-display text-2xl uppercase text-gray-400 hover:text-primary md:text-3xl" href="Constitutional-Law.php">Constitutional Law</a>
                        <a class="font-display text-2xl uppercase text-gray-400 hover:text-primary md:text-3xl" href="Corporate-Law.php">Corporate Law </a>
                               <a class="font-display text-2xl uppercase text-gray-400 hover:text-primary md:text-3xl" href="Tax-Law.php">Tax Law</a>
                      
                   
                          
                    </div>
                </div>

              
            
                <!-- Contact -->
                <div class="flex flex-col">
                    <a class="font-display text-6xl uppercase transition-colors hover:text-primary md:text-8xl" href="contant-us.php">Contact</a>
                </div>

            </nav>
        </div>

    </main>

    <!-- JavaScript for Open/Close & Dropdown Toggle -->

