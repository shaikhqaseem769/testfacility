<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-expand-md navbar-inverse"
     role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" da
                ta-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center">
            <!-- <img class="navbar-brand-logo" src="{{ asset('assets/images/logo.png') }}" title="{{ env('APP_NAME') }}"> -->
            Test Facility
        </div>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                    <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="nav-item hidden-float">
                    <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li>
                    <div id="google_translate_element"></div>
                </li>
                <li class="nav-item ">
                    @if(Auth::user()->user_type === 'user')
                    <a class="nav-link"  href="{{ route('search') }}" > 
                        Search
                    </a>
                    @endif
                    <!-- <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                       aria-expanded="false" role="button"> 
                        <span class="flag-icon flag-icon-in"></span>
                    </a> -->
                    {{--<div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-in"></span> India</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-gb"></span> English</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-fr"></span> French</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-de"></span> German</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                            <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                    </div>--}}
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">{{ Auth::user()->name }}
                      <span class="avatar avatar-online">
                        <img src="{{ asset('assets/portraits/5.jpg') }}" alt="...">
                        <i></i>
                      </span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                        <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" role="menuitem"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon wb-power" aria-hidden="true"></i>
                            Logout
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                       aria-expanded="false" data-animation="scale-up" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        <span class="badge badge-pill badge-danger up">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <div class="dropdown-menu-header">
                            <h5>NOTIFICATIONS</h5>
                            <span class="badge badge-round badge-danger">New 5</span>
                        </div>

                        <div class="list-group">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                                                <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">A new order has been placed</h6>
                                                <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                                                <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Completed the task</h6>
                                                <time class="media-meta" datetime="2018-06-11T18:29:20+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                                                <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Settings updated</h6>
                                                <time class="media-meta" datetime="2018-06-11T14:05:00+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                                                <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Event started</h6>
                                                <time class="media-meta" datetime="2018-06-10T13:50:18+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                                                <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Message received</h6>
                                                <time class="media-meta" datetime="2018-06-10T12:34:48+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                All notifications
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
                       aria-expanded="false" data-animation="scale-up" role="button">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                        <span class="badge badge-pill badge-info up">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <div class="dropdown-menu-header" role="presentation">
                            <h5>MESSAGES</h5>
                            <span class="badge badge-round badge-info">New 3</span>
                        </div>

                        <div class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="{{ asset('assets/portraits/2.jpg') }}" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Mary Adams</h6>
                                                <div class="media-meta">
                                                    <time datetime="2018-06-17T20:22:05+08:00">30 minutes ago</time>
                                                </div>
                                                <div class="media-detail">Anyways, i would like just do it</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="{{ asset('assets/portraits/3.jpg') }}" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Caleb Richards</h6>
                                                <div class="media-meta">
                                                    <time datetime="2018-06-17T12:30:30+08:00">12 hours ago</time>
                                                </div>
                                                <div class="media-detail">I checheck the document. But there seems</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="{{ asset('assets/portraits/4.jpg') }}" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">June Lane</h6>
                                                <div class="media-meta">
                                                    <time datetime="2018-06-16T18:38:40+08:00">2 days ago</time>
                                                </div>
                                                <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="pr-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="{{ asset('assets/portraits/5.jpg') }}" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Edward Fletcher</h6>
                                                <div class="media-meta">
                                                    <time datetime="2018-06-15T20:34:48+08:00">3 days ago</time>
                                                </div>
                                                <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                See all messages
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item" id="toggleChat">
                    <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
                       data-url="../site-sidebar.tpl">
                        <i class="icon wb-chat" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>