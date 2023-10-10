<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <base href="/">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    @yield("before_css")
    @include("user.layouts.head")
    @yield("after_css")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</head>

<body onload="initialize()">
@include("user.layouts.hearder")

<!-- content begin -->
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="images/background/6.jpg" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Vehicle Fleet</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-car-details">
        @if(session()->has("success"))
            <div class="alert alert-success" style="text-align: center" role="alert">
                {{session("success")}}
            </div>
        @endif
        <div class="container">
            <div class="row g-5" >
                <div class="col-lg-6">
                    <div id="slider-carousel" class="owl-carousel">
                        <div class="item">
                            <img src="{{$product->thumbnail}}" alt="">
                        </div>
                        <div class="item">
                            <img src="images/misc/car-2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/cars-alt/mini-cooper.png" alt="">
                        </div>
                        <div class="item">
                            <img src="images/cars-alt/bmw-m5.png" alt="">
                        </div>
                    </div>
{{--                    giấy tờ thuê xe--}}
                    <div class="giay_to_xe">
                        <div class="giay_to_xe-div1">
                            <span class="car_rental_paper">Car rental documents
                                <svg style="margin-bottom: 7px" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 17H12.01" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                            <div class="paper_passport">
                                <span style="margin-bottom: 15px">
                                    <img style="width: 25px; margin-right: 15px" loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/gplx_cccd.png">
                                    Driver's license and citizen identification card with chip.
                                </span>
                                <span>
                                    <img style="width: 25px; margin-right: 15px" loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/gplx_passport.png">
                                    Passport.
                                </span>
                            </div>
                        </div>
{{--                        heading 2--}}
                        <div style="margin-top: 50px" >
                            <span class="car_rental_paper" >Collateral
                                <svg style="margin-bottom: 7px" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 17H12.01" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                            <div class="paper_passport">
                                <span style="color: black">$1,000 (cash/transfer to vehicle owner upon receipt) or Motorcycle (with original driver's license) worth $1,000</span>
                            </div>
                        </div>


                        <div style="margin-top: 50px">
                            <span class="car_rental_paper">Rules</span>
                            <div>
                                <ul>
                                    <li>Use the vehicle for its intended purpose.</li>
                                    <li>Do not use the rental car for illegal or unlawful purposes.</li>
                                    <li>Do not use a rented car to pledge or mortgage.</li>
                                    <li>Do not smoke, chew gum, or litter in the car.</li>
                                    <li>Do not carry prohibited goods that are flammable or explosive.</li>
                                    <li>Do not carry fruits or strong-smelling foods in the vehicle.</li>
                                    <li> When returning the vehicle, if the vehicle is dirty or there is an odor in the vehicle, please clean the vehicle or pay an additional fee for vehicle cleaning.</li>
                                    Sincerely thank you, wish you have wonderful trips!
                                </ul>

                            </div>
                        </div>


{{--                        map--}}
                        <div style="margin-top: 30px">
                            <span class="car_rental_paper" >Vehicle location</span>
                            <iframe style="margin-top: 10px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096949073247!2d105.77971427479608!3d21.028806487777867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32b842a37%3A0xe91a56573e7f9a11!2zOGEgVMO0biBUaOG6pXQgVGh1eeG6v3QsIE3hu7kgxJDDrG5oLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSAxMDAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1696752723180!5m2!1sen!2s" width="600" height="370" style="border:0;"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
{{--                        end map--}}
                    </div>
                </div>


{{--                end--}}
                <div class="col-lg-3">
                    <form  action="{{url("/add-to-cart",["product"=>$product->id])}}" method="get">

                        <h3>{{$product->name}}</h3>
                        <p>{{$product->description}}</p>
                    <div class="spacer-10"></div>

                    <h4>Specifications</h4>
                    <div class="de-spec">
                        <div class="d-row">
                            <span class="d-title">Body</span>
                            <spam class="d-value">Sedan</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Seat</span>
                            <spam class="d-value">{{$product -> seat}} seats</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Door</span>
                            <spam class="d-value">{{$product -> door}} doors</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Luggage</span>
                            <spam class="d-value">190</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Fuel Type</span>
                            <spam class="d-value">{{$product -> fuel_style}}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Engine</span>
                            <spam class="d-value">3200</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Year</span>
                            <spam class="d-value">{{$product -> car_year}}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Mileage</span>
                            <spam class="d-value">{{$product -> mileage}}</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Transmission</span>
                            <spam class="d-value">Automatic</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Drive</span>
                            <spam class="d-value">4WD</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Fuel Economy</span>
                            <spam class="d-value">18.5</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Exterior Color</span>
                            <spam class="d-value">{{$product -> color}} Metalic</spam>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Interior Color</span>
                            <spam class="d-value">{{$product -> color}}</spam>
                        </div>

                    </div>

                    <div class="spacer-single"></div>

                    <h4>Features</h4>
                    <ul class="ul-style-2">
                        <li>Bluetooth</li>
                        <li>Multimedia Player</li>
                        <li>Central Lock</li>
                        <li>Sunroof</li>
                    </ul>
                    </form>
                </div>


                <div class="col-lg-3">
                    <form  action="{{url("/add-to-cart",["product"=>$product->id])}}" method="get">
                    <div class="de-price text-center">
                        Price/Date
                        <h3>${{$product->price}}</h3>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="de-box mb25">


{{--                        </form>--}}
                    <form name="contactForm" id='contact_form' method="post">

                            <h4 style="text-align: center">Booking this car</h4>
                            <div class="spacer-20"></div>
                            <div class="row">


                                <div class="col-lg-12 mb20">
                                    <h5>Pick Up Date & Time</h5>
                                    <div class="date-time-field">
                                        <input type="date" name="start_date" id="start_date" required value="">
                                        <select name="Pick Up Time" id="pickup-time">
                                            <option selected disabled value="Select time">Time</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb20">
                                    <h5>Return Date & Time</h5>
                                    <div class="date-time-field">
                                        <input type="date" name="end_date" id="end_date" required value="">
                                        <select name="Collection Time" id="collection-time">
                                            <option selected disabled value="Select time">Time</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <form action="{{url("/add-to-cart",["product"=>$product->id])}}" method="get">
                                <a href="{{url("calculate")}}" style="margin-bottom: 20px" class="btn-main btn-fullwidth">Rent Now</a>
{{--                            <a href="{{url("cart")}}"  class="btn-main btn-fullwidth">Add To Cart</a>--}}
                                <button type="submit" class="btn-main btn-fullwidth">ADD TO CART</button>
                            </form>

                        </form>

                            <div class="clearfix"></div>

                    </div>
                    <div class="de-box">
                        <h4>Share</h4>
                        <div class="de-color-icons">
                            <span><i class="fa-brands fa-twitter"></i></span>
                            <span><i class="fa-brands fa-facebook-f"></i></span>
                            <span><i class="fa-brands fa-reddit"></i></span>
                            <span><i class="fa-brands fa-linkedin-in"></i></span>
                            <span><i class="fa-brands fa-pinterest"></i></span>
                            <span><i class="fa-brands fa-stumbleupon"></i></span>
                            <span><i class="fa-brands fa-delicious"></i></span>
                            <span><i class="fa-solid fa-envelope"></i></span>
                        </div>
                    </div>
                    </form>
                </div>


            </div>
        </div>

    </section>


{{--    một số car--}}
    <section id="section-cars">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Our Vehicle Fleet</h2>
                    <p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for unforgettable journeys.</p>
                    <div class="spacer-20"></div>
                </div>

                <div id="items-carousel" class="owl-carousel wow fadeIn">

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{$product->thumbnail}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>{{$product->name}}</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>74</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">SUV</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>${{$product->price}}</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/product-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>BMW M2</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>36</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">Sedan</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$384</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/product-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Ferarri Enzo</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>85</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">Exotic Car</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$167</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/product-8.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Ford Raptor</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>59</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">Pickup Truck</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$847</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/product-12.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Mini Cooper</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>19</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">Hatchback</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$238</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images/cars/product-10.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>VW Polo</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>79</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                        <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                        <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                        <span class="d-atr"><img src="images/icons/4.svg" alt="">Hatchback</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$106</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
{{--    {end--}}
</div>
<!-- resources/views/date-form.blade.php -->


@include("user.layouts.footer")
@yield("before_js")
@include("user.layouts.scripts")
@yield("after_js")
<!-- content close -->
</body>
<style>
    .giay_to_xe{
        margin: 80px 0;
    }
    .car_rental_paper {
        color: #0b0b0b;
        font-size: 20px;
        font-weight: 600;
    }

    .paper_passport {
        margin-top: 15px;
        display: grid;
        border: 1px solid whitesmoke;
        padding: 10px 20px;
        border-radius: 8px;
        border-left:8px solid #1ecb15;
        background-color: #d2e8d1;
    }
    .paper_passport span {
        color: #333;
        font-size: 16px;
    }
</style>
</html>


<form method="POST" action="{{ route('save-dates') }}">
    @csrf

    <div>
        <label for="start_datetime">Ngày và giờ bắt đầu:</label>
        <input type="datetime-local" id="start_datetime" name="start_datetime">
    </div>

    <div>
        <label for="end_datetime">Ngày và giờ kết thúc:</label>
        <input type="datetime-local" id="end_datetime" name="end_datetime">
    </div>

    <button type="submit">Lưu</button>
</form>
