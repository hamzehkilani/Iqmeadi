<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="bi bi-circle"></i><span>Show User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.create') }}">
                        <i class="bi bi-circle"></i><span>Add User</span>
                    </a>
                </li>


            </ul>
        </li><!-- End Components Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-sector" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Sectors</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-sector" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('sector.index') }}">
                        <i class="bi bi-circle"></i><span>Show Sectors</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sector.create') }}">
                        <i class="bi bi-circle"></i><span>Add Sector </span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Clients</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('client.index') }}">
                        <i class="bi bi-circle"></i><span>Show Clients</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('client.create') }}">
                        <i class="bi bi-circle"></i><span>Add Client </span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Service</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('service.index') }}">
                        <i class="bi bi-circle"></i><span>Show Servicess </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('service.create') }}">
                        <i class="bi bi-circle"></i><span>Add Servie</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav --> --}}

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Contacts</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('contact.index') }}">
                        <i class="bi bi-circle"></i><span>Show Contacts </span>
                    </a>
                </li>

            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Teams</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('team.index') }}">
                        <i class="bi bi-circle"></i><span>Show Teams</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('team.create') }}">
                        <i class="bi bi-circle"></i><span>Add Team</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Info Company</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('infoCompany.index') }}">
                        <i class="bi bi-circle"></i><span>Show Info</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('infoCompany.create') }}">
                        <i class="bi bi-circle"></i><span>Add Info</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icon-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Footer</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icon-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('footer.index') }}">
                        <i class="bi bi-circle"></i><span>Show Footer</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('footer.create') }}">
                        <i class="bi bi-circle"></i><span>Add Footer</span>
                    </a>
                </li>

            </ul>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#image-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Images</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="image-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('images.index') }}">
                        <i class="bi bi-circle"></i><span>Show Images</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('images.create') }}">
                        <i class="bi bi-circle"></i><span>Add Image</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#image" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="image" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('imagePost.index') }}">
                        <i class="bi bi-circle"></i><span>Show Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('imagePost.create') }}">
                        <i class="bi bi-circle"></i><span>Add Posts</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#video-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Reels</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="video-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('video.index') }}">
                        <i class="bi bi-circle"></i><span>Show Reels</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('video.create') }}">
                        <i class="bi bi-circle"></i><span>Add Reels</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#WorkUS" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Work US</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="WorkUS" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('showWorkUsView') }}">
                        <i class="bi bi-circle"></i><span>Show Work US</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('AddWorkUsView') }}">
                        <i class="bi bi-circle"></i><span>Add Work Us</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#social-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Social Media</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="social-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('SocialMedia.create') }}">
                        <i class="bi bi-circle"></i><span>Add Social Media</span>
                    </a>
                </li>

            </ul>
        </li>
    </ul>

</aside><!-- End Sidebar-->
