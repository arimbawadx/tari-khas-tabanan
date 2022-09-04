@extends('user/layouts/main')
@section('title','Beranda')

@section('content')
<main>
    <div class="container my-3">
        <div class="row">
            <div class="col-lg-4">
                <a href="#" class="card mt-2 card-light text-dark text-decoration-none">
                    <div class="card-body">
                        <div style="width: 30px; padding:3px; margin-top: -20px; margin-left: -20px;" class="bg-danger text-center text-white">
                            <h5>1</h5>
                        </div>
                        <h4>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</h4>
                    </div>
                </a>

                <a href="#" class="card mt-2 card-light text-dark text-decoration-none">
                    <div class="card-body">
                        <div style="width: 30px; padding:3px; margin-top: -20px; margin-left: -20px;" class="bg-danger text-center text-white">
                            <h5>2</h5>
                        </div>
                        <h4>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</h4>
                    </div>
                </a>

                <a href="#" class="card mt-2 card-light text-dark text-decoration-none">
                    <div class="card-body">
                        <div style="width: 30px; padding:3px; margin-top: -20px; margin-left: -20px;" class="bg-danger text-center text-white">
                            <h5>3</h5>
                        </div>
                        <h4>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mt-2">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('lte/dist/img/photo1.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('lte/dist/img/photo2.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('lte/dist/img/photo3.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('lte/dist/img/photo4.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-4">
                <div href="#" class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h4>Tentang Kami</h4>
                    </div>
                    <div class="card-body text-center">
                        <p style="max-width: 15004px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, beatae dolorem iusto facilis reprehenderit quod rem dolorum officia eum natus placeat debitis quae aspernatur ducimus fugit voluptate aliquid, a provident. Suscipit odit modi ut quaerat nemo fugiat vel beatae fugit doloremque deleniti voluptatum maxime consequuntur ipsam dolorum, quas ex itaque! <span id="dots">...</span> <span id="more"> reiciendis praesentium, voluptatibus, eum dignissimos doloribus rerum blanditiis eligendi explicabo odit quisquam expedita deleniti repudiandae nesciunt possimus. Architecto qui sit praesentium hic quae excepturi et at quod quo obcaecati quibusdam, iusto accusantium, assumenda, laborum modi voluptatem suscipit! Recusandae numquam totam maiores fuga inventore dolorum odit consequatur architecto cupiditate! Ratione corporis nemo sequi repellat, a ex commodi atque? Eius, mollitia! Voluptatum repellendus facere reprehenderit qui nisi.</span></p><button class="btn btn-primary btn-sm" onclick="readMoreFunc()" id="myBtnReadStatus">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection