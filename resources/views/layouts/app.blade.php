<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Maged RASLAN')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet"> 
    
    <style>
        body, div {
            color:#e2e8f0 !important;
            font-family: 'Roboto Mono', monospace !important;
        }

        h1, h2, h3, h4, h5, h6 {
            color:#e2e8f0 !important;
        }

        a {
            color: #3cd2e8 !important;
            text-decoration: none !important;
        }
    </style>
</head>
<body class="antialiased bg-gray-900 text-gray-100">
    <div class="max-w-3xl px-4 mx-auto sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="flex flex-col justify-between h-screen">
            <header class="flex items-center justify-between py-10">
                <div>
                    <a aria-label="Maged Raslan" href="/">
                        <div class="flex items-center justify-between">
                            <div class="mr-3 hidden sm:block ">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="257.3 273.633 40.8 46.367" width="36.8" height="42.37"><defs><linearGradient id="logo_svg__b" gradientUnits="userSpaceOnUse" x1="293.42" y1="278.05" x2="293.42" y2="313.21">
                                    <stop style="stop-color:#67e8f9;stop-opacity:1" offset="0%"></stop><stop style="stop-color:#06b6d4;stop-opacity:1" offset="100%"></stop></linearGradient><linearGradient id="logo_svg__d" gradientUnits="userSpaceOnUse" x1="260.07" y1="313.62" x2="260.98" y2="278.47"><stop style="stop-color:#67e8f9;stop-opacity:1" offset="0%"></stop><stop style="stop-color:#06b6d4;stop-opacity:1" offset="100%"></stop></linearGradient><path d="m267.69 281.9 6.12 20.57-6.16 5.96-7.34-26.4.05-.05h-.2l5.03-6.57 29.91-.78-4.61 7.02-22.8.25Z" id="logo_svg__a"></path><path d="M293.22 310.41h.2l-5.2 6.46-29.92.13 4.79-6.92 22.81.25-5.59-20.71 6.31-5.81 6.66 26.54-.06.06Z" id="logo_svg__c"></path></defs><use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use><use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use>
                                </svg>
                            </div>
                            <div class="h-6 text-2xl font-semibold" style="font-family:'Akaya Telivigala', cursive !important;">
                                Maged Raslan
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex items-center text-base leading-5">
                    <div class="hidden sm:block">
                        <a class="p-1 font-medium sm:p-4 text-gray-100" href="/posts">
                            Home
                        </a>
                        <!-- <a class="p-1 font-medium sm:p-4 text-gray-100" href="/tags">
                            Tags
                        </a> -->
                        <a class="p-1 font-medium sm:p-4 text-gray-100" href="/projects">
                            Projects
                        </a>
                        <a class="p-1 font-medium sm:p-4 text-gray-100" href="/about">
                            About
                        </a>
                    </div>
                    <div class="sm:hidden" >
                        <button id="menu-button" type="button" class="w-8 h-8 py-1 ml-1 mr-1 rounded" aria-label="Toggle Menu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-100"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="menu" class=" hidden fixed w-3/4 h-full top-24 right-0 bg-gray-200 dark:bg-gray-800 opacity-95 z-10  ease-in-out duration-300 translate-x-full">
                            <button type="button" aria-label="toggle modal" class="fixed w-full h-full cursor-auto focus:outline-none"></button>
                            <nav class="fixed h-full mt-8">
                                <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-100" href="/">
                                        Home
                                    </a>
                                </div>
                                <!-- <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-100" href="/tags">
                                        Tags
                                    </a>
                                </div> -->
                                <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-100" href="/projects">
                                        Projects
                                    </a>
                                </div>
                                <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-100" href="/about">
                                        About
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        


    @yield('content')
    
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(session()->has('feedback'))
    <script>
        $.notify.addStyle('happyblue', {
        html: "<div>☺<span data-notify-text/>☺</div>",
        classes: {
            base: {
            "white-space": "nowrap",
            "background-color":"green",
            "border-radius" : "5px",
            "font-size" :"20px",
            "padding": "10px"
            },
            superblue: {
                "color": "white",
            }
        }
        });
        $.notify("Thanks for subscribing", {
            style: 'happyblue', position: "bottom-right"
        });
    </script>
    @endif

    <script>
        const button = document.querySelector('#menu-button'); // Hamburger Icon
        const menu = document.querySelector('#menu'); // Menu

        button.addEventListener('click', () => {
            
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>