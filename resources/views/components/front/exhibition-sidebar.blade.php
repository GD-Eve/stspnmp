@php
    $arrays = [
        [
            'title' => '常設展',
            'pages' => [['route' => 'divice1', 'name' => '第一展廳'], ['route' => 'divice2', 'name' => '第二展廳'], ['route' => '/divice', 'name' => '第三展廳'], ['route' => '/divice', 'name' => '兒童廳'], ['route' => '/divice', 'name' => '博物館密室']],
        ],
        [
            'title' => '特展',
            'pages' => [['route' => '/device', 'name' => '當期特展'], ['route' => '/divice', 'name' => '歷屆特展']],
        ],
        [
            'title' => '藝術共賞',
            'pages' => [['route' => '/device', 'name' => '裝置藝術'], ['route' => '/divice', 'name' => '公共藝術']],
        ],
    ];
    front.fare
    dd(\Illuminate\Support\Facades\Route::currentRouteName());
@endphp


<div class="hidden lg:block  lg:w-[25%] xl:w-[15%] bg-[#f3f3f3] relative leftanimation opacity-0 -translate-x-28">
    @foreach ($arrays as $array)
        <div>
            <a href="/" title="{{ $array['title'] }}" class="block relative">
                <div class=" pt-11 px-8">
                    <div class="flex items-center space-x-2 relative z-30">
                        <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12">
                            <path d="M140.001-140.001v-679.998h679.998v679.998H140.001Z" />
                        </svg>
                        <p class="py-4  text-lg ">{{ $array['title'] }}</p>
                    </div>
                </div>
                <div class="absolute  bottom-0 left-0 border-black border-b-4 w-[95%] z-10"></div>
                <div class=" absolute top-10 left-0 bg-[#ffea00] w-[92%] h-[75%] "></div>
            </a>
            <div class="text-base">
                @foreach ($array['pages'] as $page)
                    <div class="pt-6 px-12">
                        <a href="{{ $page['route'] }}" class="inline-block relative group " title="{{ $page['name'] }}">
                            <div>
                                <div class="relative ">{{ $page['name'] }}</div>
                                <div
                                    class="absolute w-0 h-1 bg-yellow-300 bottom-0 left-0 -translate-y-[110%] group-hover:w-full group-hover:transition-all">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
