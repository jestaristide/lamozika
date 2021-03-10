<template>

    <div>
        <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
            <a class="navbar-brand mr-lg-5" href="#l">
                <img class="navbar-brand-dark" src="/admin/assets/img/brand/light.svg" alt="Volt logo" />
                <img class="navbar-brand-light" src="/admin/assets/img/brand/dark.svg" alt="Volt logo" />
            </a>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid bg-soft">
            <div class="row">
                <div class="col-12">
                    <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
                        <div class="sidebar-inner px-4 pt-3">
                            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                                <div class="d-flex align-items-center">
                                    <div class="user-avatar lg-avatar mr-4">
                                        <img src="/admin/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                                    </div>
                                    <div class="d-block">
                                        <h2 class="h6">Hi, Jane</h2>
                                        <a href="#" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                                    </div>
                                </div>
                                <div class="collapse-close d-md-none">
                                    <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                                       data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                                       aria-label="Toggle navigation"></a>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item" :active="route().current('dashboard')">
                                    <inertia-link :href="route('dashboard')" class="nav-link">
                                        <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                                        <span>Overview</span>
                                    </inertia-link>
                                </li>
                                <li class="nav-item">
                                    <inertia-link :href="route('artiste.index')" class="nav-link">
                                        <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
                                        <span>Artistes</span>
                                    </inertia-link>
                                </li>
                                <li class="nav-item">
                                    <inertia-link :href="route('musique.index')" class="nav-link">
                                        <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                        <span>Musiques</span>
                                    </inertia-link>
                                </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link">
                                        <span class="sidebar-icon"><span class="fas fa-table"></span></span>
                                        <span>Articles</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link">
                                        <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                                        <span>Configurations</span>
                                    </a>
                                </li>

                                <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

                                <li class="nav-item">
                                    <inertia-link :href="route('dashboard')" class="nav-link d-flex align-items-center">
                                        <span class="sidebar-icon"><span class="fas fa-book"></span></span>
                                        <span>Deconnexion</span>
                                    </inertia-link>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <main class="content">

                        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
                            <div class="container-fluid px-0">
                                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                                    <div class="d-flex">
                                        <!-- Search form -->
                                        <form class="navbar-search form-inline" id="navbar-search-main">
                                            <div class="input-group input-group-merge search-bar">
                                                <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                                                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Navbar links -->
                                    <ul class="navbar-nav align-items-center">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link text-dark mr-lg-3 icon-notifications" data-unread-notifications="true" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon icon-sm">
                                                    <span class="fas fa-bell bell-shake"></span>
                                                    <span class="icon-badge rounded-circle unread-notifications"></span>
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="text-center text-primary font-weight-bold border-bottom border-light py-3">Notifications</a>
                                                    <a href="/admin/pages/calendar.html" class="list-group-item list-group-item-action border-bottom border-light">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <img alt="Image placeholder" src="/admin/assets/img/team/profile-picture-1.jpg" class="user-avatar lg-avatar rounded-circle">
                                                            </div>
                                                            <div class="col pl-0 ml--2">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <small class="text-danger">a few moments ago</small>
                                                                    </div>
                                                                </div>
                                                                <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <img alt="Image placeholder" src="/admin/assets/img/team/profile-picture-2.jpg" class="user-avatar lg-avatar rounded-circle">
                                                            </div>
                                                            <div class="col pl-0 ml--2">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <small class="text-danger">2 hrs ago</small>
                                                                    </div>
                                                                </div>
                                                                <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <img alt="Image placeholder" src="/admin/assets/img/team/profile-picture-3.jpg" class="user-avatar lg-avatar rounded-circle">
                                                            </div>
                                                            <div class="col pl-0 ml--2">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <small>5 hrs ago</small>
                                                                    </div>
                                                                </div>
                                                                <p class="font-small mt-1 mb-0">Tagged you in a document called "First quarter financial plans",</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <img alt="Image placeholder" src="/admin/assets/img/team/profile-picture-4.jpg" class="user-avatar lg-avatar rounded-circle">
                                                            </div>
                                                            <div class="col pl-0 ml--2">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <small>1 d ago</small>
                                                                    </div>
                                                                </div>
                                                                <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <!-- Avatar -->
                                                                <img alt="Image placeholder" src="/admin/assets/img/team/profile-picture-5.jpg" class="user-avatar lg-avatar rounded-circle">
                                                            </div>
                                                            <div class="col pl-0 ml--2">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <small>2 hrs ago</small>
                                                                    </div>
                                                                </div>
                                                                <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="media d-flex align-items-center">
                                                    <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="/admin/assets/img/team/profile-picture-3.jpg">
                                                    <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                                        <span class="mb-0 font-small font-weight-bold">Bonnie Green</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <slot></slot>

                    </main>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {

}
</script>

<style>
@import url('/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css');
@import url('/admin/vendor/notyf/notyf.min.css');
@import url('/admin/css/volt.css');
</style>
