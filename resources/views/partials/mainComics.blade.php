<main class="main-comics">
    <section class="jumbotron">
        <div class="mycontainer">
            <div class="current-series">CURRENT SERIES</div>
        </div>
    </section>
    <section class="main-content">
        <div class="mycontainer">
            <div class="myrow">
                @foreach ($comics as $key => $item)   
                    <div class="mycol-sm">
                        <a class="underline-none" href="{{ route('single_comic', ['index' => $key]) }}">
                            @include('partials.subPartials.cardMainComics')
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="button">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <section class="icon-services">
        <div class="mycontainer">
            <div class="myrow">
                @foreach ($icons as $item)
                    <div class="mycol-sm">
                        <div class="mycard">
                            <img src="{{ Vite::asset($item['url']) }}" alt="{{ $item['title'] }}">
                            <div>
                                <span>{{ $item['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>