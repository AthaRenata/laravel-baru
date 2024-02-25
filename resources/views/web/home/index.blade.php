<x-web.layout>

    <header id="header">
        <div class="w-100 mt-5 d-flex justify-content-end align-items-center bg-banner" style="background-image: url('{{asset('assets/images/bg-banner.png')}}'); height:90vh;">
            <div class="col-md-6">
                <div class="container">
                    <div>
                        <h4 class="text-green">CHECK EARLIER, PREVENT EARLIER</h4>
                        <h1 class="font-nunito" style="line-height:79px; font-size:64px">Take care of your body and it will take care of you</h1>
                        <p class="text-grey">Temukan dokter spesialis sesuai dengan kebutuhan anda kapanpun</p>
                    </div>
                    <div>
                        <button class="btn btn-primary">Do health check right now</button>
                        <button class="btn btn-secondary">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5 text-center">
            <a href="#content" class="link-underline link-underline-opacity-0">
                <img src="{{asset('assets/images/mouse.png')}}" alt="">
                <p class="text-body-secondary">Scroll down</p>
            </a>
        </div>
    </header>
    
    <main id="content" class="container d-flex align-items-center" style="min-height: 100vh">
        <div class="my-5 row row-cols-1 row-cols-md-3 g-5">
            <div class="col">
                <div class="card text-center h-100 border-0">
                    <img src="{{asset('assets/images/img1.png')}}" class="card-img-top" alt="image" width="50" height="300px">
                    <div class="card-body">
                        <h5 class="card-title font-nunito">Pelayanan mudah, dengan aplikasi</h5>
                        <p class="card-text text-grey">Cari dan temukan kebutuhan medis Anda dengan tepat.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100 border-0">
                    <img src="{{asset('assets/images/img2.png')}}" class="card-img-top" alt="image" width="50" height="300px">
                    <div class="card-body">
                        <h5 class="card-title font-nunito">Konsultasi dengan Dokter spesialis</h5>
                        <p class="card-text text-grey">Temukan dokter spesialis sesuai dengan kebutuhan anda kapanpun</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100  border-0">
                    <img src="{{asset('assets/images/img3.png')}}" class="card-img-top" alt="image" width="50" height="300px">
                    <div class="card-body">
                        <h5 class="card-title font-nunito">Promo khusus untuk Semua tes Covid-19</h5>
                        <p class="card-text text-grey">Dapatkan penawaran menarik untuk Anda yang membutuhkan tes covid-19</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    </x-web.layout>
    