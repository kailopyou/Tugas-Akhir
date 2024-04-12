@extends('layouts.app')

@section('content')

<h2>Checkout</h2>

<h3>Shipping Information</h3>

@if (empty(Auth::user()->user_phone) && empty(Auth::user()->user_fullname) && empty(Auth::user()->user_state) && empty(Auth::user()->user_city) && empty(Auth::user()->user_zipcode) && empty(Auth::user()->user_address))
    {{-- Tampilkan tombol "Add Address" jika semua data alamat kosong --}}
    <button type="button" id="addAddressBtn" class="btn btn-primary mt-3">Add Address</button>

    {{-- Formulir untuk alamat --}}
    <form action="{{ route('orders.store') }}" method="post" id="checkoutForm" style="display: none;">
        @csrf

        <div class="form-group">
            <label for="shipping_fullname">Full Name</label>
            <input type="text" name="shipping_fullname" id="shipping_fullname" class="form-control" value="{{ old('shipping_fullname', Auth::user()->user_fullname ?? '') }}">
        </div>

        <div class="form-group">
            <label for="shipping_state">State</label>
            <input type="text" name="shipping_state" id="shipping_state" class="form-control" value="{{ old('shipping_state', Auth::user()->user_state ?? '') }}">
        </div>

        <div class="form-group">
            <label for="shipping_city">City</label>
            <input type="text" name="shipping_city" id="shipping_city" class="form-control" value="{{ old('shipping_city', Auth::user()->user_city ?? '') }}">
        </div>

        <div class="form-group">
            <label for="shipping_zipcode">Zip</label>
            <input type="number" name="shipping_zipcode" id="shipping_zipcode" class="form-control" value="{{ old('shipping_zipcode', Auth::user()->user_zipcode ?? '') }}">
        </div>

        <div class="form-group">
            <label for="shipping_address">Full Address</label>
            <input type="text" name="shipping_address" id="shipping_address" class="form-control" value="{{ old('shipping_address', Auth::user()->user_address ?? '') }}">
        </div>

        <div class="form-group">
            <label for="shipping_phone">Mobile</label>
            <input type="text" name="shipping_phone" id="shipping_phone" class="form-control" value="{{ old('shipping_phone', Auth::user()->user_phone ?? '') }}">
        </div>

        

        <h4>Payment option</h4>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" checked class="form-check-input" name="payment_method" value="cash_on_delivery">
                Cash on delivery
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="payment_method" value="paypal">
                Paypal
            </label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Place Order</button>
    </form>

@else

    <form action="{{ route('orders.store') }}" method="post">
        @csrf
        <div>
        {{-- Tampilkan informasi alamat jika data alamat sudah ada --}}
        <div>
            <p>Full Name: {{ Auth::user()->user_fullname }}</p>
            <input type="hidden" name="shipping_fullname" value="{{ Auth::user()->user_fullname }}">
        </div>
        <div>
            <p>State: {{ Auth::user()->user_state }}</p>
            <input type="hidden" name="shipping_state" value="{{ Auth::user()->user_state }}">
        </div>
        <div>
            <p>City: {{ Auth::user()->user_city }}</p>
            <input type="hidden" name="shipping_city" value="{{ Auth::user()->user_city }}">
        </div>
        <div>
            <p>Zip: {{ Auth::user()->user_zipcode }}</p>
            <input type="hidden" name="shipping_zipcode" value="{{ Auth::user()->user_zipcode }}">
        </div>
        <div>
            <p>Full Address: {{ Auth::user()->user_address }}</p>
            <input type="hidden" name="shipping_address" value="{{ Auth::user()->user_address }}">
        </div>
        <div>
            <p>Mobile: {{ Auth::user()->user_phone }}</p>
            <input type="hidden" name="shipping_phone" value="{{ Auth::user()->user_phone }}">
        </div>

        {{-- Input tersembunyi untuk menyimpan data alamat pada saat checkout --}}

        <h4>Payment option</h4>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" checked class="form-check-input" name="payment_method" value="cash_on_delivery">
                Cash on delivery
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="payment_method" value="paypal">
                Paypal
            </label>
        </div>

      <button type="submit" class="btn btn-primary mt-3">Place Order</button>
    </form>
@endif


@endsection



