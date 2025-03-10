<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('admin-home')}}"><img src="{{ asset('assets/images/empower-logo/logo.jpg') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li >
                        <a href="{{route('admin-home')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        
                    </li>
                    <li>
                        @can('article-show')
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-newspaper-o"></i><span>Our Stories</span></a>
                            <ul class="collapse">
                                <li><a href="{{route('article-categories.index')}}"><i class="fa fa-tag"></i>Categories</a></li>
                                <li><a href="{{route('articles.index')}}"><i class="fa fa-file"></i>Our Stories</a></li>
                            </ul>
                        @endcan
                    </li>
                    <li>
                        {{-- @can('department-show') --}}
                            <a href="{{route('departments.index')}}"><i class="fa fa-graduation-cap"></i> <span>Departments</span></a>
                        {{-- @endcan --}}
                    </li>
                    <li>
                        @can('banner-show')
                            <a href="{{route('banner.index')}}"><i class="fa fa-image"></i> <span>Banners</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('cause-show')
                            <a href="{{route('impacts.index')}}"><i class="fa fa-heartbeat"></i> <span>Our Impacts</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('aboutus-show')
                            <a href="{{route('aboutus.index')}}"><i class="fa fa-download"></i> <span>About Us</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('donation-show')
                            <a href="{{route('donations.index')}}"><i class="fa fa-money"></i> <span>Donations</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('policy-show')
                            <a href="{{route('policies.index')}}"><i class="fa fa-file-text-o"></i> <span>Policies</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('volunteer-show')
                            <a href="{{route('volunteers.index')}}"><i class="fa fa-graduation-cap"></i> <span>Volunteers</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('faqs-show')
                            <a href="{{route('faqs.index')}}"><i class="fa fa-download"></i> <span>FAQs</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('event-show')
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-calendar"></i><span>Events</span></a>
                            <ul class="collapse">
                                <li><a href="{{route('event-categories.index')}}"><i class="fa fa-tag"></i> Categories</a></li>
                                <li><a href="{{route('events.index')}}"><i class="fa fa-calendar-check-o"></i> Events</a></li>
                            </ul>
                        @endcan
                    </li>
                    <li>
                        @can('album-show')
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-camera"></i><span>Gallery</span></a>
                            <ul class="collapse">
                                <li><a href="{{route('album.index')}}"><i class="fa fa-picture-o"></i> Album</a></li>
                                @can('video-show')
                                <li><a href="{{route('videos.index')}}"><i class="fa fa-video-camera"></i> Video</a></li>
                                @endcan
                                
                            </ul>
                        @endcan
                    </li>
                    <li>
                        @can('inquires-show')
                            <a href="{{route('contact.index')}}"><i class="fa fa-envelope-o"></i> <span>Inquiries</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('program-show')
                            <a href="{{route('programs.index')}}"><i class="fa fa-graduation-cap"></i> <span>Programs</span></a>
                        @endcan
                    </li>
                    <li>
                        @can('settings-view')
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cog"></i> <span>Settings</span></a>
                            <ul class="collapse">
                                @can('partner-show')
                                <li><a href="{{route('partners.index')}}"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partners</a></li>
                                @endcan
                                
                                @can('role-show')
                                <li><a href="{{route('roles.index')}}"><i class="fa fa-lock"></i> Roles</a></li>
                                @endcan
                                @can('team-show')
                                <li><a href="{{route('teams.index')}}"><i class="fa fa-users"></i> Team</a></li>
                                @endcan
                                
                                @can('user-show')
                                <li><a href="{{ route('users.index')}}"><i class="fa fa-user"></i> Users</a></li>
                                @endcan
                                
                            </ul>
                        @endcan
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
