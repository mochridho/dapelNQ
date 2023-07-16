<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>DapelNQ</title>
</head>

<body>
    <div class="row g-0" style="height: 100vh">
        <div class="mx-auto bg-dark" style="width: 400px">
            {{-- begin:header  --}}
            <div class="header text-white px-3 d-flex align-items-center" style="height: 150px">
                <img src="{{ asset('assets/images/logo.png') }}" style="width: 100%">
            </div>
            {{-- end:header  --}}
            {{-- begin:search  --}}
            <div class="content bg-light rounded-top-5 pt-4 px-3" style="height: calc(100vh - 150px)">
                <h6 class="text-center mb-3">Cari Data Santri</h6>
                <form action="" class="d-flex gap-2">
                    <input type="text" class="form-control" id="" placeholder="Cari...">
                    <button class="btn btn-success">Cari</button>
                </form>

                {{-- begin:hasil --}}
                <div class="content mt-4">
                    <div>
                        <div class="row">
                            <div class="col-4">NIS</div>
                            <div class="col-7">: 2323444</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Nama</div>
                            <div class="col-7">: Nur Hasanah</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Nama Wali</div>
                            <div class="col-7">: Paijo</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Pelanggaran</div>
                            <div class="col-7">: Keluar tanpa ijin</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Sanksi</div>
                            <div class="col-7">: Didenda</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Tanggal</div>
                            <div class="col-7">: 10-07-2023</div>
                        </div>
                    </div>
                </div>
                {{-- end:hasil --}}
            </div>
            {{-- end:search  --}}

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
