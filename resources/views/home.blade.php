<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
        <style>
            html, body {
                font-family: 'Cairo', sans-serif;
            }

            .content {
                position: relative;
                z-index: 1;
                padding: 10px;
            }

        </style>
    </head>
    <body class="bg-gradient-to-tl from-green-500 to-blue-700 bg-no-repeat">




    {{--<div class="bg-[url('http://cdn.shopify.com/s/files/1/0565/7080/6458/collections/Forest_Jungle_Wallpaper.jpg?v=1660124648')] bg-cover bg-left h-full ">--}}
    {{--    <div class="bg-gradient-to-tl from-green-500 to-blue-700 bg-cover h-full -z-1">--}}
    {{--    <div id="page-background" class="object object-cover fixed w-full h-fit"><img src="http://cdn.shopify.com/s/files/1/0565/7080/6458/collections/Forest_Jungle_Wallpaper.jpg?v=1660124648" width="100%" height="100%" alt="Smile"></div>--}}
    <div class="flex flex-col h-screen">
        <div class="flex justify-center flex-grow">
            <div class="container w-80">


                {{--            <img class="mx-auto my-10 rounded-full border-2 border-gray-500 aspect-square object-cover" src="/images/user_logo.jpeg" width="100" alt="">--}}
                <img class="mx-auto my-5 rounded-full aspect-square object-cover" src="/images/user_logo.jpeg"
                     width="100"
                     alt="">
                <div class="grid grid-cols-1">
                    <div class="text-xl mx-auto text-white">
                        Marwan ElMagbare
                    </div>
                    <div class="text-xs  mx-auto text-white text-justify mt-2 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in massa nulla. Etiam
                        auctor
                        bibendum turpis eu eleifend. Aliquam egestas nisl ac augue sollicitudin cursus. Aliquam
                        ultricies

                    </div>
                    <button type="button"
                            class="mt-3 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Visit the Website !
                    </button>
                    <button type="button"
                            class="mt-3 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Read the latest post on Blog
                    </button>
                    <button type="button"
                            class="mt-3 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Contact with me
                    </button>
                    <button type="button"
                            class="mt-3 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        My Portfolio
                    </button>
                </div>
                <div class="grid grid-cols-5 gap-y-5 mt-5">
                    <img width="40" src="/images/facebook (1).png" alt="">
                    <img width="40" src="/images/instagram (3).png" alt="">
                    <img width="40" src="/images/twitter.png" alt="">
                    <img width="40" src="/images/whatsapp.png" alt="">
                    <img width="40" src="/images/youtube.png" alt="">

                </div>
            </div>

        </div>


        {{--        </div>--}}


    <footer
        class="p-4 bg-white rounded-tl rounded-tr shadow flex items-center justify-between p-6 dark:bg-gray-800">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/"
                                                                                    class="hover:underline">Fytaraa™</a>. All Rights Reserved.
    </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>
    </div>
    </body>
</html>
