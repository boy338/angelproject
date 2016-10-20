<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/backend/admin-lte/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Dashboard -->
            <li class="active">
				<a href="{{ url('back') }}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>

			<!-- User -->
            <li class="treeview">
                <a href="#">
					<i class="fa fa-user"></i>
					<span>User</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('user/sort') }}">See all</a></li>
                    <li><a href="{{ url('user/create') }}">Add</a></li>
{{--
                    <li><a href="#">Roles</a></li>
                    <li><a href="#">Blog report</a></li>
--}}
                </ul>
            </li>

{{--
			<!-- Message -->
            <li>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Message</span>
                </a>
            </li>
--}}
			<!-- Articles -->
            <li class="treeview">
                <a href="#">
					<i class="fa fa-pencil"></i>
					<span>Articles</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
                <ul class="treeview-menu">
                    <li><a href="#">See all</a></li>
                    <li><a href="{!! url('blog/create') !!}">Add</a></li>
                </ul>
            </li>

			<!-- Activities -->
            <li class="treeview">
                <a href="#">
					<i class="fa fa-youtube-play"></i>
					<span>Activities</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
                <ul class="treeview-menu">
                    <li><a href="#">See all</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>

			<!-- Forecast -->
            <li class="treeview">
                <a href="#">
					<i class="fa fa-eye"></i>
					<span>Forecast</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
                <ul class="treeview-menu">
                    <li><a href="#">See all</a></li>
                    <li><a href="#">Add</a></li>
                </ul>
            </li>

			<!-- Medias -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder-open-o"></i>
					<span>Medias</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
                </a>
				<ul class="treeview-menu">
                    <li><a href="#">images</a></li>
                    <li><a href="#">videos</a></li>
                </ul>
            </li>

			<!-- Comment -->
            <li>
                <a href="#">
                    <i class="fa fa-comments"></i> <span>Comment</span>
                </a>
            </li>

			<!-- Config -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i>
					<span>Config</span>
					<span class="pull-right-container">
                    	<i class="fa fa-angle-left pull-right"></i>
					</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
