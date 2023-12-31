@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1> Master Sanksi / Sanksi</h1>
        <div class="row">
            <!--begin::Col-->
            <div class="col-xl-12">
                <div class="card card-flush mt-6 mt-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header mt-5">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bolder mb-1">List Data Sanksi </h3>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar my-1">
                            <!--begin::Select-->
                            <div class="me-6 my-1">
                                <a href="{{ route('master.sanctions.create') }}">
                                    <button class="btn btn-success btn-sm">Tambah Data</button>
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
                                        placeholder="Cari" />
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
<<<<<<< HEAD:resources/views/pages/sanctions/index.blade.php
                                        <th class="min-w-50px">No</th>
                                        <th class="min-w-60px">Kategori Sanksi</th>
                                        <th class="min-w-250px">Keterangan Sanksi</th>
                                        <th class="min-w-30px">Aksi</th>
=======
                                        <th class="min-w-30px">No</th>
                                        <th class="min-w-90px">NIS</th>
                                        <th class="min-w-200px">Nama Santri</th>
                                        <th class="min-w-150px">Tanggal Lahir</th>
                                        <th class="min-w-150px">Jenis Kelamin</th>
                                        <th class="min-w-200px">alamat</th>
                                        <th class="min-w-100px">Pendidikan</th>
                                        <th class="min-w-170px">Nama Wali</th>
                                        <th class="min-w-100px">Kamar</th>
                                        <th class="min-w-150px">No HP</th>
                                        <th class="min-w-100px">Aksi</th>
>>>>>>> c9935c18b87198c3575143dc0fcd7174ea79165e:resources/views/pages/dataSantri/Santri.blade.php
                                    </tr>
                                </thead>
                                <!--end::Head-->
                                <!--begin::Body-->
                                <tbody class="fs-6">
<<<<<<< HEAD:resources/views/pages/sanctions/index.blade.php
                                    @foreach ($sanctions as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-capitalize">{{ $item->kategori_sanksi }}</td>
                                            <td class="text-capitalize">{{ $item->keterangan_sanksi }}</td>
                                            <td class="text-start">
                                                <div class="d-inline-flex align-items-center gap-1">
                                                    <a href="{{ route('master.sanctions.edit', $item) }}"
=======
                                        <tr>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>Abdul Mannan</td>
                                            <td>14072001</td>
                                            <td>Laki-laki</td>
                                            <td>Besuki-Situbondo</td>
                                            <td>MTs</td>
                                            <td>Mandalaaa</td>
                                            <td>Al Mulku</td>
                                            <td>123456789</td>
                                            <td>
                                                <div class="text-start d-inline-flex gap-1">
                                                    <a href="{{ route('edit-data-santri') }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2022</td>
                                            <td>Abdul Malik</td>
                                            <td>14072002</td>
                                            <td>Laki-laki</td>
                                            <td>Mlandingan-Situbondo</td>
                                            <td>MI</td>
                                            <td>Sanusi</td>
                                            <td>An Nur</td>
                                            <td>123456789</td>
                                            <td>
                                                <div class="text-start d-inline-flex gap-1">
                                                    <a href="{{ route('edit-data-santri') }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2023</td>
                                            <td>Abdus Salam</td>
                                            <td>14072003</td>
                                            <td>Laki-laki</td>
                                            <td>Bungatan-Situbondo</td>
                                            <td>MA</td>
                                            <td>Samsuddin</td>
                                            <td>At Taubah</td>
                                            <td>123456789</td>
                                            <td>
                                                <div class="text-start d-inline-flex gap-1">
                                                    <a href="{{ route('edit-data-santri') }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>2024</td>
                                            <td>Mannan</td>
                                            <td>14072001</td>
                                            <td>Laki-laki</td>
                                            <td>Besuk-Probolinggo</td>
                                            <td>MTs</td>
                                            <td>Anjas</td>
                                            <td>Muhammad</td>
                                            <td>123456789</td>
                                            <td>
                                                <div class="text-start d-inline-flex gap-1">
                                                    <a href="{{ route('edit-data-santri') }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>2025</td>
                                            <td>Malik</td>
                                            <td>14072001</td>
                                            <td>Laki-laki</td>
                                            <td>Kraksaan-Situbondo</td>
                                            <td>MTs</td>
                                            <td>AHMAD</td>
                                            <td>Al Kahfi</td>
                                            <td>123456789</td>
                                            <td>
                                                <div class="text-start d-inline-flex gap-1">
                                                    <a href="{{ route('edit-data-santri') }}"
>>>>>>> c9935c18b87198c3575143dc0fcd7174ea79165e:resources/views/pages/dataSantri/Santri.blade.php
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <form onsubmit="return confirm('apakah anda yakin?')"
                                                        action="{{ route('master.sanctions.destroy', $item) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
<<<<<<< HEAD:resources/views/pages/sanctions/index.blade.php
                                    @endforeach
=======
>>>>>>> c9935c18b87198c3575143dc0fcd7174ea79165e:resources/views/pages/dataSantri/Santri.blade.php
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
