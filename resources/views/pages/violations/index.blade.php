@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Master Data / Pelanggaran</h1>
        <div class="row">
            <!--begin::Col-->
            <div class="col-xl-12">
                <div class="card card-flush mt-6 mt-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header mt-5">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bolder mb-1">List Data Pelanggaran</h3>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar my-1">
                            <!--begin::Select-->
                            <div class="me-6 my-1">
<<<<<<< HEAD:resources/views/pages/violations/index.blade.php
                                <a href="{{ route('master.violations.create') }}">
                                    <button class="btn btn-success btn-sm">Tambah Data</button>
=======
                                <a href="{{ route('tambah-data-pelanggaran') }}">
                                    <button class="btn btn-success btn-sm">Tambah Data Pelanggaran</button>
>>>>>>> c9935c18b87198c3575143dc0fcd7174ea79165e:resources/views/pages/dataPelanggaran/Pelanggaran.blade.php
                                </a>
                            </div>
                            <!--end::Select-->
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-3 position-absolute ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <form action="" method="get">
                                    <input type="text" name="q" value="{{ request()->q }}" id="kt_filter_search"
                                        class="form-control form-control-solid form-select-sm w-150px ps-9"
                                        placeholder="Search Order" />
                                </form>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="kt_profile_overview_table"
                                class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                                <!--begin::Head-->
                                <thead class="fs-7 text-gray-400 text-uppercase">
                                    <tr>
                                        <th class="min-w-50px">No</th>
<<<<<<< HEAD:resources/views/pages/violations/index.blade.php
                                        <th class="min-w-60px">Kategori Pelanggaran</th>
=======
                                        <th class="min-w-60px">Skala Pelanggaran</th>
>>>>>>> c9935c18b87198c3575143dc0fcd7174ea79165e:resources/views/pages/dataPelanggaran/Pelanggaran.blade.php
                                        <th class="min-w-250px">Keterangan Pelanggaran</th>
                                        <th class="min-w-30px">Aksi</th>
                                    </tr>
                                </thead>
                                <!--end::Head-->
                                <!--begin::Body-->
                                <tbody class="fs-6">
<<<<<<< HEAD:resources/views/pages/violations/index.blade.php
                                    @forelse ($violations as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-capitalize">{{ $item->kategori_pelanggaran }}</td>
                                            <td class="text-capitalize">{{ $item->keterangan_pelanggaran }}</td>
                                            <td class="text-start">
                                                <div class="d-inline-flex align-items-center gap-1">
                                                    <a href="{{ route('master.violations.edit', $item) }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <form onsubmit="return confirm('apakah anda yakin?')"
                                                        action="{{ route('master.violations.destroy', $item) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Data Kosong</td>
                                        </tr>
                                    @endforelse
=======
                                    <tr>
                                        <td>1</td>
                                        <td>Ringan</td>
                                        <td>Ghoshop</td>
                                        <td class="text-start">
                                            <a href="{{ route('edit-data-pelanggaran') }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Berat</td>
                                        <td>Mengkonsumsi Bahan Terlarang</td>
                                        <td class="text-start">
                                            <a href="{{ route('edit-data-pelanggaran') }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ringan</td>
                                        <td>Telat Balek Pesantren</td>
                                        <td class="text-start">
                                            <a href="{{ route('edit-data-pelanggaran') }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ringan</td>
                                        <td>Tidak Mengikuti Kegiatan Ubudiah</td>
                                        <td class="text-start">
                                            <a href="{{ route('edit-data-pelanggaran') }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sedang</td>
                                        <td>Berkelahi</td>
                                        <td class="text-start">
                                            <a href="{{ route('edit-data-pelanggaran') }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
>>>>>>> c9935c18b87198c3575143dc0fcd7174ea79165e:resources/views/pages/dataPelanggaran/Pelanggaran.blade.php
                                </tbody>
                                <!--end::Body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Col-->
        </div>
    </div>
@endsection
