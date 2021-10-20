@extends('layouts.sidebar');

@section('title', 'Add Packages');

@section('sidebar')
@parent
@endsection

@section('header')
@parent
@endsection

@section('content')

<!-- Page Content-->
<div class="page-content-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Add Package</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <form id="form-validation-2" action="{{url('add_package')}}" class="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="mb-2">Package Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Package Name">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2">
                                <label for="amount" class="mb-2">Amount</label>
                                <input class="form-control" type="number" id="amount" name="amount" min="0" placeholder="Enter Amount">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2">
                                <label for="currency" class="mb-2">Currency</label>
                                <input class="form-control" type="text" id="currency" name="currency" placeholder="Enter Currency">
                                <small>Error Message</small>
                            </div>
                            <button type="submit" class="btn btn-de-primary">Add Package</button>
                        </form>
                        <!--end form-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
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
<!-- Javascript  -->
<script src={{ URL::asset('assets/software_assets/pages/form-validation.js') }}></script>
@endsection

@section('footer')
@parent
@endsection