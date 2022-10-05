
@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Finance</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="finance-page page-multi mt-5">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> 
            @endif
            <div class="content para">
                <p>Welcome to the Finance Department at <strong>Daimler Trucks Dandenong</strong>. We know that purchasing a vehicle outright is right out of reach for many people so finding a Finance solution that works for you can be just as important as finding the right truck.</p>
                <p>At Daimler Trucks Dandenong, we have a range of Finance options to suit every budget. Why not explore what we can do for you and take home the right truck, right now!</p>
                <p>Please feel free to use our online form to get a quick and accurate response on financing your next truck.</p>
                <p><strong>Our Finance Services Include:</strong></p>
                <ul>
                    <li>Corporate Lending</li>
                    <li>Novated Leases</li>
                    <li>Consumer Lending</li>
                    <li>Honda Extended Warranties</li>
                    <li>Loan Payment Protection</li>
                </ul>
                <p>Our Business Manager has a great knowledge of all the above products and is available to discuss your business and personal finance needs.</p>
            </div>
            @include('partials.location_details')
        </div>
    </div>
</section>
<a class="vtc-fixed-contact-us user-agent-ua-contact-us" href="/contact-us#finance_tab_id">Contact Us</a>
@endsection