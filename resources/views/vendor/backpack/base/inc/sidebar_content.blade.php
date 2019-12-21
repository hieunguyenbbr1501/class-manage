<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('post') }}'><i class='nav-icon fa fa-volume-up'></i>Thông báo</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-group"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-group"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>Permissions</span></a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('student') }}'><i class='nav-icon fa fa-graduation-cap'></i>Sinh viên</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('lecturer') }}'><i class="nav-icon fa fa-graduation-cap"></i>Giảng viên</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ url('admin/insert/student') }}'><i class="nav-icon fa fa-file-excel-o"></i>Nhập danh sách sinh viên</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ url('admin/insert/lecturer') }}'><i class="nav-icon fa fa-file-excel-o"></i>Nhập danh sách giảng viên</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-group"></i>Quản lý kì học</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('year') }}'><i class='nav-icon fa fa-calendar'></i>Năm học</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('term') }}'><i class='nav-icon fa fa-suitcase'></i>Học kì</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('course') }}'><i class='nav-icon fa fa-book'></i>Khóa học</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('lecture') }}'><i class='nav-icon fa fa-sticky-note'></i>Bài giảng</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-certificate"></i>Quản lý học phần</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('major') }}'><i class='nav-icon fa fa-certificate'></i>Chuyên ngành</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('subject') }}'><i class='nav-icon fa fa-sticky-note-o'></i>Môn học</a></li>

    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon fa fa-hdd-o'></i> Backups</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon fa fa-terminal'></i> Logs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon fa fa-cog'></i> Settings</a></li>

