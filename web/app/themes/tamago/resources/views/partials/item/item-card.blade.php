<div class="rounded overflow-hidden flex flex-col">
    <div class="relative">
        <a href="{!! $blockContent['permalink'] !!}">
            {!! $blockContent['thumbnail'] !!}
            <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
        </a>
    </div>
    <div class="px-6 py-4 mb-auto">
        <a href="{!! $blockContent['permalink'] !!}"
            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{!! $blockContent['title'] !!}</a>
        <p class="text-gray-500 text-sm">
            {{ $blockContent['excerpt'] }}
        </p>

        <a href="{!! $blockContent['permalink'] !!}"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
            {{ __('Read more', 'prefix') }}
        </a>
    </div>
    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
            <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                        </path>
                    </g>
                </g>
            </svg>
            <span class="ml-1">{{ $blockContent['date'] }}</span>
        </span>
    </div>
</div>
