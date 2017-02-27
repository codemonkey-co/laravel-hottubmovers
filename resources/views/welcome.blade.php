@extends('partials/master')

@section('content')
    <section class="hero">
        <div class="center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="hero-text">
                            <h1 class="text-white">Indianapolis</h1>
                            <h1>Hot Tub Movers</h1>
                            <h3>Fill out the form and we will contact you to schedule your Hot Tub Move!</h3>
                            <label class="hidden-md hidden-lg" for="mobile-form"><a class="btn btn-button">Contact Form</a></label>
                            <h1 class="text-white phone">@if($renter_info){{ $renter_info->phone_number_show }}@endif</h1>
                        </div>
                    </div>
                    <input type="checkbox" class="hide" id="mobile-form">
                    <div class="col-sm-12 col-md-4">
                        <div class="m-form-container">
                            <form action="/" method="post">
                                {{ csrf_field() }}
                                
                                <div class="field-container">
                                    <input type="text" name="name" id="name" required>
                                    <label for="name">Name</label>
                                </div>
                                <div class="field-container">
                                    <input type="text" name="phone" id="phone" required>
                                    <label for="phone">Phone Number</label>
                                </div>
                                <div class="field-container">
                                    <input type="text" name="email" id="email">
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="field-container">
                                    <select type="text" name="size" id="size" required>
                                        <option value=""></option>
                                        <option value="standard8x8">Standard 8x8</option>
                                        <option value="8x8bigger">Bigger than 8x8</option>
                                        <option value="swimspa">Swimspa</option>
                                    </select>
                                    <label for="size">Size</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field-container">
                                            <select type="text" name="base" id="base" required>
                                                <option value=""></option>
                                                <option value="deck">Deck</option>
                                                <option value="slab">Slab</option>
                                            </select>
                                            <label for="base">Base</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-container">
                                            <select type="text" name="fenced" id="fenced" required>
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <label for="email">Fenced In?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="hidden-md hidden-lg btn btn-cancel">Cancel</button>
                                </div>
                            </form>

                            <!-- <div class="alert alert-error">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="hidden-sm col-md-6">
                    <div class="content-center">
                        <div class="image"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="content-center border-left">
                        <div class="content-text">
                            <h1 class="content-head">Total Cost:</h1>
                            <h1>@if($renter_info){{ $renter_info->truck_fee }}@endif Truck Fee</h1>
                            <h1>@if($renter_info){{ $renter_info->per_hour }}@endif/Hour (@if($renter_info){{ $renter_info->min_men }}@endif)</h1>
                            <h1 class="content-head">@if($renter_info){{ $renter_info->min_hours }}@endif minimum.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer-center">
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Service Locations</h3>
                            <ul>
                                <li><a href="/">Indianapolis</a></li>
                                <li><a href="/">Fort Wayne</a></li>
                                <li><a href="/">Columbus</a></li>
                                <li><a href="/">Dayton</a></li>
                                <li><a href="/">Cincinnati</a></li>
                                <li><a href="/">Cleveland</a></li>
                                <li><a href="/">Merrillville</a></li>
                                <li><a href="/">Knoxville</a></li>
                                <li><a href="/">Louisville</a></li>
                                <li><a href="/">Charlotte</a></li>
                                <li><a href="/">Kokomo</a></li>
                                <li><a href="/">Nashville</a></li>
                                <li><a href="/">Atlanta</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop