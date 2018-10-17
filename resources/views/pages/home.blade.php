@extends('layouts.default')
@section('content')
    <section class="jumbotron center-block">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.patriciamcconnell.com/theotherendoftheleash/wp-content/uploads/2018/04/willie-4-2-18.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://cdn.the-scientist.com/assets/articleNo/31203/iImg/3336/ac82744f-7d05-4a64-b4fb-97a87477a0eb-puppy.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://wwwcache.wral.com/asset/news/local/2018/03/20/17430873/355566-Drago1-DMID1-5e62kxxfp-640x360.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="col-sm-4 text-center>">
            <div class="card">
                <img class="card-img-top" style="width:150px;height:150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfgn9XNTWlqOgK9-eb3BI4h0l63ZH-9SQ4hoCuF91ft8a7vgMs" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dog Walking</h5>
                    <p class="card-text">Dog walking is the act of a person walking with a dog, typically from the dog's residence and then returning. Both owners and pets receive many benefits. It also provides exercise and companionship for the walker.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center>">
            <div class="card">
                <img class="card-img-top" style="width:150px;height:150px" src="https://cdn3.iconfinder.com/data/icons/nature-tab-bar/512/dog_head-512.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dog Food</h5>
                    <p class="card-text">What you feed your pet is the fuel and energy they need for not only survival, but their overall health and well-being</p><br><br>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center>">
            <div class="card">
                <img class="card-img-top" style="width:150px;height:150px" src="https://png.pngtree.com/svg/20170106/dog_1160643.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Companion Dog</h5>
                    <p class="card-text">A Companion Dog is a calm, well-behaved and obedient therapy dog that facilitates therapeutic healing while working to help rehabilitate the mind, body and soul. </p><br>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </section>
@stop