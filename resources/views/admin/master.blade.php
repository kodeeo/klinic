<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Klinic Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('backend/images/favicon.ico')}}">

    <!-- third party css -->
{{--    <link href="{{url('backend/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css"/>--}}
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{url('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style"/>
{{--    <link href="{{url('backend/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style"/>--}}

    <!-- font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- toastr cdn -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- close toastr -->

    {{-- datatable css--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

    <!-- include summernote css/js-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body class="loading"
      data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Begin page -->
<div class="wrapper ">

    @include('admin.fixed.sidebar')

    <div class="content-page">
        @include('admin.fixed.header')
        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('admin.fixed.footer')

</div>
<!--    JavaScripts-->

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{--<script src="{{url('js/popper.min.js')}}"></script>--}}
{{--<script src="{{url('js/bootstrap.min.js')}}"></script>--}}
{{--<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>--}}
{{--<script src="{{url('js/list.min.js')}}"></script>--}}
{{--<script src="{{url('js/theme.js')}}"></script>--}}
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<script src="{{url('backend/js/vendor.min.js')}}"></script>
<script src="{{url('backend/js/app.min.js')}}"></script>

<!-- third party js -->
{{--<script src="{{url('backend/js/vendor/apexcharts.min.js')}}"></script>--}}
{{--<script src="{{url('backend/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>--}}
{{--<script src="{{url('backend/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
<!-- third party js ends -->

<!-- demo app -->
<script src="{{url('backend/js/pages/demo.dashboard.js')}}"></script>
<!-- end demo js-->

{{-- summernote script file --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

{{-- datatable js --}}
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>

<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 100
    });
</script>
@stack('js')
</body>
</html>
