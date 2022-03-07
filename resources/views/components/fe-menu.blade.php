<div class="grid grid-cols-12 h-16 border-b border-gray-700">
    <div class="col-start-2 col-span-2 flex items-center">
        <a href="/"><h1 class="text-3xl">MarioTech</h1></a>
    </div>

    <div class="col-start-5 col-span-7">
        <ul class="flex items-center justify-center h-full">
            @foreach($categories as $category)
            <li>
                <a href="/category/{{$category->id}}" class="text-sm transition ease-in-out duration-300 hover:text-indigo-500 px-4">{{$category->category_name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
