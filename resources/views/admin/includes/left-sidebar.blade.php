<div class="default-sidebar">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <li class="active">
                <a href="#"><i class="la la-columns"></i><span>Dashboard</span></a>
            </li>
        </ul>
        {{-- <span class="heading">Components</span> --}}
        <ul class="list-unstyled">
            <li>
                <a href="#dropdown-app" aria-expanded="true" data-toggle="collapse" ><i
                        class="la la-user"></i><span>Users</span></a>
                <ul id="dropdown-app" class="collapse list-unstyled pt-0 show">
                    <li><a class="{{request()->routeIs('admin')?'active':''}}" href="">Student</a></li>
                    <li><a href="">Admission</a></li>
                    <li><a href="">Teacher</a></li>
                    <li><a href="">Teacher Permission</a></li>
                    <li><a href="">Parent</a></li>
                    <li><a href="">Accountant</a></li>
                    <li><a href="">Librarian</a></li>
                </ul>
            </li>
            <li><a href="#school-setting" aria-expanded="false" data-toggle="collapse"><i
                        class="la la-gear"></i><span>Setting</span></a>
                <ul id="school-setting" class="collapse list-unstyled pt-0">
                    <li><a href="">School Setting</a></li>
                </ul>
            </li>
        </ul>
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->
