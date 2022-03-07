<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<body class=" text-gray-600 font-normal">

    <header class="bg-indigo-50">
        <x-fe-menu :categories="$categories">
        </x-fe-menu>
    </header>

    <main>
        @foreach($post as $post)
        <div class="py-10">
            <div class="grid grid-cols-12">
                <div class="col-start-2 col-span-10 md:col-start-3 md:col-span-8 lg:col-start-4 lg:col-span-6">
                    <div class="flex items-center space-x-2">
                        <img class="rounded-full" src="https://i.pravatar.cc/30">

                        <div>
                            <a href="#" class="text-sm font-medium transition ease-in-out duration-300 hover:text-indigo-500">
                               {{$post->user->name}}
                            </a>

                             <div class="text-xs meta flex items-center gap-4">
                                <span class="relative">Published
                                    <time>{{ $post->created_at->diffForHumans() }}</time></span>
                                <span class="relative">{{$post->read}} min read</span>
                                <span class="relative">
                                    <a href="#" class="inline-block rounded-full px-2 py-1 transition ease-in-out duration-300 bg-gray-50 hover:bg-indigo-100"> Working </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <h4 class="title text-xl md:text-2xl leading-snug font-bold my-6">{{$post->title}}</h4>
                    <img class="shadow-sm rounded-xl w-full mb-10" src="https://news.cgtn.com/news/2020-11-02/Analysis-China-is-betting-on-science-and-tech-like-never-before-V68V871ula/img/871ca9ce8b9941088260b6ed4ced4eeb/871ca9ce8b9941088260b6ed4ced4eeb.jpeg">

                    <div class="leading-relaxed text-sm md:text-base lg:text-lg lg:leading-relaxed space-y-4 lg:space-y-8">
                        {!! $post->body !!}
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>

    <x-fe-footer>
    </x-fe-footer>

</body>

</html>
