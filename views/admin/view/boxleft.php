<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">ADMIN<sup>*</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item 
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
- Dashboard -->


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Danh mục sản phẩm</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Chính :  </h6>
            <a class="collapse-item" href="index.php?act=list_dm">Quản lí danh mục  </a>
            <a class="collapse-item" href="index.php?act=danhsach_sp">Quản lí sản phẩm </a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Quản lí đơn hàng </span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Loại </h6>
            <a class="collapse-item" href="index.php?act=listdh">Danh sách đơn hàng </a>
            <a class="collapse-item" href="index.php?act=xacnhandh">Đơn hàng đang xử lí </a>
            <a class="collapse-item" href="index.php?act=donhang_xacnhan">Đơn hàng đã xác nhận </a>
            <a class="collapse-item" href="index.php?act=donhang_danggiao">Đơn hàng đang giao  </a>
            <a class="collapse-item" href="index.php?act=hoanthanh_donhang">Đơn hàng hoàn tất  </a>
            <a class="collapse-item" href="index.php?act=huydh">Đơn hàng bị hủy  </a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Tài Khoản 
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Quản lí tài khoản </span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tài Khoản </h6>
            <a class="collapse-item" href="index.php?act=dskh"> Danh sách tài khoản </a>
         
            <div class="collapse-divider"></div>
            
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesss"
        aria-expanded="true" aria-controls="collapsePagesss">
        <i class="fas fa-fw fa-folder"></i>
        <span>Quản lí bình luận  </span>
    </a>
    <div id="collapsePagesss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bình luận  </h6>
            <a class="collapse-item" href="index.php?act=danhsachbl"> Danh sách bình luận  </a>
            
            <a class="collapse-item" href="index.php?act=blog"> Quản lí Blog  </a>
            <!-- <a class="collapse-item" href="index.php?act=danhsachbl"> Bình luận từ chối   </a> -->
           

            <div class="collapse-divider"></div>
            
        </div>
    </div>
</li>
<!-- Nav Item - Charts -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapseds" href="index.php?act=tkdm" data-toggle="collapse" data-target="#collapsePagess"
        aria-expanded="true" aria-controls="collapsePagess">
        <i class="fas fa-fw fa-folder"></i>
        <span> Thống kê </span></a>
    </a>
    <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="index.php?act=tkdm"> Thống kê danh mục </a>
            <a class="collapse-item" href="index.php?act=tksp"> Thống kê sản phẩm </a>
            <a class="collapse-item" href="index.php?act=bieudo"> Biểu đồ thống kê </a>
            <!-- <a class="collapse-item" href="index.php?act=tksp"> Sản phẩm </a> -->
        
        </div>
    </div>
</li>


<!-- Nav Item - Tables -->
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->