<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{$urlAdmin}}/img/find_user.png" class="user-image img-responsive" />
            </li>
            <li>
                <a class="{{ Request::is('admincp/index*') ? 'active-menu' : ''}}" href="{{route('admin.index')}}"><i class="fa fa-dashboard fa-3x"></i> Trang chủ </a>
            </li>
            <li class="">
                <a class="" href="#"><i class="fa fa-sitemap fa-3x"></i> Quản lý thông tin <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse {{ Request::is('admincp/about*') ? 'in' : '' }}" style="height: auto;">
                    <li>
                        <a class="{{ Request::is('admincp/about/gioithieu') ? 'active-menu' : ''}}" href="{{route('admin.about.gioithieu')}}">Giới Thiệu</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('admincp/about/chinhsach') ? 'active-menu' : ''}}" href="{{route('admin.about.chinhsach')}}">Chính sách</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('admincp/about/huongdan') ? 'active-menu' : ''}}" href="{{route('admin.about.huongdan')}}">HD mua hàng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="{{ Request::is('admincp/cat*') ? 'active-menu' : '' }}" href="{{route('admin.cat.index')}}"><i class="fa fa-bar-chart-o fa-3x"></i> Quản lý danh mục </a>
            </li>
            <li>
                <a class="{{ Request::is('admincp/sanpham/*') ? 'active-menu' : ''}}" href="{{route('admin.sanpham.index')}}"><i class="fa fa-qrcode fa-3x"></i> Quản lý sản phẩm </a>
            </li>
            <li>
                <a><i class="fa fa-qrcode fa-3x"></i> Quản lý đơn hàng </a>
                <ul class="nav nav-second-level collapse {{ Request::is('admincp/donhang*') ? 'in' : '' }}" style="height: auto;">
                    <li>
                        <a class="{{ Request::is('admincp/donhang/don-hang-moi') ? 'active-menu' : ''}}" href="{{route('admin.donhang.moi')}}">Đơn hàng mới</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('admincp/donhang/nhan-vien-nhan') ? 'active-menu' : ''}}" href="{{route('admin.donhang.nhanvien')}}">Đơn hàng bạn xử lý</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('admincp/donhang/index') ? 'active-menu' : ''}}" href="{{route('admin.donhang.index')}}">Tất cả đơn hàng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="{{ Request::is('admincp/slide*') ? 'active-menu' : '' }}" href="{{route('admin.slide.index')}}"><i class="fa fa-desktop fa-3x"></i> Quản lý slide </a>
            </li>
            <li>
                <a class="{{ Request::is('admincp/contact*') ? 'active-menu' : '' }}" href="{{route('admin.contact.index')}}"><i class="fa fa-edit fa-3x"></i> Quản lý liên hệ </a>
            </li>
            <li>
                <a class="{{ Request::is('admincp/user*') ? 'active-menu' : '' }}" href="{{route('admin.user.index')}}"><i class="fa fa-table fa-3x"></i> Quản lý user</a>
            </li>
        </ul>   
    </div>
</nav>
<!-- /. NAV SIDE  -->