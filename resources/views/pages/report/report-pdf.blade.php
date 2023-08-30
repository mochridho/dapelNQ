@extends('layouts.report')
@section('content')
    <div class="invoice-box pdf">
        <table cellpadding="0" cellspacing="0">
            <tr style="page-break-after: avoid;" class="top">
                <td colspan="5">
                    <table style="border-bottom: 1.5px solid #333; margin-bottom: 5px">
                        <tr>
                            <td class="title">
                                Dapel NQ
                            </td>
                            <td style="text-transform: capitalize;">
                                No. Pelanggaran: #{{ rand(10000, 99999) }}1<br />
                                Info: <a
                                    href="{{ route('master.pelanggaran-report', [
                                        'tgl_pelanggaran' => request('tgl_pelanggaran'),
                                        'download' => 'true',
                                    ]) }}"
                                    class="btn btn-sm btn-primary">
                                    <i class="bx bx-download"></i>
                                    <span class="">Download PDF</span>
                                </a><br />
                            </td>
                        </tr>
                    </table>
                    {{-- # Laporan Pengambilan / Pembayaran Pupuk Berdasarkan {{ $title }}
                    Dengan Jumlah {{ $fertilizerPayments->count() }}
                    Petani --}}
                </td>
            </tr>

            <tr>
                <td colspan="5">
                    <table class="table-spp" border="1" width="100">
                        <tr class="heading">
                            <th style="text-align: center" class="text-white">No</th>
                            <th style="text-align: left" class="text-white">Nis</th>
                            <th style="text-align: left" class="text-white">Nama Santri</th>
                            <th style="text-align: center" class="text-white">Pelanggaran</th>
                            <th style="text-align: center" class="text-white">Sanksi</th>
                            <th style="text-align: center" class="text-white">Tanggal</th>
                            <th style="text-align: center" class="text-white">status</th>
                        </tr>
                        @forelse ($data as $item)
                            <tr class="details">
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td style="text-align: left">{{ $item->santri->nis }}</td>
                                <td style="text-align: center">{{ $item->santri->nama_santri }}</td>
                                <td style="text-align: center;">
                                    {{ $item->violation->keterangan_pelanggaran }}
                                </td>
                                <td style="text-align: center">
                                    {{ $item->sanction->keterangan_sanksi }}
                                </td>
                                <td style="text-align: center">
                                    {{ $item->created_at->format('d/m/y') }}
                                </td>
                                <td style="text-align: center; font-weight: 600;">
                                    <span style="color: green;  font-weight: 800;">{{ $item->status }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td style="text-align: center" colspan="10">Data tidak tersedia</td>
                            </tr>
                        @endforelse
                    </table>
                </td>
            </tr>
            <td colspan="5" style="text-align: left; padding-top: 5px">
                Data di export pdf pada {{ now()->translatedFormat('d F Y') }} berjumlah
                {{ $data->count() }} data
            </td>
        </table>
    </div>
@endsection
