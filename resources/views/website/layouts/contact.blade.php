@extends('website.layouts.master')

@section('title')
    Contact
@endsection

@section('content')
<!-- Contact Us Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-light rounded p-5">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="">
                        <h1 class="mb-4">National College of Defence Studies (NCDS)</h1>
                        <p class="mb-4" style="text-align: justify;">For any information about NCDS, kindly fill up this contact form with accurate information. 
                        </p>
                        <div class="rounded">
                            <iframe class="rounded w-100" 
                            style="height: 425px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5.680492608127133!2d-0.1429854917243518!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="" class="mb-4">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <input type="text" class="w-100 form-control border-0 py-3" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="w-100 form-control border-0 py-3" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="w-100 form-control border-0 py-3" name="phone" placeholder="Enter Your Phone">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="w-100 form-control border-0 py-3" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="w-100 form-control border-0" rows="6" cols="10" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="w-100 btn btn-primary form-control py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="row g-4">
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">Burma Camp<br>Accra, Ghana.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0"> info@ncdsmil.edu.gh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0"> +233558546500</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-fax-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Fax</h4>
                                    <div class="d-flex">
                                    <p class="mb-0"> +233558546500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us End -->
@endsection
