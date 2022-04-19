@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kriteria Penyimpanan (C1)</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pilihan Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($pny as $penyimpanan)
                                    <td>{{ ($pny->currentPage() - 1) * $pny->perPage() + $loop->iteration }}</td>
                                    <td>{{ $penyimpanan->pilihan_kriteria }}</td>
                                    <td>{{ $penyimpanan->bobot_kriteria }}</td>
                                    <td>
                                        <a class="btn btn-app bg-info "
                                            href="
                                            /data_kriteria/edit_penyimpanan/{{ $penyimpanan->id_kriteria_penyimpanan }}">
                                            <i class="fas fa-cog"></i> Ubah
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kriteria Ram (C2)</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pilihan Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($rm as $ram)
                                    <td>{{ ($rm->currentPage() - 1) * $rm->perPage() + $loop->iteration }}</td>
                                    <td>{{ $ram->pilihan_kriteria }}</td>
                                    <td>{{ $ram->bobot_kriteria }}</td>
                                    <td>
                                        <a class="btn btn-app bg-info "
                                            href="
                                            /data_kriteria/edit_ram/{{ $ram->id_kriteria_ram }}">
                                            <i class="fas fa-cog"></i> Ubah
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kriteria Processor (C3)</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pilihan Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($proc as $processor)
                                    <td>{{ ($proc->currentPage() - 1) * $proc->perPage() + $loop->iteration }}</td>
                                    <td>{{ $processor->pilihan_kriteria }}</td>
                                    <td>{{ $processor->bobot_kriteria }}</td>
                                    <td>
                                        <a class="btn btn-app bg-info "
                                            href="
                                            /data_kriteria/edit_processor/{{ $processor->id_kriteria_processor }}">
                                            <i class="fas fa-cog"></i> Ubah
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kriteria Harga (C4)</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pilihan Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($hrg as $harga)
                                    <td>{{ ($hrg->currentPage() - 1) * $hrg->perPage() + $loop->iteration }}</td>
                                    <td>{{ $harga->pilihan_kriteria }}</td>
                                    <td>{{ $harga->bobot_kriteria }}</td>
                                    <td>
                                        <a class="btn btn-app bg-info "
                                            href="
                                            /data_kriteria/edit_harga/{{ $harga->id_kriteria_harga }}">
                                            <i class="fas fa-cog"></i> Ubah
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kriteria Slot Sim (C5)</h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pilihan Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($sim as $slot_sim)
                                    <td>{{ ($sim->currentPage() - 1) * $sim->perPage() + $loop->iteration }}</td>
                                    <td>{{ $slot_sim->pilihan_kriteria }}</td>
                                    <td>{{ $slot_sim->bobot_kriteria }}</td>
                                    <td>
                                        <a class="btn btn-app bg-info "
                                            href="
                                            /data_kriteria/edit_slot_sim/{{ $slot_sim->id_kriteria_slot_sim }}">
                                            <i class="fas fa-cog"></i> Ubah
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
