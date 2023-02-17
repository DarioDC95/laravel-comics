<main class="main-singleComic">
    <section class="jumbotron-part">
        <div class="jumbotron">
            <div class="mycontainer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="current-series">
                                <img src="{{ $singleComic['thumb'] }}" alt="{{ $singleComic['title'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-strap"></div>
    </section>
    <section class="description-top">
        <div class="mycontainer">
            <div class="container-fluid">
                <div class="row gx-5">
                    <div class="col-8">
                        <div class="mycard">
                            <h2 class="text-uppercase">{{ $singleComic['title'] }}</h2>
                            <div class="d-flex w-100">
                                <div class="price d-flex justify-content-between">
                                    <p class="m-0 fw-bold">U.S. Price: <span>{{ $singleComic['price'] }}</span></p>
                                    <p class="m-0">AVAILABLE</p>
                                </div>
                                <div class="availability fw-bold">
                                    Check Availability
                                </div>
                            </div>
                            <div>
                                <p>{{ $singleComic['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mycard advertisement">
                            <div class="text-end fw-bold">ADVERTISEMENT</div>
                            <img src="{{ Vite::asset('resources/img/images/adv.jpg') }}" alt="Pubblicità">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>