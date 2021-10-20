@extends('layouts.sidebar');

@section('title', 'Metrics Admin Dashboard');

@section('sidebar')
@parent
@endsection

@section('header')
@parent
@endsection

@section('content')

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Metrica</a>
                                </li>
                                <!--end nav-item-->
                                <li class="breadcrumb-item"><a href="#">Analytics</a>
                                </li>
                                <!--end nav-item-->
                                <li class="breadcrumb-item active">Customers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Customers Growth</h4>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="chart-demo">
                                <div id="apex_line1" class="apex-charts"></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6 class="font-15 m-0 mb-1">Returning Customers</h6>
                                    <p class="text-muted mb-0">Last Month : 150 <i class="mdi mdi-menu-up text-success"></i></p>
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="">
                                        <div id="bar-1" class="apex-charts mb-n4"></div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6 class="font-15 m-0 mb-1">New Customers</h6>
                                    <p class="text-muted mb-0">Last Month : 10 <i class="mdi mdi-menu-down text-danger"></i></p>
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="">
                                        <div id="line-1" class="apex-charts"></div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6 class="font-15 m-0 mb-1">Bounce Rate</h6>
                                    <p class="text-muted mb-0">Last Month : 50% <i class="mdi mdi-menu-up text-success"></i></p>
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="">
                                        <div id="radialBar-1" class="apex-charts my-n2"></div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Customers Details </h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="datatable-1"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
            </div>
            <!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer>
        <!-- end Footer -->
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- Javascript  -->
<script src="{{ URL::asset('assets/software_assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/software_assets/plugins/tabulator/tabulator.min.js') }}></script>
<script src=" {{ URL::asset('assets/software_assets/plugins/tabulator/jspdf.min.js') }}></script>
<script src="{{ URL::asset('assets/software_assets/plugins/tabulator/xlsx.full.min.js') }}></script>
<script src=" {{ URL::asset('assets/software_assets/plugins/tabulator/jspdf.plugin.autotable.js') }}></script>
<script src="{{ URL::asset('assets/software_assets/pages/analytics-customers.init.js') }}></script>
@endsection

@section('footer')
@parent
@endsection