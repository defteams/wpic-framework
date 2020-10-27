 <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-light navbar-theme-primary">
    <div class="container">
        <a class="navbar-brand @@logo_classes" href="../../index.html">
            <img class="navbar-brand-dark common" src="<?php echo get_dist_directory(); ?>/assets/img/brand/light.svg" height="35" alt="Logo light">
            <img class="navbar-brand-light common" src="<?php echo get_dist_directory(); ?>/assets/img/brand/dark.svg" height="35" alt="Logo dark">
        </a>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../../index.html">
                            <img src="<?php echo get_dist_directory(); ?>/assets/img/brand/dark.svg" height="35" alt="Logo Impact">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                            data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                            aria-label="Toggle navigation"></a>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover justify-content-center">
                <li class="nav-item">
                    <a href="../../index.html" class="nav-link">Overview</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                        <span class="nav-link-inner-text">Front pages</span>
                        <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                    </a>
                    <ul class="dropdown-menu" id="pages_submenu">
                        <li><a class="dropdown-item" href="../pages/index.html">Landing</a></li>
                        <li><a class="dropdown-item" href="../pages/about.html">About</a></li>
                        <li><a class="dropdown-item" href="../pages/pricing.html">Pricing</a></li>
                        <li><a class="dropdown-item" href="../pages/contact.html">Contact</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                        <span class="nav-link-inner-text">App pages</span>
                        <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                    </a>
                    <ul class="dropdown-menu" id="pages_submenu">
                        <li><a class="dropdown-item" href="../../dashboard/pages/dashboards/dashboard.html">Dashboard</a></li>
                        <li><a class="dropdown-item" href="../../dashboard/pages/examples/login.html">Login</a></li>
                        <li><a class="dropdown-item" href="../../dashboard/pages/examples/register.html">Register</a></li>
                        <li><a class="dropdown-item" href="../../dashboard/pages/examples/profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="../../dashboard/pages/tables/tables.html">Tables</a></li>
                        <li><a class="dropdown-item" href="../../dashboard/pages/maps/google.html">Maps</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" data-toggle="dropdown">
                        <span class="nav-link-inner-text mr-1">Support</span>
                        <i class="fas fa-angle-down nav-link-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg">
                        <div class="col-auto px-0" data-dropdown-content>
                            <div class="list-group list-group-flush">
                                <a href="https://demos.creative-tim.com/impact-design-system-pro/docs/getting-started/overview/"
                                    class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                    <span class="icon icon-sm icon-secondary"><i class="fas fa-file-alt"></i></span>
                                    <div class="ml-4">
                                        <span class="text-dark d-block">Documentation<span
                                                class="badge badge-sm badge-secondary ml-2">v1.0</span></span>
                                        <span class="small">Examples and guides</span>
                                    </div>
                                </a>
                                <a href="https://github.com/creativetimofficial/impact-design-system/issues" target="_blank"
                                    class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                    <span class="icon icon-sm icon-primary"><i
                                            class="fas fa-microphone-alt"></i></span>
                                    <div class="ml-4">
                                        <span class="text-dark d-block">Support</span>
                                        <span class="small">Found a bug? Create an issue!</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block @@cta_button_classes">
            <a href="https://demos.creative-tim.com/impact-design-system-pro/docs/dashboard/alerts/" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3"><i class="fas fa-th-large mr-2"></i> Components</a>
            <a href="https://www.creative-tim.com/product/impact-design-system-pro" target="_blank" class="btn btn-md btn-secondary animate-up-2"><i class="fas fa-paper-plane mr-2"></i> Upgrade to Pro</a>
        </div>
        <div class="d-flex d-lg-none align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        </div>
    </div>
</nav>