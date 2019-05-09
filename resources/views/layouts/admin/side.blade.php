<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar users panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>

            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="">
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Border's</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('border.index')}}"><i class="fa fa-circle-o"></i> Current Border's</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> Ex-Border's</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hand-spock-o"></i>
                    <span>Mill's</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('meal.index')}}"><i class="fa fa-circle-o"></i> This Month</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Mill's History</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Bazar List</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Running Bazar List</a></li>
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create New Bazar List</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Old Bazar List</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Charge</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> B.T.V Fee</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Current Bill</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Development Fee</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Annual Fee</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Fine </a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Extra Fee</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Notice</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Create New Notice</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Notice</a></li>
                </ul>
            </li>
            <li><a href=""><i class="fa fa-book"></i> <span>Facility</span></a></li>
            <li><a href="><i class="fa fa-envira"></i> <span>Help</span></a></li>
            <li class="header">Only For Admin</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i> <span>Manager</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> Create New Manager</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> Manager List</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>