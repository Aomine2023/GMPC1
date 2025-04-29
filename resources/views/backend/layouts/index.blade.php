@extends('backend.layouts.master')
@section('title')
Admin
@endsection
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Welcome, {{ Auth::user()->name }}!</h4>

                <div class="page-title-right">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card crm-widget">
                <div class="p-0 card-body">
                    <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                        <div class="col">
                            <div class="px-3 py-4">
                                <h5 class="text-muted text-uppercase fs-13">Campaign Sent <i class="align-middle ri-arrow-up-circle-line text-success fs-18 float-end"></i></h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-space-ship-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value" data-target="197">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="px-3 py-4 mt-3 mt-md-0">
                                <h5 class="text-muted text-uppercase fs-13">Annual Profit <i class="align-middle ri-arrow-up-circle-line text-success fs-18 float-end"></i></h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-exchange-dollar-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0">$<span class="counter-value" data-target="489.4">0</span>k</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="px-3 py-4 mt-3 mt-md-0">
                                <h5 class="text-muted text-uppercase fs-13">Lead Coversation <i class="align-middle ri-arrow-down-circle-line text-danger fs-18 float-end"></i></h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-pulse-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value" data-target="32.89">0</span>%</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="px-3 py-4 mt-3 mt-lg-0">
                                <h5 class="text-muted text-uppercase fs-13">Daily Average Income <i class="align-middle ri-arrow-up-circle-line text-success fs-18 float-end"></i></h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-trophy-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0">$<span class="counter-value" data-target="1596.5">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col">
                            <div class="px-3 py-4 mt-3 mt-lg-0">
                                <h5 class="text-muted text-uppercase fs-13">Annual Deals <i class="align-middle ri-arrow-down-circle-line text-danger fs-18 float-end"></i></h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-service-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value" data-target="2659">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xxl-3 col-md-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Sales Forecast</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="dashboard-crm.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Nov 2021<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="dashboard-crm.html#">Oct 2021</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Nov 2021</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Dec 2021</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Jan 2022</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="pb-0 card-body">
                    <div id="sales-forecast-chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xxl-3 col-md-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Deal Type</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="dashboard-crm.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Monthly<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="dashboard-crm.html#">Today</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Weekly</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Monthly</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Yearly</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="pb-0 card-body">
                    <div id="deal-type-charts" data-colors='["--vz-warning", "--vz-danger", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xxl-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Balance Overview</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="dashboard-crm.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Current Year<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="dashboard-crm.html#">Today</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Last Week</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Last Month</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Current Year</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="px-0 card-body">
                    <ul class="mb-0 text-center list-inline main-chart">
                        <li class="border-0 list-inline-item chart-border-left me-0">
                            <h4 class="text-primary">$584k <span class="align-middle text-muted d-inline-block fs-13 ms-2">Revenue</span></h4>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h4>$497k<span class="align-middle text-muted d-inline-block fs-13 ms-2">Expenses</span>
                            </h4>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h4><span data-plugin="counterup">3.6</span>%<span class="align-middle text-muted d-inline-block fs-13 ms-2">Profit Ratio</span></h4>
                        </li>
                    </ul>

                    <div id="revenue-expenses-charts" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Deals Status</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="dashboard-crm.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">02 Nov 2021 to 31 Dec 2021<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="dashboard-crm.html#">Today</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Last Week</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Last Month</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Current Year</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table mb-0 align-middle table-borderless table-hover table-nowrap">
                            <thead class="table-light">
                                <tr class="text-muted">
                                    <th scope="col">Name</th>
                                    <th scope="col" style="width: 20%;">Last Contacted</th>
                                    <th scope="col">Sales Representative</th>
                                    <th scope="col" style="width: 16%;">Status</th>
                                    <th scope="col" style="width: 12%;">Deal Value</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Absternet LLC</td>
                                    <td>Sep 20, 2021</td>
                                    <td><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Donald Risher</a>
                                    </td>
                                    <td><span class="p-2 badge badge-soft-success">Deal Won</span></td>
                                    <td>
                                        <div class="text-nowrap">$100.1K</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Raitech Soft</td>
                                    <td>Sep 23, 2021</td>
                                    <td><img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Sofia Cunha</a>
                                    </td>
                                    <td><span class="p-2 badge badge-soft-warning">Intro Call</span></td>
                                    <td>
                                        <div class="text-nowrap">$150K</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>William PVT</td>
                                    <td>Sep 27, 2021</td>
                                    <td><img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Luis Rocha</a>
                                    </td>
                                    <td><span class="p-2 badge badge-soft-danger">Stuck</span></td>
                                    <td>
                                        <div class="text-nowrap">$78.18K</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Loiusee LLP</td>
                                    <td>Sep 30, 2021</td>
                                    <td><img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                    </td>
                                    <td><span class="p-2 badge badge-soft-success">Deal Won</span></td>
                                    <td>
                                        <div class="text-nowrap">$180K</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Apple Inc.</td>
                                    <td>Sep 30, 2021</td>
                                    <td><img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                    </td>
                                    <td><span class="p-2 badge badge-soft-info">New Lead</span></td>
                                    <td>
                                        <div class="text-nowrap">$78.9K</div>
                                    </td>
                                </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-5">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">My Tasks</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="dashboard-crm.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted"><i class="align-middle ri-settings-4-line me-1 fs-15"></i>Settings</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="dashboard-crm.html#">Edit</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Remove</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="p-0 card-body">

                    <div class="p-3 align-items-center justify-content-between d-flex">
                        <div class="flex-shrink-0">
                            <div class="text-muted"><span class="fw-semibold">4</span> of <span class="fw-semibold">10</span> remaining</div>
                        </div>
                        <button type="button" class="btn btn-sm btn-success"><i class="align-middle ri-add-line me-1"></i> Add Task</button>
                    </div><!-- end card header -->

                    <div data-simplebar style="max-height: 219px;">
                        <ul class="px-3 border-dashed list-group list-group-flush">
                            <li class="list-group-item ps-0">
                                <div class="d-flex align-items-start">
                                    <div class="form-check ps-0 flex-sharink-0">
                                        <input type="checkbox" class="form-check-input ms-0" id="task_one">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="mb-0 form-check-label ps-2" for="task_one">Review and make sure nothing slips through cracks</label>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <p class="mb-0 text-muted fs-12">15 Sep, 2021</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item ps-0">
                                <div class="d-flex align-items-start">
                                    <div class="form-check ps-0 flex-sharink-0">
                                        <input type="checkbox" class="form-check-input ms-0" id="task_two">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="mb-0 form-check-label ps-2" for="task_two">Send meeting invites for sales upcampaign</label>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <p class="mb-0 text-muted fs-12">20 Sep, 2021</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item ps-0">
                                <div class="d-flex align-items-start">
                                    <div class="form-check flex-sharink-0 ps-0">
                                        <input type="checkbox" class="form-check-input ms-0" id="task_three">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="mb-0 form-check-label ps-2" for="task_three">Weekly closed sales won checking with sales team</label>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <p class="mb-0 text-muted fs-12">24 Sep, 2021</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item ps-0">
                                <div class="d-flex align-items-start">
                                    <div class="form-check ps-0 flex-sharink-0">
                                        <input type="checkbox" class="form-check-input ms-0" id="task_four">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="mb-0 form-check-label ps-2" for="task_four">Add notes that can be viewed from the individual view</label>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <p class="mb-0 text-muted fs-12">27 Sep, 2021</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item ps-0">
                                <div class="d-flex align-items-start">
                                    <div class="form-check ps-0 flex-sharink-0">
                                        <input type="checkbox" class="form-check-input ms-0" id="task_five">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="mb-0 form-check-label ps-2" for="task_five">Move stuff to another page</label>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <p class="mb-0 text-muted fs-12">27 Sep, 2021</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item ps-0">
                                <div class="d-flex align-items-start">
                                    <div class="form-check ps-0 flex-sharink-0">
                                        <input type="checkbox" class="form-check-input ms-0" id="task_six">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="mb-0 form-check-label ps-2" for="task_six">Styling wireframe design and documentation for velzon admin</label>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <p class="mb-0 text-muted fs-12">27 Sep, 2021</p>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- end ul -->
                    </div>
                    <div class="p-3 pt-2">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show more...</a>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xxl-5">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Upcoming Activities</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="dashboard-crm.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="dashboard-crm.html#">Edit</a>
                                <a class="dropdown-item" href="dashboard-crm.html#">Remove</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="pt-0 card-body">
                    <ul class="border-dashed list-group list-group-flush">
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="h-auto p-1 py-2 avatar-sm bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">25</h5>
                                            <div class="text-muted">Tue</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="mt-0 mb-1 text-muted fs-13">12:00am - 03:30pm</h5>
                                    <a href="dashboard-crm.html#" class="mb-0 text-reset fs-14">Meeting for campaign with sales team</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh Brown">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dan Gibson">
                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span class="text-white avatar-title rounded-circle bg-info">
                                                        5
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="h-auto p-1 py-2 avatar-sm bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">20</h5>
                                            <div class="text-muted">Wed</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="mt-0 mb-1 text-muted fs-13">02:00pm - 03:45pm</h5>
                                    <a href="dashboard-crm.html#" class="mb-0 text-reset fs-14">Adding a new event with attachments</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frida Bang">
                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Malou Silva">
                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Simon Schmidt">
                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tosh Jessen">
                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span class="text-white avatar-title rounded-circle bg-success">
                                                        3
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="h-auto p-1 py-2 avatar-sm bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">17</h5>
                                            <div class="text-muted">Wed</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="mt-0 mb-1 text-muted fs-13">04:30pm - 07:15pm</h5>
                                    <a href="dashboard-crm.html#" class="mb-0 text-reset fs-14">Create new project Bundling Product</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Nina Schmidt">
                                                <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh Brown">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span class="text-white avatar-title rounded-circle bg-primary">
                                                        4
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="h-auto p-1 py-2 avatar-sm bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">12</h5>
                                            <div class="text-muted">Tue</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="mt-0 mb-1 text-muted fs-13">10:30am - 01:15pm</h5>
                                    <a href="dashboard-crm.html#" class="mb-0 text-reset fs-14">Weekly closed sales won checking with sales team</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh Brown">
                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dan Gibson">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span class="text-white avatar-title rounded-circle bg-warning">
                                                        9
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                    </ul><!-- end -->
                    <div class="mt-2 text-center align-items-center row g-3 text-sm-start">
                        <div class="col-sm">
                            <div class="text-muted">Showing<span class="fw-semibold">4</span> of <span class="fw-semibold">125</span> Results
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="mb-0 pagination pagination-separated pagination-sm justify-content-center justify-content-sm-start">
                                <li class="page-item disabled">
                                    <a href="dashboard-crm.html#" class="page-link">←</a>
                                </li>
                                <li class="page-item">
                                    <a href="dashboard-crm.html#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="dashboard-crm.html#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="dashboard-crm.html#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="dashboard-crm.html#" class="page-link">→</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xxl-7">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Closing Deals</h4>
                    <div class="flex-shrink-0">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected="">Closed Deals</option>
                            <option value="1">Active Deals</option>
                            <option value="2">Paused Deals</option>
                            <option value="3">Canceled Deals</option>
                        </select>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle table-bordered table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 30%;">Deal Name</th>
                                    <th scope="col" style="width: 30%;">Sales Rep</th>
                                    <th scope="col" style="width: 20%;">Amount</th>
                                    <th scope="col" style="width: 20%;">Close Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Acme Inc Install</td>
                                    <td><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Donald Risher</a>
                                    </td>
                                    <td>$96k</td>
                                    <td>Today</td>
                                </tr>
                                <tr>
                                    <td>Save lots Stores</td>
                                    <td><img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Jansh Brown</a>
                                    </td>
                                    <td>$55.7k</td>
                                    <td>30 Dec 2021</td>
                                </tr>
                                <tr>
                                    <td>William PVT</td>
                                    <td><img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Ayaan Hudda</a>
                                    </td>
                                    <td>$102k</td>
                                    <td>25 Nov 2021</td>
                                </tr>
                                <tr>
                                    <td>Raitech Soft</td>
                                    <td><img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Julia William</a>
                                    </td>
                                    <td>$89.5k</td>
                                    <td>20 Sep 2021</td>
                                </tr>
                                <tr>
                                    <td>Absternet LLC</td>
                                    <td><img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="dashboard-crm.html#javascript:%20void(0);" class="text-body fw-medium">Vitoria Rodrigues</a>
                                    </td>
                                    <td>$89.5k</td>
                                    <td>20 Sep 2021</td>
                                </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</div>
@endsection
