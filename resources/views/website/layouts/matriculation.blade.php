@extends('website.layouts.master')

@section('title')
    Articles
@endsection

@section('content')

        <!-- Single Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <ol class="breadcrumb justify-content-start mb-4">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Article</a></li>
                </ol>
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="mb-4">
                           <h3 style="font-weight: bold;">NATIONAL COLLEGE OF DEFENCE STUDIES HOLDS MAIDEN MATRICULATION CEREMONY</h3>
                        </div>
                        <div class="position-relative rounded overflow-hidden mb-3">
                            <img src="{{ asset('asset/img/images/matriculation/1DSC_2128.JPG') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">                                              
                                Article
                            </div>
                        </div>
                        
                        <p class="my-4" style="text-align: justify;">  The National College of Defence Studies (NCDS) held its maiden matriculation for Course 1-2023 on Friday 
                        16 February 2024 at Burma Hall in Burma Camp, Accra.
                        Gracing the occasion as Guest of Honour, the Chief of Staff (COS) at the Presidency, Hon Akosua Frema 
                        Osei-Opare congratulated the Matriculants on their selection for the programme and urged them to use the 
                        knowledge and skills acquired to enhance security and national development.
                        </p>
                        <p class="my-4" style="text-align: justify;">
                       The Commandant of the College, Major General Irvine Nii-Ayitey Aryeetey in his welcome address stated that 
                        Participants will be provided with the requisite skills and knowledge to enrich their critical thinking 
                        abilities toward future decision-making. He expressed his appreciation to the President of the Republic 
                        and the Commander-in-Chief of the Ghana Armed Forces, His Excellency Nana Addo Dankwa Akufo-Addo, the 
                        military high command and other well-meaning institutions for the support towards the commencement of the 
                        College’s maiden course.
                        </p>
                        <p class="my-4" style="text-align: justify;">
                       The Registrar of the College, Mr Baffour Ohene Asare-Bediako led the Participants to take the matriculation 
                        oath, while the Course President, Colonel Richard Mensah, on behalf of the 19 Matriculants signed the 
                        matriculation register.
                        NCDS was established on 31 May 2023 to offer strategic-level training for Senior Military Officers of 
                        the rank of Colonel or equivalent and Colleagues of comparable status from relevant MDAs. The College is 
                        mentored by the Ghana Institute of Management and Public Administration (GIMPA).
                        </p>
                        <div class="bg-light rounded my-4 p-4">
                            <h4 class="mb-4">Other Articles</h4>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center p-3 bg-white rounded">
                                        <img src="{{asset('asset/img/images/Matriculation/1DSC_2128.JPG')}}" class="img-fluid rounded" alt="" style="height: 100; width:100px">
                                        <div class="ms-3">
                                            <a href="{{route ('article')}}" class="h5 mb-2">National College of Defence Studies Conducts Maiden Experimental Research Studies in Eastern and North East Regions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="p-3 rounded border">
                                    <div class="input-group w-100 mx-auto d-flex mb-4">
                                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                        <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i class="fa fa-search text-white"></i></span>
                                    </div>
                                    <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center p-3 bg-white rounded">
                                        <img src="{{asset('asset/img/images/Matriculation/1DSC_2128.JPG')}}" class="img-fluid rounded" alt="" style="height: 100; width:100px">
                                        <div class="ms-3">
                                            <a href="{{route ('article')}}" class="h5 mb-2" style="text-align: justify; font-size: 14px;">National College of Defence Studies Conducts Maiden Experimental Research Studies in Eastern and North East Regions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <h4 class="my-4">Social Handles</h4>
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">13,977 Fans</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">21,798 Followers</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">7,999 Subscribers</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                                <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">19,764 Followers</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                                <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">31,999 Subscribers</span>
                                            </a>
                                            <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                                <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                                <span class="text-white">37,999 Subscribers</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->

@endsection
