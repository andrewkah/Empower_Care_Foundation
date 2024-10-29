<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('backend/images/icon/logo.png') }}" alt="logo"></a>
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
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Articles
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{route('article-categories.index')}}">Categories</a></li>
                            <li><a href="{{route('articles.index')}}">Articles</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('causes.index')}}"><i class="ti-map-alt"></i> <span>Causes</span></a></li>
                    <li><a href="{{route('donations.index')}}"><i class="ti-map-alt"></i> <span>Donations</span></a></li>
                    <li><a href="#"><i class="ti-map-alt"></i> <span>Downloads</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Events
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{route('event-categories.index')}}">Categories</a></li>
                            <li><a href="{{route('events.index')}}">Events</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Gallery</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('album.index')}}">Album</a></li>
                            <li><a href="{{route('videos.index')}}">Video</a></li>
                            {{-- <li><a href="piechart.html">pie chart</a></li> --}}
                        </ul>
                    </li>
                    <li><a href="{{route('contact.index')}}"><i class="ti-map-alt"></i> <span>Inquiries</span></a></li>
                    <li><a href="{{route('programs.index')}}"><i class="ti-map-alt"></i> <span>Programs</span></a></li>
                    
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Settings</span></a>
                        <ul class="collapse">
                            <li><a href="{{route('partners.index')}}">Partners</a></li>
                            <li><a href="{{route('teams.index')}}">Team</a></li>
                            <li><a href="#">Users</a></li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>