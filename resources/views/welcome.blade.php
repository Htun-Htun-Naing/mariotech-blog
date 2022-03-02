<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario Tech</title>
    <!-- TailwindCSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Boxicons Icon Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Inter Font Family 400;500;600 Regular;Medium;Semi-bold -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Myanmar Font -->
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
    <!-- site wise styles -->
    <style>
        body {
            font-family: 'Inter', 'Myanmar3', sans-serif;
        }
        .post .title, .post p.excerpt, .featured-post .title {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }
        .featured-post p.excerpt {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
        }
        .meta span:not(:first-child):before {
            content: '';
            position: absolute;
            width: 2px;
            height: 2px;
            background-color: #4B5563;
            top: 50%;
            transform: translateY(-50%);
            left: -9px;
            border-radius: 50%;
        }
        .__mm {
            font-weight: normal;
            line-height: 1.5;
        }
    </style>

    <!-- npm install later -->
    <!-- https://github.com/tailwindlabs/tailwindcss-line-clamp -->
</head>

<body class="text-gray-600 font-normal">


    <header class="bg-indigo-50">
        <x-fe-menu>
        </x-fe-menu>

        <div class="grid grid-cols-12">
            <div class="col-start-2 col-span-10 md:col-start-2 md:col-span-5 py-14 md:py-20">
                <h1 class="text-4xl xl:text-5xl font-medium text-gray-900 xl:leading-tight">Mario Tech is the place where hatred does not exists.</h1>

                <p class="mt-2 text-sm md:text-base xl:w-4/5">
                    It's easy and free to post your thinking on any topic and connect with millions of readers.
                </p>
            </div>

            <div class="hidden md:block md:col-start-8 md:col-span-4 md:flex md:items-center">
                <img src="/img/hero-image.png" alt="hero-image">
            </div>
        </div>
    </header>

    <main>
        <!-- Most Reading Posts -->
        <div class="border-t border-gray-100 py-10">
            <div class="grid grid-cols-12">
                <div class="col-start-2 col-span-10">
                    <div class="flex items-center gap-2 mb-5">
                        <i class='bx bx-trending-up'></i>
                        <span class="uppercase font-bold text-xs">Most reading on Mario Tech</span>
                    </div>

                    <ul class="col-span-12 grid grid-cols-12 gap-6 md:gap-8">

                        <?php foreach (range(0, 5) as $index) :?>
                            <li class="col-span-12 md:col-span-6 lg:col-span-4 md:space-y-3">
                                <img class="shadow-sm object-cover object-center rounded-xl w-full h-full md:h-48 hidden md:block" src="https://laravelnews.imgix.net/images/laravel9-1645586911.jpg?ixlib=php-3.3.1">

                                <div class="space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <img class="rounded-full" src="https://i.pravatar.cc/30?u=<?php echo $index; ?>">

                                        <a href="#" class="text-sm font-medium transition ease-in-out duration-300 hover:text-indigo-500">
                                            Shinobu Kochō
                                        </a>
                                    </div>

                                    <div>
                                        <a href="#" class="inline-block transition ease-in-out duration-300 text-gray-800 hover:text-indigo-500">
                                            <h4 class="title leading-snug font-bold" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"> I'm So Fucking Sorry Your Child Had to Read a Fucking Swear Word in a Book About the Holocaust. I'm So Fucking Sorry Your Child Had to Read a Fucking Swear Word in a Book About the Holocaust. </h4>
                                        </a>
                                    </div>

                                    <div class="text-xs meta flex items-center gap-4">
                                        <span class="relative">Jan 31</span>
                                        <span class="relative">6 min read</span>
                                        <span class="relative">
                                            <a href="#" class="inline-block rounded-full px-2 py-1 transition ease-in-out duration-300 bg-gray-50 hover:bg-indigo-100"> Working </a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Posts and categories aside two column -->
        <div class="grid grid-cols-12 xl:py-14 xl:border-t border-gray-100">
            <div class="xl:col-start-2 col-span-12 xl:col-span-6 row-start-2 xl:row-start-1 py-14 xl:py-0 border-t xl:border-t-0 border-gray-100">
                <div class="grid grid-cols-12 xl:block">
                    <div class="col-start-2 col-span-10">
                        <ul class="space-y-6 md:space-y-8">

                            <?php foreach (range(0, 9) as $index) :?>
                                <li>
                                    <div class="flex flex-col md:flex-row gap-6">
                                        <div class="space-y-2">
                                            <div class="flex items-center space-x-2">
                                                <img class="rounded-full" src="https://i.pravatar.cc/30?u=<?php echo $index; ?>">

                                                <a href="#" class="text-sm font-medium transition ease-in-out duration-300 hover:text-indigo-500">
                                                    Shinobu Kochō
                                                </a>
                                            </div>

                                            <div>
                                                <a href="#" class="inline-block transition ease-in-out duration-300 text-gray-800 hover:text-indigo-500">
                                                    <h4 class="title leading-snug font-bold" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"> I'm So Fucking Sorry Your Child Had to Read a Fucking Swear Word in a Book About the Holocaust. I'm So Fucking Sorry Your Child Had to Read a Fucking Swear Word in a Book About the Holocaust. </h4>
                                                </a>

                                                <p class="text-sm md:text-base mt-1" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"> The three of us had been snacking for the better part of the early afternoon, filling a table with everything we could carry. The three of us had been snacking for the better part of the early afternoon, filling a table with everything we could carry. The three of us had been snacking./p>
                                            </div>

                                            <div class="text-xs meta flex items-center gap-4">
                                                <span class="relative">Jan 31</span>
                                                <span class="relative">6 min read</span>
                                                <span class="relative">
                                                    <a href="#" class="inline-block rounded-full px-2 py-1 transition ease-in-out duration-300 bg-gray-50 hover:bg-indigo-100"> Working </a>
                                                </span>
                                            </div>
                                        </div>

                                        <img class="flex-shrink-0 shadow-sm object-cover object-center rounded-xl md:w-64 h-48 md:h-full" src="https://dummyimage.com/1200x1000&text=a">
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>

                        <div class="flex items-center justify-between mt-10">
                            <a href="#" class="transition ease-in-out duration-300 text-sm text-center inline-block bg-indigo-500 hover:bg-indigo-600 text-white w-24 py-3 md:py-4 rounded-lg">Previous</a>
                            <a href="#" class="transition ease-in-out duration-300 text-sm text-center inline-block bg-indigo-500 hover:bg-indigo-600 text-white w-24 py-3 md:py-4 rounded-lg">Next</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-start-9 col-span-12 xl:col-span-3 row-start-1 xl:row-start-1 py-10 xl:py-0 border-t xl:border-t-0 border-gray-100">
                <div class="grid grid-cols-12 xl:block xl:h-full">
                    <div class="col-start-2 col-span-10 xl:h-full">
                        <div class="sticky top-10">
                            <h1 class="uppercase font-bold text-sm">Top Ten Most Popular Reading</h1>

                            <ul class="flex flex-wrap gap-2 mt-4">
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Relationships</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Data Science</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Self</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Docker</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Programming</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">PHP</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Laravel</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Linux Server Administration</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Machine Learning</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-xs transition ease-in-out duration-300 border border-gray-100 hover:bg-indigo-500 hover:border-transparent hover:text-white py-2 px-5 rounded">Figma Design</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

   <x-fe-footer>
   </x-fe-footer>


</body>

</html>
