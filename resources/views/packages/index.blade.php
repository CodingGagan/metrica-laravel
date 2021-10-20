@extends('layouts.sidebar');

@section('title', 'Packages List');

@section('sidebar')
@parent
@endsection

@section('header')
@parent
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <a href="{{url('package_view')}}" class="btn btn-info">Add Package</a>
                        </div>
                        <h4 class="page-title">Packages List</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="packages" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($packages as $package)
                                        <tr>
                                            <td>{{$package->name}}</td>
                                            <td>{{$package->amount}}</td>
                                            <td>{{$package->currency}}</td>
                                            <td>
                                                <a href="{{url('edit_view', [$package->id])}}" class="btn btn-info">Edit</a>
                                                <a href="{{url('delete_package', [$package->id])}}" class="btn btn-info">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
    </div>
    <!-- end page content -->
</div>
<!-- Javascript  -->
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="{{ URL::asset('assets/software_assets/plugins/tabulator/tabulator.min.js') }}"></script>
<script src=" {{ URL::asset('assets/software_assets/plugins/tabulator/jspdf.min.js') }}"></script>
<script src="{{ URL::asset('assets/software_assets/plugins/tabulator/xlsx.full.min.js') }}"></script>
<script src=" {{ URL::asset('assets/software_assets/plugins/tabulator/jspdf.plugin.autotable.js') }}"></script> -->
<script src="{{ URL::asset('assets/software_assets/pages/datatable.init.js') }}"></script>
<script>
    $(function() {
        $('#packages').DataTable();
    });
</script>
@endsection

@section('footer')
@parent
@endsection