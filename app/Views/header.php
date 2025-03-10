<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="2J-J3kM1ufBUAq7IRdCQRL0Uh3F2MgkwbAeRgLdPBHk" />
    <title><?php echo $meta_title; ?></title>
    <!--<meta name="keywords" content="<?php echo $meta_keyword;?>">-->
    <meta name="description" content="<?php echo $meta_description;?>">
    <link rel="canonical" href="https://www.zyzha.com<?php echo ((isset($page_uri) && $page_uri!='') ? '/'.$page_uri : ''); ?>" />
    
    <?= isset($noindex) ? $noindex : '' ?>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KGVCGGHM');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11122428844"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-11122428844');
    </script>
</head>

<body> 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGVCGGHM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header id="header" class="fixed top-0 left-0 w-full z-[999] bg-transparent transition-all duration-500">
    <div class="flex justify-between items-center container mx-auto py-1 lg:py-3 px-3">
        <div class="relative z-[3]">
            <a href="/">
                <img class="max-w-full" src="./assets/img/logo/zyzha-logo.webp" alt="" width="110" height="100%">
            </a>
        </div>
        <button id="openNav">
            <svg class="w-6 h-6 text-black dark:text-white lg:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
            </svg>                  
        </button>
        <nav id="navbar" class="grow lg:block absolute top-0 right-0 max-w-full w-[350px] bg-[#FFFFFFc4] backdrop-blur-[5px] lg:backdrop-blur-[0] lg:w-[100%] lg:block lg:bg-transparent lg:top-auto lg:translate-x-[0%] translate-x-[100%] transition-all duration-[.8s] ease">
            <div class="pt-3 pe-3 lg:hidden mb-8">
                <button id="closeNav" class="ms-auto block bg-[#cdcdcd] p-2 rounded">
                    <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                        </svg>                          
                </button>
            </div>
            <ul class="lg:flex items-center justify-center block h-screen lg:h-auto">
                <li class="mb-3 lg:mb-0">
                    <a class="py-4 px-4 text-black font-[400]" href="/">Home</a>
                </li>
                <li class="mb-3 lg:mb-0">
                    <a class="py-4 px-4 text-black font-[400]" href="about-us">About Us</a>
                </li>
                <li class="relative mb-3 lg:mb-0">
                    <button type="button" class="flex items-center justify-between w-full gap-x-1 text-black ps-4 pe-3 lg:pe-0 lg:py-[18px] dropdown-button">
                        <span class="font-[400]">Services</span>
                        <svg class="w-6 h-6 text-black dark:text-white dropdown-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                        </svg>                              
                    </button>
                    <ul id="dropdown" class="dropdown-menu servDropdown relative lg:absolute lg:top-[60px] bg-transparent lg:bg-[#ffffff] lg:w-[270px] lg:rounded-b px-3 lg:px-0 lg:max-h-[500px] max-h-0 overflow-hidden transition-[max-height] duration-300 ease-in-out">
                        <li class="border-b border-slate-300">
                            <a class="text-black block p-[12px_0px_12px_20px] hover:text-slate-500" href="business-loan">Business Loan</a>
                        </li>
                        <li class="border-b border-slate-300">
                            <a class="text-black block p-[12px_0px_12px_20px] hover:text-slate-500" href="site-under-construction">Mortgage Loan</a>
                        </li>
                        <li class="border-b border-slate-300">
                            <a class="text-black block p-[12px_0px_12px_20px] hover:text-slate-500" href="site-under-construction">Personal Loan</a>
                        </li>
                        <li class="border-b border-slate-300">
                            <a class="text-black block p-[12px_0px_12px_20px] hover:text-slate-500" href="site-under-construction">Home Loan</a>
                        </li>
                        <li class="border-b border-slate-300">
                            <a class="text-black block p-[12px_0px_12px_20px] hover:text-slate-500" href="site-under-construction">EMI Loan</a>
                        </li>
                        <li class="border-b border-slate-300">
                            <a class="text-black block p-[12px_0px_12px_20px] hover:text-slate-500" href="site-under-construction">Property Loan</a>
                        </li>
                        <li class="">
                            <a class="text-black block p-[12px_0px_12px_20px] hover:text-slate-500" href="site-under-construction">Gold Loan</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-3 lg:mb-0">
                    <a class="py-4 px-4 text-black font-[400]" href="site-under-construction">Check Your Cibil Score</a>
                </li>
                <li class="mb-3 lg:mb-0">
                    <a class="py-4 px-4 text-black font-[400]" href="blogs">Blogs</a>
                </li>
                <li class="mb-3 lg:mb-0">
                    <a class="py-4 px-4 text-black font-[400]" href="contact-us">Contact Us</a>
                </li>
            </ul>
        </nav>
        <div class="relative z-[3] hidden lg:block">
            <a href="emi-calculator" class="bg-[#20AA4A] text-white px-5 py-2 rounded-[5px] hover:bg-[#61C37F] transition-all duration-300">EMI Calculator</a>
        </div>
    </div>
</header>