@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Roadside Assistance</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="roadside-assistance page-multi mt-5">
            <!-- <h1 class="page-title">Roadside Assistance</h1> -->
            <div class="specification-tabs">
                <div class="responsive custom-scrollbar">
                    <ul class="nav nav-pills">
                        <li class="tab-title" id="benz_desc">
                            <a href="#benz_tab" data-toggle="tab" aria-expanded="true" class="active">
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz</a>
                        </li>
                        <li class="tab-title" id="fuso_desc">
                            <a href="#fuso_tab" data-toggle="tab" aria-expanded="false">
                            Fuso</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="benz_tab">
                        <div class="content para">
                            <p>
                                <img src="{{ asset('images/roadside-header.jpeg') }}" alt="roadside">
                            </p>
                            <p>&nbsp;</p>
                            <h6 class="bold">Available 24 hours a day, 365 days a year.</h6>
                            <p>Mercedes-Benz Roadside Assistance is designed to provide you with assistance in the unlikely case of a breakdown in Australia.</p>
                            <h6 class="bold mt-4">How we can assist you.</h6>
                            <p>We have always placed great emphasis on providing premium quality After Sales care to our customers, care which truly matches the quality of our vehicles and enhances the enjoyment of owning a Mercedes-Benz.</p>
                            <p>Mercedes-Benz Roadside Assistance is designed to provide you with assistance in the unlikely case of a breakdown in Australia, 24 hours a day, 365 days a year. In the event of a breakdown, one call to the free hotline connects you with our Roadside Assistance Call Centre and will despatch a qualified Mercedes-Benz technician.</p>
                            <p>Equipped with state-of-the-art diagnostic and communications technology, we will identify the fault and get your vehicle back on the road, without delay.</p>
                            <p>For Emergency Roadside Assistance please call <a href="tel:1800 033 557">1800 033 557</a>.</p>
                        </div>            
                    </div>
                    <div class="tab-pane" id="fuso_tab">
                        <div class="content para">
                            <img class="mb-4" src="/images/fuso-service.jpeg"/>
                            <h2 class="mt-5 pt-3 mb-5">Elite Support</h2>
                            <img src="/images/elite-support.jpeg" class="mb-5"/>
                            <div style="text-align: justify;">
                                <p><br></p>
                                <p><strong>Daimler Trucks Dandenong</strong> received <strong>Daimler Elite Support Certification in 2020</strong>. They were the 10th Dealership in Australia to achieve this certification.</p>
                                <p>Elite Support is a joint initiative by Daimler Truck and Bus and the dealership network that is aimed at delivering a new level of service for customers of Mercedes - Benz, Freightliner and Fuso in Australia. It's built around the idea that professional operators work hard, and their service network should too.&nbsp;</p>
                                <p>Tired of being just another number in line instead of a valued customer? We ensure that as an Elite Dealer we are focused on what truly matters - your truck and your business. That means we don't do things the easy way, we do them the right way - every time.</p>
                                <p>Elite Support certification is available to Daimler Truck and Bus dealerships after demonstrating a commitment to a customer focused way of doing business and a continuous improvement culture within the dealership. They demonstrate this by implementing and complying with Elite Support criteria.</p>
                                <p>After participating in the inaugural Elite Support pilot boot camp in July 2016 the Dealership do an incredible job at implementing the criteria in order to maintain their Elite Support Certification.</p>
                                <p>A Commitment to Continuous Improvement - Being the best requires an ongoing commitment to quality that is rooted in the culture of our Dealership. That's why we have a Continuous Improvement Coordinator (CIC) to ensure we regularly meet and exceed the certification requirements. The CIC collaborates with peers across the Elite Support network to stay up to date in the latest best practices and conducts regularly scheduled Continuous Improvement events in order to meet and improve the standards of customer satisfaction.</p>
                                <p>Our customers benefit because they know that our Dealership is an Elite Support Certified location which will provide them with consistent, high-level quality service, every time.</p>
                                <p>As part of Elite Support, <strong>Daimler Trucks Dandenong</strong> can assist you in maximizing vehicle uptime with rapid diagnosis, quality work, consistent communication and optimized parts availability, as well as a premium in-dealership experience.</p>
                            </div>
                            <hr/>
                            <div class="benefits">
                                <h2 style="font-size: 26px;font-weight: 600;margin-bottom: 20px;">Benefits</h2>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <h3 class="mt-0" style="font-size: 22px;font-weight: 600;">Express Assessment</h3>
                                        <a class="btn btn-red-small mb-4" href="/service">Book a service</a>
                                        <p>
                                        All Elite Services Certified locations participate in Express Assessment which is a commitment to provide a preliminary diagnosis and communication to the customer within two hours of a truck arriving at the dealership. Express assessment is a process, not a program. It is intended to become part of the way our service department performs its day-to-day work. We commit to: communicate a preliminary diagnosis, check part availability and provide an estimate of cost and repair time.
                                        </p>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <h3 class="mt-0" style="font-size: 22px;font-weight: 600;">Maximising Uptime</h3>
                                        <a class="btn btn-red-small mb-4" href="/contact-us">Contact Us</a>
                                        <p>
                                        The ultimate goal of the Elite Services Network is maximising vehicle uptime. Every Elite Services dealership must be recertified annually to ensure you experience a consistent, higher standard with every visit across our network.
                                        </p>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <h3 class="mt-0" style="font-size: 22px;font-weight: 600;">Best-Trained Techs</h3>
                                        <a class="btn btn-red-small mb-4" href="/our-team">Meet our team</a>
                                        <p>
                                        Our technicians receive continual training from the experts. We focus on a solid understanding of all vehicle systems and have access to the latest tools to expedite repairs.
                                        </p>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <h3 style="font-size: 22px;font-weight: 600;">Continuous Improvement</h3>
                                        <a class="btn btn-red-small mb-4" href="/contact-us">Contact Us</a>
                                        <p>
                                        Every dealership earning the Elite Services certification must meet 137 specific criteria across 20 customer service areas. To maintain these high standards, dealerships employ a Continuous Improvement Coordinator.
                                        </p>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <h3 style="font-size: 22px;font-weight: 600;">Robust Parts Available</h3>
                                        <a class="btn btn-red-small mb-4" href="/parts">Parts Enquiry</a>
                                        <p>
                                        Through the combined experience of our network and close collaboration with our service team, we understand what parts we need on-hand to get you back on the road quickly. Focus Parts, our data-driven stocking program, ensures that the parts you need are never far away.
                                        </p>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <h3 style="font-size: 22px;font-weight: 600;">Exceptional Amenities</h3>
                                        <a class="btn btn-red-small mb-4" href="/service">See our services</a>
                                        <p>
                                        We know that when we service your vehicle, we're servicing your business. Elite Service Certified dealers believe in providing quality repairs and timely communication from a friendly and familiar team. Our facilities are designed to minimise downtime and provide a comfortable environment for drivers as we work to get your truck back on the road.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <iframe src="https://www.youtube.com/embed/gDNgR9OqWHA" style="height:600px;width:100%;border:0;" allowfullscreen=""></iframe>
                            <iframe src="https://www.youtube.com/embed/l2dexQJ3T3s" style="height:600px;width:100%;border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <hr/>
                    @include('partials.location_details') 
                </div>
            </div>
        </div>
    </div>
</section>

@endsection