@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!--Tranding product-->
        <section class="pt-60 pb-30 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section-title">
                            <h2>Tranding Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h4>
                                    <a href="{{ route('product.create') }}">
                                        <i class="fa-solid fa-plus"></i>
                                        <span>Add Produt/Service</span>
                                    </a>
                                </h4>

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                            <img class="card-img-top" src="assets/image/1.png" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Name: Hisens</h3>
                                <p class="card-text">Energy - Energi for the storsge of yu food stuff</p>
                                <p class="current_price">Price: 250,000FCFA</p>
                                <a href="#" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                            <img class="card-img-top" src="assets/image/3.png" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Name: Hisens</h3>
                                <p class="card-text">500GB, 8G RAM, Intel i5 quad core</p>
                                <p class="current_price">Price: 300,000FCFA</p>
                                <a href="#" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                            <img class="card-img-top" src="assets/image/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Name: DELL 500</h3>
                                <p class="card-text">500GB, 8G RAM, Intel i5 quad core</p>
                                <p class="current_price">Price: 280,000FCFA</p>
                                <a href="#" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($products as $product)
                        <div class="card shadow p-3 mb-5 bg-white rounded ml-5 -mt-px" style="width: 18rem;">
                            <img class="card-img-top" src="{{ url('public/images/' . $product->photo) }}"
                                alt="product item">
                            <div class="card-body">
                                <h3 class="card-title">Name: {{ $product->name }}</h3>
                                <p class="current_price">Price: {{ $product->price }}</p>
                                <p class="current_price">Details: {{ $product->description }}</p>
                                <a href="#" class="btn btn-primary">More</a>
                            </div>
                        </div>
                        {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="single-tranding">
                                <a href="product-details.html">
                                    <div class="tranding-pro-img">
                                        <img class="card-img-top" src="{{ url('public/assets/' . $product->photo) }}"
                                            alt="">
                                    </div>
                                    <div class="tranding-pro-title">
                                        <h3>Name: {{ $product->name }}</h3>
                                    </div>
                                    <div class="tranding-pro-price">
                                        <div class="price_box">
                                            <span class="current_price">Price: {{ $product->price }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                    @endforeach
                </div>
            </div>
        </section>
        <!--Tranding product-->

        <!--Features area-->
        <section class="features-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section-title">
                            <h2>Awesome Features</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="single-features">
                            <img src="assets/img/icon/1.png" alt="">
                            <h3>Impressive Distance</h3>
                            <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum
                                voluptatibus dignissimos</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="single-features">
                            <img src="assets/img/icon/2.png" alt="">
                            <h3>100% self safe</h3>
                            <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum
                                voluptatibus dignissimos</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="single-features">
                            <img src="assets/img/icon/3.png" alt="">
                            <h3>Awesome Support</h3>
                            <p>consectetur adipisicing elit. Ut praesentium earum, blanditiis, voluptatem repellendus rerum
                                voluptatibus dignissimos</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <a href="#"><img src="assets/img/product/2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Features area-->

        <!--footer area start-->
        <footer class="footer_widgets">
            <div class="footer_top" style="height: 60vh;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widgets_container widget_menu">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Privacy Policy</a></li>
                                        <li><a href="services.html">Terms & Conditions</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widgets_container widget_menu">
                                <h3>My Account</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="faq.html">International Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container newsletter">
                                <h3>Follow Us</h3>
                                <div class="footer_social_link">
                                    <ul>
                                        <li><a class="facebook" href="#" title="Facebook"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#" title="Twitter"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a class="instagram" href="#" title="instagram"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li><a class="linkedin" href="#" title="linkedin"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                        <li><a class="rss" href="#" title="rss"><i
                                                    class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                                <div class="subscribe_form">
                                    <h3>Join Our Newsletter Now</h3>
                                    <form id="mc-form" class="mc-form footer-newsletter">
                                        <input id="mc-email" type="email" autocomplete="off"
                                            placeholder="Your email address..." />
                                        <button id="mc-submit">Subscribe!</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div><!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
@endsection
