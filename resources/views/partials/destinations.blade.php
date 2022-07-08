@extends('layout.main')

@section('content')
    <section class="hero-destination">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <form action="" class="search-group text-end">
                        <input type="text" class="input" placeholder="Search your destinations..">
                        <button type="submit" class="button-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="category">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="category-group">
                        <a href="#" class="text-decoration-none link-category active">Mountain</a>
                        <a href="#" class="text-decoration-none link-category">Waterfall</a>
                        <a href="#" class="text-decoration-none link-category">Grand Canyon</a>
                        <a href="#" class="text-decoration-none link-category">Hotel</a>
                        <a href="#" class="text-decoration-none link-category">Beach</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="other">
        <div class="container">
            <div class="row">
                <div class="col-12 text-end">
                    <p class="m-0">9 destination found.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="card-destination">
        <div class="container">
            <div class="row">
                <div class="col-4 mt-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card-content">
                            <div class="card-image">
                                <img src="assets/img/img-destination.jpg" class="img-fluid img-destination" alt="Image Example Destination">
                                <p class="fs-6 price">$200</p>
                            </div>
                            <div class="card-description">
                                <div class="time d-flex flex-row align-items-center mb-2">
                                    <i class="fa-regular fa-clock"></i> 
                                    <p class="fs-6 d-inline-block m-0 ms-2">3 Days Trip</p>
                                </div>
                                <h4 class="title-destination">Eiffel Tower in France</h4>
                                <div class="stars">
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star me-1"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="button">View More</a>
                </div>
            </div>
        </div>
    </section>
@endsection