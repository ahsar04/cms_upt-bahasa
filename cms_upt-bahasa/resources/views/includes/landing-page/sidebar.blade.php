<div class="main-sidebar">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="index.html">UPT - Bahasa</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="index.html">U-B</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">Dashboard</li>
                            <li>
                                <a class="nav-link" href="{{ route('dashboard') }}"
                                    ><i class="fas fa-table"></i>
                                    <span>Dashboard</span></a
                                >
                            </li>
                            <li class="menu-header">Master</li>
                            <li>
                                <a class="nav-link" href="{{-- route('teacher') --}}"
                                    ><i class="fas fa-user-graduate"></i>
                                    <span>Teacher</span></a
                                >
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    href="#"
                                    class="nav-link has-dropdown"
                                    data-toggle="dropdown"
                                    ><i class="fas fa-users"></i>
                                    <span>Member</span></a
                                >
                                <ul class="dropdown-menu">
                                    <li>
                                        <a
                                            class="nav-link"
                                            href="{{-- route('member.internal') --}}"
                                            >Internal</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="nav-link"
                                            href="{{-- route('member.external') --}}"
                                            >External</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-header">Content</li>
                            <li>
                                <a class="nav-link" href="{{-- route('news') --}}"
                                    ><i class="fas fa-newspaper"></i>
                                    <span>News</span></a
                                >
                            </li>
                            <li>
                                <a class="nav-link" href="{{-- route('service') --}}"
                                    ><i class="fas fa-book-open"></i>
                                    <span>Service</span></a
                                >
                            </li>
                            <li>
                                <a class="nav-link" href="{{-- route('training') --}}"
                                    ><i class="fas fa-book-reader"></i>
                                    <span>Training</span></a
                                >
                            </li>
                            <li>
                                <a class="nav-link" href="{{-- route('procedure') --}}"
                                    ><i class="fas fa-align-justify"></i>
                                    <span>Procedure</span></a
                                >
                            </li>
                            <li>
                                <a class="nav-link" href="{{-- route('schedule') --}}"
                                    ><i class="fas fa-calendar-alt"></i>
                                    <span>Schedule</span></a
                                >
                            </li>
                            <li class="menu-header">Feedback</li>
                            <li>
                                <a class="nav-link" href="{{-- route('feedback') --}}"
                                    ><i class="fas fa-comment-dots"></i>
                                    <span>Feedback</span></a
                                >
                            </li>
                        </ul>

                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a
                                href="{{-- route('#') --}}"
                                class="btn btn-secondary btn-lg btn-block"
                            >
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </aside>
                </div>