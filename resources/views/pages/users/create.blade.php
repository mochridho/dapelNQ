@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Tambah Data user</h1>
        @foreach ($errors->all() as $item)
            {{ $item }}
        @endforeach
        <div class="card mt-lg-6">
            <form action="{{ route('master.users.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Name</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama"
                                name="name" />
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Username</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Username"
                                name="username" />
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Email</span>
                            </label>
                            <!--end::Label-->
                            <input type="email" class="form-control form-control-solid" placeholder="Masukkan Username"
                                name="email" />
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Role</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih Role" name="roles">
                                <option value="">Select Role...</option>
                                <option value="penyidik">Penyidik</option>
                                <option value="sekretaris">Sekretaris</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Password</span>
                            </label>
                            <!--end::Label-->
                            <input type="password" class="form-control form-control-solid" placeholder="Masukkan Pasword"
                                name="password" />
                        </div>
                    </div>
                    <div class="mt-5 d-flex justify-content-end w-100">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
