@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">

            <div class="row p-3 ">
                <div class="col-xl-12">
            <div class="card card-info card-outline shadow">
                <div class="card-header ">
                    <div class="container-fluid">
                        <h3 class="card-title" style="inline-block">Daftar Smartphone</h3>
                        <a class="btn btn-sm btn-primary float-right" style="inline-block" href="/data_smartphone/create_smartphone">Tambah Smartphone</a>

                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Merek Smartphone</th>
                                <th scope="col">Type Smartphone</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($handphone as $hp)
                                    <td>{{ ($handphone->currentPage() - 1) * $handphone->perPage() + $loop->iteration }}
                                    </td>
                                    <td>{{ $hp->merek_handphone }}</td>
                                    <td>{{ $hp->type_handphone }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="/data_smartphone/edit_smartphone/{{ $hp->id_smartphone }}"> Ubah</a>
                                        <a class="btn btn-danger"
                                            href="/data_smartphone/delete_smartphone/{{ $hp->id_smartphone }}"> Hapus</a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="row p-3">
            <div class="col-xl-12">
            <div class="card card-info card-outline shadow">
                <div class="card-header ">
                    <div class="container-fluid">
                        <h3 class="card-title" style="inline-block">Daftar Smartphone + Penilaian</h3>
                        <a class="btn btn-sm btn-primary float-right" style="inline-block" href="#">Tambah Smartphone + Penilian</a>

                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Alternatif</th>
                                <th scope="col">C1</th>
                                <th scope="col">C2</th>
                                <th scope="col">C3</th>
                                <th scope="col">C4</th>
                                <th scope="col">C5</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                @foreach ($handphone as $hp)
                                    <td>{{ ($handphone->currentPage() - 1) * $handphone->perPage() + $loop->iteration }}
                                    </td>
                                    <td>{{ $hp->merek_handphone }}</td>
                                    <td>{{ $hp->type_handphone }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="/data_smartphone/edit_smartphone/{{ $hp->id_smartphone }}"> Ubah</a>
                                        <a class="btn btn-danger"
                                            href="/data_smartphone/delete_smartphone/{{ $hp->id_smartphone }}"> Hapus</a>
                                    </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
