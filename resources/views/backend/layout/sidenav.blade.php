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
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-newspaper-o"></i><span>Articles</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('article-categories.index')}}"><i class="fa fa-tag"></i> Categories</a></li>
                            <li><a href="{{route('articles.index')}}"><i class="fa fa-file"></i> Articles</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('banner.index')}}"><i class="fa fa-image"></i> <span>Banners</span></a></li>
                    <li><a href="{{route('causes.index')}}"><i class="fa fa-heartbeat"></i> <span>Causes</span></a></li>
                    <li><a href="{{route('donations.index')}}"><i class="fa fa-money"></i> <span>Donations</span></a></li>
                    <li><a href="{{route('volunteers.index')}}"><i class="fa fa-graduation-cap"></i> <span>Volunteers</span></a></li>
                    <li><a href="{{route('faqs.index')}}"><i class="fa fa-download"></i> <span>FAQs</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-calendar"></i><span>Events</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('event-categories.index')}}"><i class="fa fa-tag"></i> Categories</a></li>
                            <li><a href="{{route('events.index')}}"><i class="fa fa-calendar-check-o"></i> Events</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-camera"></i><span>Gallery</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('album.index')}}"><i class="fa fa-picture-o"></i> Album</a></li>
                            <li><a href="{{route('videos.index')}}"><i class="fa fa-video-camera"></i> Video</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('contact.index')}}"><i class="fa fa-envelope-o"></i> <span>Inquiries</span></a></li>
                    <li><a href="{{route('programs.index')}}"><i class="fa fa-graduation-cap"></i> <span>Programs</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('partners.index')}}"><i class="fa fa-handshake-o"></i>Partners</a></li>
                            <li><a href="{{route('teams.index')}}"><i class="fa fa-users"></i> Team</a></li>
                            <li><a href="{{ route('users.index')}}"><i class="fa fa-user"></i> Users</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
