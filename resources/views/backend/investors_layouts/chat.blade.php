@extends('backend.investors_layouts.master')
@section('title')
Investors Relations
@endsection
@section('content')

<div class="container-fluid">

    <div class="gap-1 p-1 email-wrapper d-lg-flex mx-n4 mt-n4">
        <div class="email-menu-sidebar">
            <div class="p-4 d-flex flex-column h-100">
                <div class="pb-4 border-bottom border-bottom-dashed">
                    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#composemodal"><i data-feather="plus-circle" class="icon-xs me-1 icon-dual-light"></i> Compose</button>
                </div>

                <div class="px-4 mx-n4 email-menu-sidebar-scroll" data-simplebar>
                    <div class="mt-3 mail-list">
                        <a href="apps-mailbox.html#" class="active"><i class="align-middle ri-mail-fill me-3 fw-medium"></i> <span class="mail-list-link">All</span> <span class="badge badge-soft-success ms-auto ">5</span></a>
                        <a href="apps-mailbox.html#"><i class="align-middle ri-inbox-archive-fill me-3 fw-medium"></i> <span class="mail-list-link">Inbox</span> <span class="badge badge-soft-success ms-auto ">5</span></a>
                        <a href="apps-mailbox.html#"><i class="align-middle ri-send-plane-2-fill me-3 fw-medium"></i><span class="mail-list-link">Sent</span></a>
                        <a href="apps-mailbox.html#"><i class="align-middle ri-edit-2-fill me-3 fw-medium"></i><span class="mail-list-link">Draft</span></a>
                        <a href="apps-mailbox.html#"><i class="align-middle ri-error-warning-fill me-3 fw-medium"></i><span class="mail-list-link">Spam</span></a>
                        <a href="apps-mailbox.html#"><i class="align-middle ri-delete-bin-5-fill me-3 fw-medium"></i><span class="mail-list-link">Trash</span></a>
                        <a href="apps-mailbox.html#"><i class="align-middle ri-star-fill me-3 fw-medium"></i><span class="mail-list-link">Starred</span></a>
                        <a href="apps-mailbox.html#"><i class="align-middle ri-price-tag-3-fill me-3 fw-medium"></i><span class="mail-list-link">Important</span></a>
                    </div>


                    <div>
                        <h5 class="mt-4 fs-12 text-uppercase text-muted">Labels</h5>

                        <div class="mt-1 mail-list">
                            <a href="apps-mailbox.html#"><span class="ri-checkbox-blank-circle-line me-2 text-info"></span><span class="mail-list-link" data-type="label">Support</span> <span class="badge badge-soft-success ms-auto">3</span></a>
                            <a href="apps-mailbox.html#"><span class="ri-checkbox-blank-circle-line me-2 text-warning"></span><span class="mail-list-link" data-type="label">Freelance</span></a>
                            <a href="apps-mailbox.html#"><span class="ri-checkbox-blank-circle-line me-2 text-primary"></span><span class="mail-list-link" data-type="label">Social</span></a>
                            <a href="apps-mailbox.html#"><span class="ri-checkbox-blank-circle-line me-2 text-danger"></span><span class="mail-list-link" data-type="label">Friends</span><span class="badge badge-soft-success ms-auto">2</span></a>
                            <a href="apps-mailbox.html#"><span class="ri-checkbox-blank-circle-line me-2 text-success"></span><span class="mail-list-link" data-type="label">Family</span></a>
                        </div>
                    </div>

                    <div class="pt-3 mt-3 border-top border-top-dashed">
                        <a href="apps-mailbox.html#" class="btn btn-icon btn-sm btn-soft-info btn-rounded float-end"><i class="bx bx-plus fs-16"></i></a>
                        <h5 class="mb-3 fs-12 text-uppercase text-muted">Chat</h5>

                        <div class="gap-3 mt-2 vstack email-chat-list">
                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 avatar-xs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-2.jpg" alt="">
                                </div>

                                <div class="overflow-hidden flex-grow-1 chat-user-box">
                                    <h5 class="mb-0 fs-13 text-truncate chatlist-user-name">Scott Median</h5>
                                    <small class="mb-0 text-muted text-truncate">Hello ! are you there?</small>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 avatar-xs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                </div>

                                <div class="overflow-hidden flex-grow-1 chat-user-box">
                                    <h5 class="mb-0 fs-13 text-truncate chatlist-user-name">Julian Rosa</h5>
                                    <small class="mb-0 text-muted text-truncate">What about our next..</small>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 avatar-xs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                </div>

                                <div class="overflow-hidden flex-grow-1 chat-user-box">
                                    <h5 class="mb-0 fs-13 text-truncate chatlist-user-name">David Medina</h5>
                                    <small class="mb-0 text-muted text-truncate">Yeah everything is fine</small>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 avatar-xs chatlist-user-image">
                                    <img class="img-fluid rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                </div>

                                <div class="overflow-hidden flex-grow-1 chat-user-box">
                                    <h5 class="mb-0 fs-13 text-truncate chatlist-user-name">Jay Baker</h5>
                                    <small class="mb-0 text-muted text-truncate">Wow that's great</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-auto">
                    <h5 class="fs-13">1.75 GB of 10 GB used</h5>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end email-menu-sidebar -->

        <div class="email-content">
            <div class="p-4 pb-0">
                <div class="border-bottom border-bottom-dashed">
                    <div class="mb-3 row mt-n2 mb-sm-0">
                        <div class="order-1 col col-sm-auto d-block d-lg-none">
                            <button type="button" class="btn btn-soft-success btn-icon btn-sm fs-16 email-menu-btn">
                                <i class="align-bottom ri-menu-2-fill"></i>
                            </button>
                        </div>
                        <div class="order-3 col-sm order-sm-2">
                            <div class="flex-wrap hstack gap-sm-1 align-items-center email-topbar-link">
                                <div class="m-0 form-check fs-14">
                                    <input class="form-check-input" type="checkbox" value="" id="checkall">
                                    <label class="form-check-label" for="checkall"></label>
                                </div>
                                <div id="email-topbar-actions">
                                    <div class="flex-wrap hstack gap-sm-1 align-items-center">
                                        <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-16" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Archive">
                                            <i class="align-bottom ri-inbox-archive-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-16" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Report Spam">
                                            <i class="align-bottom ri-error-warning-fill"></i>
                                        </button>
                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Trash">
                                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-16" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                <i class="align-bottom ri-delete-bin-5-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-2 vr align-self-center"></div>
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="align-bottom ri-price-tag-3-fill"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="apps-mailbox.html#">Support</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Freelance</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Social</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Friends</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Family</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="align-bottom ri-more-2-fill"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-mailbox.html#" id="mark-all-read">Mark all as Read</a>
                                    </div>
                                </div>
                                <div class="px-4 alert alert-warning alert-dismissible unreadConversations-alert fade show " id="unreadConversations" role="alert">
                                    No Unread Conversations
                                </div>
                            </div>
                        </div>
                        <div class="order-2 col-auto order-sm-3">
                            <div class="d-flex gap-sm-1 email-topbar-link">
                                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-16">
                                    <i class="align-bottom ri-refresh-line"></i>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="align-bottom ri-more-2-fill"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-mailbox.html#">Mark as Unread</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Mark as Important</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Add to Tasks</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Add Star</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Mute</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 row align-items-end">
                        <div class="col">
                            <div id="mail-filter-navlist">
                                <ul class="gap-1 text-center nav nav-tabs nav-tabs-custom nav-success border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <button class="nav-link fw-semibold active" id="pills-primary-tab" data-bs-toggle="pill" data-bs-target="#pills-primary" type="button" role="tab" aria-controls="pills-primary" aria-selected="true">
                                            <i class="align-bottom ri-inbox-fill d-inline-block"></i>
                                            <span class="ms-1 d-none d-sm-inline-block">Primary</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link fw-semibold" id="pills-social-tab" data-bs-toggle="pill" data-bs-target="#pills-social" type="button" role="tab" aria-controls="pills-social" aria-selected="false">
                                            <i class="align-bottom ri-group-fill d-inline-block"></i>
                                            <span class="ms-1 d-none d-sm-inline-block">Social</span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link fw-semibold" id="pills-promotions-tab" data-bs-toggle="pill" data-bs-target="#pills-promotions" type="button" role="tab" aria-controls="pills-promotions" aria-selected="false">
                                            <i class="align-bottom ri-price-tag-3-fill d-inline-block"></i>
                                            <span class="ms-1 d-none d-sm-inline-block">Promotions</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-auto">
                            <div class="mb-2 text-muted">1-50 of 154</div>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-primary" role="tabpanel" aria-labelledby="pills-primary-tab">
                        <div class="px-4 message-list-content mx-n4 message-list-scroll" data-simplebar>
                            <div id="elmLoader">
                                <div class="spinner-border text-primary avatar-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <ul class="message-list" id="mail-list"></ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
                        <div class="px-4 message-list-content mx-n4 message-list-scroll" data-simplebar>
                            <ul class="message-list" id="social-mail-list"></ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-promotions" role="tabpanel" aria-labelledby="pills-promotions-tab">
                        <div class="px-4 message-list-content mx-n4 message-list-scroll" data-simplebar>
                            <ul class="message-list" id="promotions-mail-list"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end email-content -->

        <div class="email-detail-content">
            <div class="p-4 d-flex flex-column h-100">
                <div class="pb-4 border-bottom border-bottom-dashed">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-email">
                                    <i class="align-bottom ri-close-fill"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="flex-wrap hstack gap-sm-1 align-items-center email-topbar-link">
                                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-16 favourite-btn active">
                                    <i class="align-bottom ri-star-fill"></i>
                                </button>
                                <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16">
                                    <i class="align-bottom ri-printer-fill"></i>
                                </button>
                                <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16">
                                    <i class="align-bottom ri-delete-bin-5-fill"></i>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-16" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="align-bottom ri-more-2-fill"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-mailbox.html#">Mark as Unread</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Mark as Important</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Add to Tasks</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Add Star</a>
                                        <a class="dropdown-item" href="apps-mailbox.html#">Mute</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-4 mx-n4 email-detail-content-scroll" data-simplebar>
                    <div class="mt-4 mb-3">
                        <h5 class="fw-bold email-subject-title">New updates for Skote Theme</h5>
                    </div>

                    <div class="accordion accordion-flush">
                        <div class="border-dashed accordion-item left">
                            <div class="accordion-header">
                                <a role="button" class="px-0 bg-transparent shadow-none btn w-100 text-start collapsed" data-bs-toggle="collapse" href="apps-mailbox.html#email-collapseOne" aria-expanded="true" aria-controls="email-collapseOne">
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="flex-shrink-0 avatar-xs me-3">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="overflow-hidden flex-grow-1">
                                            <h5 class="mb-0 fs-14 text-truncate email-user-name">Jack Davis</h5>
                                            <div class="text-truncate fs-12">to: me</div>
                                        </div>
                                        <div class="flex-shrink-0 align-self-start">
                                            <div class="text-muted fs-12">09 Jan 2022, 11:12 AM</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="email-collapseOne" class="accordion-collapse collapse">
                                <div class="px-0 accordion-body text-body">
                                    <div>
                                        <p>Hi,</p>
                                        <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor.</p>
                                        <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices.</p>
                                        <p>Sincerly,</p>

                                        <div class="gap-3 d-flex">
                                            <div class="h-auto border rounded avatar-xl">
                                                <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid rouned-top">
                                                <div class="py-2 text-center">
                                                    <a href="" class="d-block fw-semibold">Download</a>
                                                </div>
                                            </div>
                                            <div class="h-auto border rounded avatar-xl">
                                                <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid rouned-top">
                                                <div class="py-2 text-center">
                                                    <a href="" class="d-block fw-semibold">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="border-dashed accordion-item right">
                            <div class="accordion-header">
                                <a role="button" class="px-0 bg-transparent shadow-none btn w-100 text-start collapsed" data-bs-toggle="collapse" href="apps-mailbox.html#email-collapseTwo" aria-expanded="true" aria-controls="email-collapseTwo">
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="flex-shrink-0 avatar-xs me-3">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="overflow-hidden flex-grow-1">
                                            <h5 class="mb-0 fs-14 text-truncate email-user-name-right">Anna Adame</h5>
                                            <div class="text-truncate fs-12">to: jackdavis@email.com</div>
                                        </div>
                                        <div class="flex-shrink-0 align-self-start">
                                            <div class="text-muted fs-12">09 Jan 2022, 02:15 PM</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="email-collapseTwo" class="accordion-collapse collapse">
                                <div class="px-0 accordion-body text-body">
                                    <div>
                                        <p>Hi,</p>
                                        <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual.</p>
                                        <p>Thank you</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="border-dashed accordion-item left">
                            <div class="accordion-header">
                                <a role="button" class="px-0 bg-transparent shadow-none btn w-100 text-start" data-bs-toggle="collapse" href="apps-mailbox.html#email-collapseThree" aria-expanded="true" aria-controls="email-collapseThree">
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="flex-shrink-0 avatar-xs me-3">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="overflow-hidden flex-grow-1">
                                            <h5 class="mb-0 fs-14 text-truncate email-user-name">Jack Davis</h5>
                                            <div class="text-truncate fs-12">to: me</div>
                                        </div>
                                        <div class="flex-shrink-0 align-self-start">
                                            <div class="text-muted fs-12">10 Jan 2022, 10:08 AM</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="email-collapseThree" class="accordion-collapse collapse show">
                                <div class="px-0 accordion-body text-body">
                                    <div>
                                        <p>Hi,</p>
                                        <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar pronunciation.</p>
                                        <p>Thank you</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->
                    </div>
                    <!-- end accordion -->
                </div>
                <div class="mt-auto">
                    <form class="mt-2">
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Reply :</label>
                            <textarea class="border form-control border-bottom-0 rounded-top rounded-0" id="exampleFormControlTextarea1" rows="3" placeholder="Enter message"></textarea>
                            <div class="px-2 py-1 border bg-light rouned-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="py-0 btn btn-sm fs-15 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Bold"><i class="align-bottom ri-bold"></i></button>
                                            <button type="button" class="py-0 btn btn-sm fs-15 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Italic"><i class="align-bottom ri-italic"></i></button>
                                            <button type="button" class="py-0 btn btn-sm fs-15 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Link"><i class="align-bottom ri-link"></i></button>
                                            <button type="button" class="py-0 btn btn-sm fs-15 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Image"><i class="align-bottom ri-image-2-line"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-success"><i class="align-bottom ri-send-plane-2-fill"></i></button>
                                            <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-timer-line text-muted me-1"></i> Schedule Send</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end email-detail-content -->
    </div>
    <!-- end email wrapper -->

    <div class="email-chat-detail" id="emailchat-detailElem">
        <div class="mb-0 card">
            <div class="card-header align-items-center d-flex bg-primary text-white-50">
                <div class="flex-grow-1">
                    <h5 class="mb-1 text-white fs-13 profile-username">Scott Median</h5>
                    <p class="mb-0 fs-12 lh-1">Active</p>
                </div>
                <div class="flex-shrink-0">
                    <div class="mt-n3 me-n3">
                        <button type="button" class="text-white btn btn-link fs-16 text-decoration-none" id="emailchat-btn-close"><i class="ri-close-fill"></i></button>
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="p-0 card-body">
                <div id="users-chat">
                    <div class="p-3 chat-conversation" id="chat-conversation" data-simplebar style="height: 250px;">
                        <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                            <li class="chat-list left">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="assets/images/users/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Good morning 😊</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="apps-mailbox.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-reply-line me-2 text-muted"></i>Reply</a>
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-file-copy-line me-2 text-muted"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="apps-mailbox.html#"><i class="align-bottom ri-delete-bin-5-line me-2 text-muted"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="align-bottom ri-check-double-line"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                            <li class="chat-list right">
                                <div class="conversation-list">
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="apps-mailbox.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-reply-line me-2 text-muted"></i>Reply</a>
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-file-copy-line me-2 text-muted"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="apps-mailbox.html#"><i class="align-bottom ri-delete-bin-5-line me-2 text-muted"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="align-bottom ri-check-double-line"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                            <li class="chat-list left">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="assets/images/users/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="apps-mailbox.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-reply-line me-2 text-muted"></i>Reply</a>
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-file-copy-line me-2 text-muted"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="apps-mailbox.html#"><i class="align-bottom ri-delete-bin-5-line me-2 text-muted"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="align-bottom ri-check-double-line"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                            <li class="chat-list right">
                                <div class="conversation-list">
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Wow that's great</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="apps-mailbox.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-reply-line me-2 text-muted"></i>Reply</a>
                                                    <a class="dropdown-item" href="apps-mailbox.html#"><i class="align-bottom ri-file-copy-line me-2 text-muted"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="apps-mailbox.html#"><i class="align-bottom ri-delete-bin-5-line me-2 text-muted"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="align-bottom ri-check-double-line"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                        </ul>
                    </div>
                </div>

                <div class="border-top border-top-dashed">
                    <div class="mx-3 mt-2 mb-3 row g-2">
                        <div class="col">
                            <div class="position-relative">
                                <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                            </div>
                        </div><!-- end col -->
                        <div class="col-auto">
                            <button type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div><!-- end cardbody -->
        </div>
    </div>
    <!-- end email chat detail -->
</div>
<!-- container-fluid -->

<!--ckeditor js-->
<script src="{{ asset('assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

<!-- mailbox init -->
<script src="{{ asset('assets/js/pages/mailbox.init.js') }}"></script>

@endsection
