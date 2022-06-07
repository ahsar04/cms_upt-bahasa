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
                            <li class="menu-header">Content</li>
                            <li>
                                <a class="nav-link" href="{{ route('history') }}"
                                    ><i class="fas fa-newspaper"></i>
                                    <span>History</span></a
                                >
                            </li>
                        </ul>

                        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a
                                href="{{ route('home') }}"
                                class="btn btn-secondary btn-lg btn-block"
                            >
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div> --}}
                    </aside>
                </div>