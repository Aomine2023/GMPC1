@php
    $activeRoute = Route::currentRouteName();
@endphp
<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <h5 style="color: #fff; padding-top:20px;">ADMIN:TRG AFRICA</h5>
            </span>
        </a>
        <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ $activeRoute === 'dashboard' ? 'active locked' : '' }}"
                        href="{{ route('dashboard') }}" role="button" aria-expanded="false"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
               
                <li class="nav-item">
                    <a class="nav-link menu-link" href="charts-apex-bar.html#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Invesment</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media
                                            object</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed
                                            Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="charts-apex-bar.html#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">NewsFeeds</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet
                                    Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable
                                    List</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-animation.html" class="nav-link" data-key="t-animation">Animation</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-tour.html" class="nav-link" data-key="t-tour">Tour</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper
                                    Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">
                        Components</span>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="pages-profile.html#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Company Portfolios</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('add-company') }}"  class="nav-link" data-key="t-horizontal">Add Company</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Settings</span>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Settings</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.html#sidebarIcons" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Setting</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            {{-- <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link" data-key="t-remix">Roles</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link"
                                    data-key="t-boxicons">Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
