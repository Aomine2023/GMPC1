@extends('backend.investors_layouts.master')
@section('title')
PROFILE
@endsection
@section('content')
<style>
    /* Card-style form */
    .credit-card-box {
        background: #e6f4ea; /* light green */
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .credit-card-box:hover {
        transform: scale(1.01);
    }

    .summary-card {
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .summary-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    .summary-card h6 {
        font-weight: 600;
    }

    .summary-card i {
        font-size: 1.2rem;
        cursor: pointer;
    }

    .summary-card .text-danger:hover,
    .summary-card .text-success:hover {
        opacity: 0.8;
    }

    .form-check-label {
        font-weight: 500;
    }
</style>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

<div class="container-fluid">
    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="{{ asset('assets/img/tgr.jpg') }}" alt="" class="profile-wid-img" />
        </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src="{{ asset($user->image ?? 'upload/no_image.jpg') }}" alt="user-img" class="img-thumbnail rounded-circle" />
                    
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="mb-1 text-white">@if(Auth::guard('investor')->check())
                        {{ Auth::guard('investor')->user()->name }}
                    @else
                        Guest
                    @endif</h3>
                    <p class="text-white-75">Investor</p>
                    <div class="gap-1 hstack text-white-50">
                        <div class="me-2">
                            <i class="align-middle ri-map-pin-user-line me-1 text-white-75 fs-16"></i>
                            {{ $user->city ?? 'City' }}, {{ $user->country ?? 'Country' }}
                        </div>
                       
                    </div>
                    
                </div>
            </div>

        </div>
        <!--end row-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex">
                    <!-- Nav tabs -->
                    <ul class="gap-2 nav nav-pills animation-nav profile-nav gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="pages-profile.html#overview-tab" role="tab">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="pages-profile.html#activities" role="tab">
                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="pages-profile.html#projects" role="tab">
                                <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Payment Information</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="pages-profile.html#documents" role="tab">
                                <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Notifications</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="pt-4 tab-content text-muted">
                    
                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                       <div class="card">
                        <div class="row">
                            <div class="col-xxl-3">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <h5 class="mb-3 card-title">Info</h5>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Full Name :</th>
                                                        <td class="text-muted">{{ $user->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Mobile :</th>
                                                        <td class="text-muted">{{ $user->phone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">E-mail :</th>
                                                        <td class="text-muted">{{ $user->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Location :</th>
                                                        <td class="text-muted">
                                                            {{ $user->city ?? '-' }}, {{ $user->country ?? '-' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Joining Date</th>
                                                        <td class="text-muted">
                                                            {{ $user->created_at->format('d M Y') }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div><!-- end card -->

                            </div>
                            <!--end col-->
                            <div class="col-xxl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-3 card-title">We are TGR Africa</h5>
                                        
                                        <p>We believe the resources of the diaspora need to be mobilised efficiently towards areas of high productivity that can support African Development. We believe it’s also important for diaspora resources to be focused on a particular country because if we are successful in transforming that country, it could serve as a beacon of hope to other African Nations
                                            Our mission is to make Ghana the focus of diaspora engagement in Africa because we believe Ghana presents favourable economic, social and political conditions necessary for significant transformational development. The hope is for Ghana to serve as the blueprint for the rest of African NaBons to follow.</p>
                                        <div class="row">
                                            <div class="col-6 col-md-5">
                                                <div class="mt-4 d-flex">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-user-2-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden flex-grow-1">
                                                        <p class="mb-1">CO Founders:</p>
                                                        <h6 class="mb-0 text-truncate">Lordy Emmen & Agyegewe Chanayireh</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-md-3">
                                                <div class="mt-4 d-flex">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-global-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="overflow-hidden flex-grow-1">
                                                        <p class="mb-1">Website :</p>
                                                        <a href="https://tgrafrica.com" class="fw-semibold">https://tgrafrica.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div><!-- end card -->

                               

                            </div>
                            <!--end col-->
                        </div>
                       </div>
                        <!--end row-->
                    </div>
                    
                    <div class="tab-pane fade" id="activities" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <ul class="rounded nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="pages-profile-settings.html#personalDetails" role="tab">
                                            <i class="fas fa-home"></i> Personal Details
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="pages-profile-settings.html#changePassword" role="tab">
                                            <i class="far fa-user"></i> Change Password
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="p-4 card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                      <div class="card">
                                          <form action="{{ route('investor.update.profile') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 col-lg-12">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                                                </div>
                                                <div class="mb-3 col-lg-6">
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <select class="form-control" name="gender" id="gender">
                                                        <option value="" >Select Gender</option>
                                                        <option value="MALE" {{ $user->gender == 'MALE' ? 'selected' : '' }}>MALE</option>
                                                        <option value="FEMALE" {{ $user->gender == 'FEMALE' ? 'selected' : '' }}>FEMALE</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-lg-6">
                                                    <label for="dob" class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control" name="dob" id="dob" value="{{ $user->dob }}">
                                                </div>
                                                <div class="mb-3 col-lg-6">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $user->phone }}"placeholder="+233546332291">
                                                </div>
                                                <div class="mb-3 col-lg-6">
                                                    <label for="email" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" >
                                                </div>
                                                <div class="mb-3 col-lg-4">
                                                    <label for="city" class="form-label">City</label>
                                                    <input type="text" class="form-control" name="city" id="city" value="{{ $user->city }}">
                                                </div>
                                                <div class="mb-3 col-lg-4">
                                                    <label for="country" class="form-label">Country</label>
                                                    <input type="text" class="form-control" name="country" id="country" value="{{ $user->country }}">
                                                </div>
                                                <div class="mb-3 col-lg-4">
                                                    <label for="zipcode" class="form-label">Zip Code</label>
                                                    <input type="text" class="form-control" name="zipcode" id="zipcode" value="{{ $user->zipcode }}">
                                                </div>
                                                <div class="mb-3 col-lg-12">
                                                    <label for="address" class="form-label">Address</label>
                                                    <textarea class="form-control" name="address" id="address" rows="3">{{ $user->address }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="profile_image" class="form-label">Upload Profile Image</label>
                                                    <input type="file" class="form-control" name="image" id="profile_image" accept="image/*">
                                                    <img id="previewImage" src="{{ asset($user->image ?? 'upload/no_image.jpg') }}" style="margin-top: 10px; width: 150px; height: 150px; object-fit: cover;" />

                                                    
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="gap-2 hstack justify-content-end">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        <button type="button" class="btn btn-soft-success">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                      </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="changePassword" role="tabpanel">
                                       <div class="card">
                                        <form action="javascript:void(0);">
                                            <div class="row g-2">
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                        <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="newpasswordInput" class="form-label">New Password*</label>
                                                        <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                        <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot Password ?</a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success">Change Password</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                       </div>
                                       
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="experience" role="tabpanel">
                                        <form>
                                            <div id="newlink">
                                                <div id="1">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="jobTitle" class="form-label">Job Title</label>
                                                                <input type="text" class="form-control" id="jobTitle" placeholder="Job title" value="Lead Designer / Developer">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="companyName" class="form-label">Company Name</label>
                                                                <input type="text" class="form-control" id="companyName" placeholder="Company name" value="Themesbrand">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="experienceYear" class="form-label">Experience Years</label>
                                                                <div class="row">
                                                                    <div class="col-lg-5">
                                                                        <select class="form-control" data-choices data-choices-search-false name="experienceYear" id="experienceYear">
                                                                            <option value="">Select years</option>
                                                                            <option value="Choice 1">2001</option>
                                                                            <option value="Choice 2">2002</option>
                                                                            <option value="Choice 3">2003</option>
                                                                            <option value="Choice 4">2004</option>
                                                                            <option value="Choice 5">2005</option>
                                                                            <option value="Choice 6">2006</option>
                                                                            <option value="Choice 7">2007</option>
                                                                            <option value="Choice 8">2008</option>
                                                                            <option value="Choice 9">2009</option>
                                                                            <option value="Choice 10">2010</option>
                                                                            <option value="Choice 11">2011</option>
                                                                            <option value="Choice 12">2012</option>
                                                                            <option value="Choice 13">2013</option>
                                                                            <option value="Choice 14">2014</option>
                                                                            <option value="Choice 15">2015</option>
                                                                            <option value="Choice 16">2016</option>
                                                                            <option value="Choice 17" selected>2017</option>
                                                                            <option value="Choice 18">2018</option>
                                                                            <option value="Choice 19">2019</option>
                                                                            <option value="Choice 20">2020</option>
                                                                            <option value="Choice 21">2021</option>
                                                                            <option value="Choice 22">2022</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-auto align-self-center">
                                                                        to
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-5">
                                                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default2">
                                                                            <option value="">Select years</option>
                                                                            <option value="Choice 1">2001</option>
                                                                            <option value="Choice 2">2002</option>
                                                                            <option value="Choice 3">2003</option>
                                                                            <option value="Choice 4">2004</option>
                                                                            <option value="Choice 5">2005</option>
                                                                            <option value="Choice 6">2006</option>
                                                                            <option value="Choice 7">2007</option>
                                                                            <option value="Choice 8">2008</option>
                                                                            <option value="Choice 9">2009</option>
                                                                            <option value="Choice 10">2010</option>
                                                                            <option value="Choice 11">2011</option>
                                                                            <option value="Choice 12">2012</option>
                                                                            <option value="Choice 13">2013</option>
                                                                            <option value="Choice 14">2014</option>
                                                                            <option value="Choice 15">2015</option>
                                                                            <option value="Choice 16">2016</option>
                                                                            <option value="Choice 17">2017</option>
                                                                            <option value="Choice 18">2018</option>
                                                                            <option value="Choice 19">2019</option>
                                                                            <option value="Choice 20" selected>2020</option>
                                                                            <option value="Choice 21">2021</option>
                                                                            <option value="Choice 22">2022</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="jobDescription" class="form-label">Job Description</label>
                                                                <textarea class="form-control" id="jobDescription" rows="3" placeholder="Enter description">You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you're working with reputable font websites. </textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="gap-2 hstack justify-content-end">
                                                            <a class="btn btn-success" href="javascript:deleteEl(1)">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <div id="newForm" style="display: none;">

                                            </div>
                                            <div class="col-lg-12">
                                                <div class="gap-2 hstack">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    <a href="javascript:new_link()" class="btn btn-primary">Add New</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </form>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="privacy" role="tabpanel">
                                        <div class="pb-2 mb-4">
                                            <h5 class="mb-3 card-title text-decoration-underline">Security:</h5>
                                            <div class="mb-4 d-flex flex-column flex-sm-row mb-sm-0">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 fs-14">Two-factor Authentication</h6>
                                                    <p class="text-muted">Two-factor authentication is an enhanced security meansur. Once enabled, you'll be required to give two types of identification when you log into Google Authentication and SMS are Supported.</p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable Two-facor Authentication</a>
                                                </div>
                                            </div>
                                            <div class="mt-2 mb-4 d-flex flex-column flex-sm-row mb-sm-0">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 fs-14">Secondary Verification</h6>
                                                    <p class="text-muted">The first factor is a password and the second commonly includes a text with a code sent to your smartphone, or biometrics using your fingerprint, face, or retina.</p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set up secondary method</a>
                                                </div>
                                            </div>
                                            <div class="mt-2 mb-4 d-flex flex-column flex-sm-row mb-sm-0">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 fs-14">Backup Codes</h6>
                                                    <p class="text-muted mb-sm-0">A backup code is automatically generated for you when you turn on two-factor authentication through your iOS or Android Twitter app. You can also generate a backup code on twitter.com.</p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate backup codes</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="mb-3 card-title text-decoration-underline">Application Notifications:</h5>
                                            <ul class="mb-0 list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <label for="directMessage" class="form-check-label fs-14">Direct messages</label>
                                                        <p class="text-muted">Messages from people you follow</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="directMessage" checked />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-2 d-flex">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="desktopNotification">
                                                            Show desktop notifications
                                                        </label>
                                                        <p class="text-muted">Choose the option you want as your default setting. Block a site: Next to "Not allowed to send notifications," click Add.</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-2 d-flex">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="emailNotification">
                                                            Show email notifications
                                                        </label>
                                                        <p class="text-muted"> Under Settings, choose Notifications. Under Select an account, choose the account to enable notifications for. </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="emailNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-2 d-flex">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="chatNotification">
                                                            Show chat notifications
                                                        </label>
                                                        <p class="text-muted">To prevent duplicate mobile notifications from the Gmail and Chat apps, in settings, turn off Chat notifications.</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="chatNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mt-2 d-flex">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="purchaesNotification">
                                                            Show purchase notifications
                                                        </label>
                                                        <p class="text-muted">Get real-time purchase alerts to protect yourself from fraudulent charges.</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="purchaesNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="mb-3 card-title text-decoration-underline">Delete This Account:</h5>
                                            <p class="text-muted">Go to the Data & Privacy section of your profile Account. Scroll to "Your data & privacy options." Delete your Profile Account. Follow the instructions to delete your account :</p>
                                            <div>
                                                <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password" value="make@321654987" style="max-width: 265px;">
                                            </div>
                                            <div class="gap-2 mt-3 hstack">
                                                <a href="javascript:void(0);" class="btn btn-soft-danger">Close & Delete This Account</a>
                                                <a href="javascript:void(0);" class="btn btn-light">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    
                    
                    <div class="tab-pane fade " id="projects" role="tabpanel">
                       <div class="card">
                        <div class="container py-4">
                            {{-- Summary Cards --}}
                            <div class="mb-4 row">
                                <div class="col-md-4">
                                    <div class="shadow-sm summary-card card bg-light">
                                        <div class="card-body">
                                            <h6>Total Earnings</h6>
                                            <h4 class="text-success">$430.00</h4>
                                            <small class="text-muted">as of 01-February 2024</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="shadow-sm summary-card card bg-light">
                                        <div class="card-body">
                                            <h6>Pending Payments</h6>
                                            <h4 class="text-primary">$100.00</h4>
                                            <small class="text-muted">as of 01-February 2024</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 shadow-sm summary-card card bg-light d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6>Withdrawal Method</h6>
                                            <div class="fw-bold">1502********4832</div>
                                        </div>
                                        <div class="gap-2 d-flex">
                                            <i class="bi bi-check-circle-fill text-success" title="Active"></i>
                                            <i class="bi bi-trash text-danger" title="Delete"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Card Details Form --}}
                            
                            
                            @if($cards->count() == 0)
   <div class="mb-5 credit-card-box">
                                <div class="card-body">
                                    <h5 class="mb-3">Card Details</h5>
                                    <form method="POST" action="{{ route('investor.card.store') }}">
                                        @csrf
                                        <div class="mb-3 d-flex align-items-center">
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="checkbox" id="addCard" checked>
                                                <label class="form-check-label" for="addCard">Add new card</label>
                                            </div>
                                            <img src="https://img.icons8.com/color/48/mastercard-logo.png" width="40">
                                            <img src="https://img.icons8.com/color/48/visa.png" width="40">
                                        </div>
                            
                                        <div class="mb-3">
                                            <label>Card number</label>
                                            <div class="input-group">
                                                <input type="text" name="card_number" class="form-control" placeholder="Enter the 16-digit card number on the card" required>
                                                <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                                            </div>
                                        </div>
                            
                                        <div class="mb-3">
                                            <label>Card owner</label>
                                            <input type="text" name="card_owner" class="form-control" placeholder="Enter the name on the card" required>
                                        </div>
                            
                                        <div class="row">
                                            <div class="mb-3 col-md-3">
                                                <label>Expiry month</label>
                                                <input type="text" name="expiry_month" class="form-control" placeholder="MM" maxlength="2" required>
                                            </div>
                                            
                                            <div class="mb-3 col-md-3">
                                                <label>Year</label>
                                                <input type="text" name="expiry_year" class="form-control" placeholder="YY" maxlength="2" required>
                                            </div>
                                            
                                            <div class="mb-3 col-md-3">
                                                <label>CVV2</label>
                                                <input type="text" name="cvv" class="form-control" placeholder="Security code" maxlength="4" required>
                                            </div>
                                            
                                            <div class="col-md-3 d-flex align-items-center">
                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="checkbox" name="set_default" id="setDefault">
                                                    <label class="form-check-label" for="setDefault">Set as default</label>
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-success w-100">💳 Save Card</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
@else
    {{-- Show saved cards --}}
    <div class="mt-4">
        <h5 class="mb-3">Your Saved Cards</h5>
        @foreach($cards as $card)
            <div class="p-3 mb-3 border rounded bg-light">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Card Number:</strong> **** **** **** {{ substr($card->card_number, -4) }}<br>
                        <strong>Owner:</strong> {{ $card->card_owner }}<br>
                        <strong>Expiry:</strong> {{ $card->expiry_month }}/{{ $card->expiry_year }}<br>
                        <strong>CVV:</strong> ****
                    </div>
                    @if($card->is_default)
                        <span class="badge bg-success">Default</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endif

                            {{-- Transaction History --}}
                            <div>
                                <h5>Transaction History</h5>
                                <div class="mb-3">
                                    <button class="btn btn-outline-dark btn-sm me-1">All</button>
                                    <button class="btn btn-outline-secondary btn-sm me-1">Complete</button>
                                    <button class="btn btn-outline-warning btn-sm me-1">Pending</button>
                                    <button class="btn btn-outline-danger btn-sm">Rejected</button>
                                </div>
                    
                                <div class="table-responsive">
                                    <table class="table align-middle table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#15267</td>
                                                <td>Mar 1, 2023</td>
                                                <td>$100</td>
                                                <td>Funds Received</td>
                                                <td><span class="text-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <td>#153587</td>
                                                <td>Jan 26, 2023</td>
                                                <td>$300</td>
                                                <td>Buy</td>
                                                <td><span class="text-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <td>#12436</td>
                                                <td>Feb 12, 2033</td>
                                                <td>$100</td>
                                                <td>Dividend</td>
                                                <td><span class="text-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <td>#16879</td>
                                                <td>Feb 12, 2033</td>
                                                <td>$500</td>
                                                <td>Reinvestment</td>
                                                <td><span class="text-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <td>#16378</td>
                                                <td>Feb 28, 2033</td>
                                                <td>$500</td>
                                                <td>Dividend</td>
                                                <td><span class="text-danger">Rejected</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    
                        </div>
                       </div>
                    </div>
                    
                    <!--end tab-pane-->
                    <div class="tab-pane fade" id="documents" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-4">Messages from Investment Platform</h5>
                    
                                <div class="list-group">
                                    <!-- Sample message item -->
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Investment Update: Your Portfolio</h6>
                                            <small>2025-04-15</small>
                                        </div>
                                        <p class="mb-1 text-muted">Your investment has yielded a 7% return this quarter. Click to view more.</p>
                                    </a>
                    
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">New Opportunity Alert</h6>
                                            <small>2025-04-10</small>
                                        </div>
                                        <p class="mb-1 text-muted">A new high-yield investment opportunity is available. Learn more in your dashboard.</p>
                                    </a>
                                    <!-- <div class="mt-4 text-center text-muted">No messages yet.</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                </div>
                <!--end tab-content-->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

</div><!-- container-fluid -->

<script>
    document.getElementById('profile_image').onchange = function (evt) {
        const [file] = this.files;
        if (file) {
            document.getElementById('previewImage').src = URL.createObjectURL(file);
        }
    };
</script>

@endsection
