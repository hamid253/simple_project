<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')



    </div>
    
    @include('admin.layouts.scripts')
    @yield('scripts')
</body>

</html>
