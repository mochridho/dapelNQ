@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Tambah Data user</h1>
        <div class="card mt-lg-6">
            <div class="card-body">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Nama User</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Nama User"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Nama User</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="User Name"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-end w-100">
                    <button class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
