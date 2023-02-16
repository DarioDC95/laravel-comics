<main>
    <section style="background-image: url({{Vite::asset('resources/img/images/jumbotron.jpg')}})" class="jumbotron">
        <div class="mycontainer">
            <div class="current-series">CURRENT SERIES</div>
        </div>
    </section>
    <section class="main-content">
        <div class="mycontainer">
            <div class="myrow">
                <div class="mycol-sm">
                    @include('partials.subPartials.cardMain')
                </div>
            </div>
            <div class="button">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <section class="icon-services">
        <div class="mycontainer">
            <div class="myrow">
                <div class="mycol-sm">
                    <div class="mycard">
                        <img src="value.url" alt="value.title">
                        <div>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>