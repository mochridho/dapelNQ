@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Tambah Data Santri</h1>
        @foreach ($errors->all() as $item)
            {{ $item }}
        @endforeach
        <div class="card mt-lg-6">
            <form action="{{ route('master.santri.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">NIS</span>
                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid" placeholder="NIS"
                                    name="nis" />
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Nama Santri</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="Nama Santri"
                                    name="nama_santri" />
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Tanggal Lahir</span>
                                </label>
                                <!--end::Label-->
                                <input type="date" class="form-control form-control-solid" placeholder="Tanggal Lahir"
                                    name="tgl_lahir" />
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Kamar</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Pilih Kamar" name="kamar">
                                    <option value="">Select Kamar...</option>
                                    @foreach (listKamar() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Nama Wali</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="Nama Wali"
                                    name="nama_wali" />
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Pendidikan</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Pilih Pendidikan" name="pendidikan">
                                    <option value="">Select Pendidikan...</option>
                                    @foreach (listPendidikan() as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">No HP</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="No Hp"
                                    name="no_hp" />
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Jenis Kelamin</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Pilih Jenis Kelamin" name="jk">
                                    <option value="">Select Jenis Kelamin...</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Alamat</span>
                                </label>
                                <!--end::Label-->
                                <div class="form-floating">
                                    <textarea name="alamat" class="form-control form-control-solid" placeholder="Alamat" id="floatingTextarea2"
                                        style="height: 100px"></textarea>
                                </div>
                            </div>
                            <!--end::Input group-->
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
