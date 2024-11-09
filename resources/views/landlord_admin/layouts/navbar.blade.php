<!-- LOGO -->
<div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="{{route('guest.home')}}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="/admin/assets/images/logo-dark.png" alt="" height="17">
        </span>
    </a>
    <!-- Light Logo-->
    <a href="{{route('guest.home')}}" class="logo logo-light">
        <span class="logo-sm">
            <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="/admin/assets/images/logo-light.png" alt="" height="17">
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>

<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
                <a class="nav-link menu-link" href="{{ route('landlord_admin.dashboard') }}" aria-expanded="false"
                    aria-controls="sidebarDashboards">
                    <i class="ri-dashboard-2-line"></i>
                    <span data-key="1">Bảng điều khiển</span>
                </a>
            </li> <!-- end Dashboard Menu -->

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarMultilevel">
                    <i class="ri-share-line"></i> <span data-key="t-multi-level">Quản lý danh mục</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarMultilevel">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-key="t-level-1.1"> Danh sách </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarApps">
                    <i class="ri-apps-2-line"></i><span data-key="1">Quản lý Phòng</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarApps">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('landlord_admin.room.list') }}" class="nav-link">
                                Danh sách phòng
                            </a>
                            {{-- <div class="collapse menu-dropdown" id="sidebarCalendar">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" data-key="t-main-calender">
                                            Main Calender </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-calendar-month-grid.html" class="nav-link"
                                            data-key="t-month-grid"> Month Grid </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('landlord_admin.service.list') }}" class="nav-link">
                                Danh sách dịch vụ
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarPages">
                    <i class="ri-pages-line"></i><span data-key="1">Quản lý tin đăng</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarPages">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('landlord_admin.article.list')}}" class="nav-link" data-key="t-starter">
                                Tin đã đăng </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-starter.html" class="nav-link" data-key="t-starter">
                                Tin chờ phê duyệt </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('landlord_admin.article.create') }}" class="nav-link">
                                Đăng tin
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            
        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>
