@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Edit Data Sanksi</h1>
        <div class="card mt-lg-6">
            <form action="{{ route('master.sanctions.update', $sanction) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Kategori Sanksi</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                            data-placeholder="Select Pelanggaran" name="kategori_sanksi">
                            <option value="">Select sanksi...</option>
                            <option value="Kode etik" {{ $sanction->kategori_sanksi == 'Kode etik' ? 'selected' : '' }}>Kode
                                etik</option>
                            <option value="Moral" {{ $sanction->kategori_sanksi == 'Moral' ? 'selected' : '' }}>Moral
                            </option>
                            <option value="Administrasi"
                                {{ $sanction->kategori_sanksi == 'Administrasi' ? 'selected' : '' }}>Administrasi</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Keterangan Sanksi</span>
                        </label>
                        <!--end::Label-->
                        <div class="form-floating">
                            <textarea name="keterangan_sanksi" class="form-control form-control-solid" placeholder="Keterangan"
                                id="floatingTextarea2" style="height: 100px">
                        {{ $sanction->keterangan_sanksi }}
                        </textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('master.sanctions.index') }}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
