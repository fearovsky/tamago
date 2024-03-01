@if (!empty($items))
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="splide list-card-carousel">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($items as $item)
                        <li class="splide__slide">
                            @include('partials.item.item-card', ['item' => $item])
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
