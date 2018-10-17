@extends('layouts.default')
@section('content')
    <section class="jumbotron">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://i.ytimg.com/vi/SfLV8hD7zX4/maxresdefault.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://www.guillermocinta.com/wp-content/uploads/2018/05/So%C3%B1ar-con-perros.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://img.huffingtonpost.com/asset/5b7fdeab1900001d035028dc.jpeg?cache=sixpwrbb1s&ops=1910_1000" alt="Third slide">
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
    <section class="container">
        <h2 style="text-align:center">The Doggy Table</h2>
        <div class="table">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th class="text-center">Types of exercise</th>
                    <th class="text-center">Types of food</th>
                    <th class="text-center">Type of companion pets</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Walking</td>
                    <td>Organic Ground Meet</td>
                    <td>Dogs</td>
                </tr>
                <tr>
                    <td>Jogging</td>
                    <td>Chicken</td>
                    <td>Cats</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@stop