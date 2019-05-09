<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-cog"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-trash"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <a href="{{url('border_trash')}}"><li style="list-style: none;font-size: 33px;">Border &nbsp;<span style="color: red; font-size: 18px;">{{$border}}</span></li></a>
            <a href=""><li style="list-style: none">Bazar &nbsp;<span class="fa fa-trash" style="color: red; font-size: 13px;"></span></li></a>
            <a href=""><li style="list-style: none">Notice &nbsp;<span class="fa fa-trash" style="color: red; font-size: 13px;"></span></li></a>


        </div>

        <!-- /.tab-pane -->

        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <a href="{{route('users.index')}}"><li style="list-style: none">User </li></a>
            <a href="{{route('permissions.index')}}"><li style="list-style: none">Permission</li></a>
            <a href="{{route('roles.index')}}"><li style="list-style: none">Role</li></a>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>