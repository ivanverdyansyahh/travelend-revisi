@extends('layout.main')

@section('content')
    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-1">Eiffel Tower in Franch</h1>
                    <p class="fs-6">Mountain | 3 Days Trip</p>
                    <img src="assets/img/img-detail.jpg" class="img-fluid img-destination mt-5" alt="Image Destinations Example">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8">
                    <h4 class="fs-4 title">Description</h4>
                    <p class="fs-6 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla.</p>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla.</p>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio.</p>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque, purus sed a mi condimentum malesuada purus sollicitudin. Sit pellentesque aenean nullam volutpat sed. Nibh magna at elit eget lacus. Donec integer urna netus in quam neque. Massa aliquam auctor tempor, ornare natoque consequat ipsum odio. Id consequat dictumst faucibus blandit aliquam ipsum eu ornare nulla.</p>

                    <h4 class="fs-4 title mt-5">Give Feedback</h4>
                    <form action="">
                        <input type="text" class="input mb-2" placeholder="Name">
                        <input type="text" class="input mb-2" placeholder="Email">
                        <button type="submit" class="button">Submit Now</button>
                    </form>
                </div>
                <div class="col-4">
                    <div class="card-order">
                        <h4 class="fs-4">Start From</h4>
                        <h1 class="display-6 price">$200</h1>
                        <button type="button" class="button w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Ticket Now</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <p class="fs-6 text-center description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel mi quis posuere suscipit.</p>

                        <h5 class="fs-5 transaction">ticket FLEXI</h5>
                        <p class="fs-6 caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. At duis at duis.</p>
                        <h5 class="fs-5 transaction">ticket CLEAN</h5>
                        <p class="fs-6 caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. At duis at duis.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h4 class="fs-4 title">Other Destinations</h4>
                </div>
            </div>
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
        </div>
    </section>
@endsection