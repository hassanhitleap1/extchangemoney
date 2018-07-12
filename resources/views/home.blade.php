@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">from</div>
                <div class="card-body">
                    <div class="input-group">
                        <select class="selectpicker" data-live-search="true">
                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        </select>                
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('site-image/paypal.jpg')}}" class="img-thumbnail" />
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('site-image/skrill.jpg')}}" class="img-thumbnail" />
                        </div>
                        <div class="col-md-6">
                                <img src="{{asset('site-image/neteller.jpg')}}" class="img-thumbnail" />
                        </div>
                        <div class="col-md-6">
                                <img src="{{asset('site-image/paysafecard.jpeg')}}" class="img-thumbnail" />
                        </div>
                        <div class="col-md-6">
                                <img src="{{asset('site-image/payoneer.jpg')}}" class="img-thumbnail" />
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">To</div>
                <div class="card-body">
                    <div class="input-group">
                            <select data-live-search="true" data-live-search-style="startsWith" class="selectpicker">
                                    <option value="4444">4444</option>
                                    <option value="Fedex">Fedex</option>
                                    <option value="Elite">Elite</option>
                                    <option value="Interp">Interp</option>
                                    <option value="Test">Test</option>
                            </select>
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('site-image/paypal.jpg')}}" class="img-thumbnail" />
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('site-image/skrill.jpg')}}" class="img-thumbnail" />
                            </div>
                            <div class="col-md-6">
                                    <img src="{{asset('site-image/neteller.jpg')}}" class="img-thumbnail" />
                            </div>
                            <div class="col-md-6">
                                    <img src="{{asset('site-image/paysafecard.jpeg')}}" class="img-thumbnail" />
                            </div>
                            <div class="col-md-6">
                                    <img src="{{asset('site-image/payoneer.jpg')}}" class="img-thumbnail" />
                            </div>
                                
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> </div>
                <div class="card-body">
                    <div class="input-group">
                        <button  class="btn btn-success btn-lg btn-block" > sbmint</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
