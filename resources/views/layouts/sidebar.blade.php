<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src={{ asset('admin-assets/dist/img/user2-160x160.jpg') }} class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>علیرضا حسینی زاده</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستجو">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li class="active treeview">

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>بازار</span>
                    <span class="pull-left-container">
                        <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> دسته
                            بندی</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> فرم کالا</a></li>
                    <li><a href="{{ route('admin.market.brand.index') }}"><i class="fa fa-circle-o"></i> برندها</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> کالاها</a>
                    </li>
                    <li><a href=""><i class="fa fa-circle-o"></i> انبار</a></li>
                    <li><a href=><i class="fa fa-circle-o"></i> نظرات</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>سفارشات</span>
                    <span class="pull-left-container">
                        <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> دسته بیندی</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> فرم کالا</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> برندها</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> کالاها</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> انبار</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> نظرات</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>پرداخت ها</span>
                    <span class="pull-left-container">
                        <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> دسته بیندی</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> فرم کالا</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> برندها</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> کالاها</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> انبار</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> نظرات</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>تخفیف ها</span>
                    <span class="pull-left-container">
                        <i class="fa fa-angle-right pull-left"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> دسته بیندی</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> فرم کالا</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> برندها</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> کالاها</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> انبار</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> نظرات</a></li>
                </ul>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>روش ارسال ها</span>
                    <span class="pull-left-container">
                    </span>
                </a>
        </ul>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">بخش محتوا</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>دسته بندی</span>
                    <span class="pull-left-container">
                    </span>
                </a>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>پست ها</span>
                    <span class="pull-left-container">
                    </span>
                </a>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>نظرات</span>
                    <span class="pull-left-container">
                    </span>
                </a>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>منو</span>
                    <span class="pull-left-container">
                    </span>
                </a>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>سوالات متداول</span>
                    <span class="pull-left-container">
                    </span>
                </a>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>پیچ ساز</span>
                    <span class="pull-left-container">
                    </span>
                </a>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
