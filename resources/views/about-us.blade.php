@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="about-page page-multi mt-5">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> 
            @endif
            <div class="row">
                <div class="col-lg-12 col-md-12 para">
                    <div class="content">
                        <p><strong>Daimler Trucks Dandenong<strong>, owned by Velocity Truck Vehicle Group, operating as Velocity Truck Centres.</strong></strong></p>
                        <p><strong>Daimler Trucks Dandenong's</strong> friendly staff have proudly been selling and servicing new and used trucks in Dandenong and the surrounding region of Victoria for over <strong>60 years.</strong></p>
                        <p>Our spacious showroom and large display areas allow you to casually browse the great range of vehicles we have available.</p>
                        <p>Through the dealership's long-standing association with Daimler Truck and Bus Australia we are able to offer you specialists in the Mercedes-Benz, Freightliner and FUSO products. Our knowledge does not stop there we also offer assistance across many other brands.</p>
                        <p>We look forward to assisting you with all your Truck needs.</p>
                        <p>Daimler Trucks Dandenong at a glance:</p>
                        <p><em><strong>We support our local community, charities and sporting clubs.</strong></em></p>
                        <p><em><strong>Over the years we have become a multi award winning dealer with recognition for excellence in</strong></em></p>
                        <ul>
                            <li><em>Sales</em></li>
                            <li><em>Parts</em></li>
                            <li><em>Service&nbsp;</em></li>
                            <li><em>Customer satisfaction</em></li>
                        </ul>
                        <p>We enhance your buying experience by providing expert after-sales service. The dealership is located close to restaurants, hotels and public transport for your convenience. Our service team understand the importance of your vehicle and want you to be comfortable with the knowledge that your truck is being treated with <strong>care and professionalism.</strong> In our well-equipped workshop and service area we endeavour to ensure that your down time is minimal. &nbsp;</p>
                        <p>Our team is dedicated to providing you with the best of care at all times, so whether you are buying, selling, leasing or having your vehicle serviced come and experience the difference at Daimler Trucks Dandenong.</p>
                        <p><strong>Velocity Truck Centres</strong> (formerly known as Adtrans National Trucks) has served the truck industry for many years. With more than {{ $emp_count }} employees spread across 5 states, we can take care of your trucking needs.</p>
                        <p>Our experienced workforce including many staff who have over 20 years of experience and are a testament to our ongoing commitment and passion for what we do. The employees are the heart and soul of our brand and we love sharing our knowledge and skills with our customers.</p>
                        <p>We are a division of the global brand Velocity Vehicle Group.</p>
                        <p><strong>WHY CHOOSE VELOCITY TRUCK CENTRES?</strong></p>
                        <p>What VTC offers is a wide selection of brands for your next commercial vehicle. Our team aren't just salespeople, we have a wealth of experience to help you purchase the right new or used vehicle. Whether it is a heavy truck, light commercial vehicle or even a bus, our dealer network can guide your decision process. Partnering with Velocity Truck Centres will assist you with the vehicle solution for your business needs.</p>
                        <p>With parts and service teams located all over Australia, we are never far from you. Our technicians and diagnostic teams are happy to provide maintenance and advice to optimise the performance of your vehicle. The parts network can source a range of parts from our large supply network from rubber mats to transmissions we can locate it.</p>
                        <p>At every dealership, there is a Business and Finance Manager who can arrange the finance for your purchase. We offer competitive rates with an on-site representative making sure you're 100% confident in your decision.</p>
                        <p>The VTC teams are complemented with a strong administration group who work tirelessly to support vehicle sales, supplying parts, organising registration and coordinating servicing. Our team are here to make the process seamless, from first contact to delivery.</p>
                        <p>The Velocity Truck Centres Management Team have decades of collective experience in trucks and the transport industry. Please consider us for your next purchase.</p>
                        </div>
                    <hr/>
                    @include('partials.location_details')
                </div>
            </div>
        </div>
    </div>
</section>

@endsection