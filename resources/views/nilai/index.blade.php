@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">

        <div class="row p-3">
            <div class="col-xl-12">
            <div class="card card-info card-outline shadow">
                <div class="card-header ">
                    <div class="container-fluid">
                        <h3 class="card-title" style="inline-block">Daftar Smartphone</h3>

                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Alternatif</th>
                                <th scope="col">C1</th>
                                <th scope="col">C2</th>
                                <th scope="col">C3</th>
                                <th scope="col">C4</th>
                                <th scope="col">C5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($nilai as $n)
                                    <td>{{ $n->smartphone->merek_handphone }} {{ $n->smartphone->type_handphone }}</td>
                                    <td>{{ $n->kriteria_penyimpanan->pilihan_kriteria }} </td>
                                    <td>{{ $n->kriteria_ram->pilihan_kriteria }} </td>
                                    <td>{{ $n->kriteria_processor->pilihan_kriteria }} </td>
                                    <td>{{ $n->kriteria_harga->pilihan_kriteria }} </td>
                                    <td>{{ $n->kriteria_slot_sim->pilihan_kriteria }} </td>
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
                        <h3 class="card-title" style="inline-block">Rating Kecocokan</h3>

                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Alternatif</th>
                                <th scope="col">C1</th>
                                <th scope="col">C2</th>
                                <th scope="col">C3</th>
                                <th scope="col">C4</th>
                                <th scope="col">C5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($nilai as $n)
                                    <td>{{ $n->smartphone->merek_handphone }} {{ $n->smartphone->type_handphone }}</td>
                                    <td>{{ $n->kriteria_penyimpanan->bobot_kriteria }} </td>
                                    <td>{{ $n->kriteria_ram->bobot_kriteria }} </td>
                                    <td>{{ $n->kriteria_processor->bobot_kriteria }} </td>
                                    <td>{{ $n->kriteria_harga->bobot_kriteria }} </td>
                                    <td>{{ $n->kriteria_slot_sim->bobot_kriteria }} </td>
                            </tr>
                            @endforeach
                            <td>Jumlah</td>
                            <td>{{ $nilai->sum('sum_kriteria_penyimpanan') }}</td>
                            <td>{{ $nilai->sum('sum_kriteria_ram') }}</td>
                            <td>{{ $nilai->sum('sum_kriteria_processor') }}</td>
                            <td>{{ $nilai->sum('sum_kriteria_harga') }}</td>
                            <td>{{ $nilai->sum('sum_kriteria_slot_sim') }}</td>
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
                        <h3 class="card-title" style="inline-block">Hasil Perhitungan Normalisasi</h3>

                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Alternatif</th>
                                <th scope="col">C1</th>
                                <th scope="col">C2</th>
                                <th scope="col">C3</th>
                                <th scope="col">C4</th>
                                <th scope="col">C5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($nilai as $n)
                                    <td>{{ $n->smartphone->merek_handphone }} {{ $n->smartphone->type_handphone }}</td>
                                    <td>{{ round( $n->kriteria_penyimpanan->bobot_kriteria/ $nilai->max('sum_kriteria_penyimpanan'),2) }} </td>
                                    <td>{{ round($n->kriteria_ram->bobot_kriteria / $nilai->max('sum_kriteria_ram'),2) }} </td>
                                    <td>{{ round($n->kriteria_processor->bobot_kriteria / $nilai->max('sum_kriteria_processor'),2) }} </td>
                                    <td>{{ round($nilai->min('sum_kriteria_harga') / $n->kriteria_harga->bobot_kriteria,2)  }} </td>
                                    <td>{{ round($n->kriteria_slot_sim->bobot_kriteria / $nilai->max('sum_kriteria_slot_sim'),2) }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-xl-7">
            <div class="card card-info card-outline shadow">
                <div class="card-header ">
                    <div class="container-fluid">
                        <h3 class="card-title" style="inline-block">Nilai Rangking</h3>
                    </div>
                </div>
                <?php 
                $valarray = [];
                $v = 1;
                ?>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered data">
                        <thead>
                            <tr>
                                <th scope="col">Kode</th>
                                <th scope="col">Alternatif</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($nilai as $n)
                                    <td>V{{$v}}</td>
                                    <td><?php $brand = $n->smartphone->merek_handphone . " " . $n->smartphone->type_handphone ?> {{$brand}}</td>
                                    <td>
                                    <?php 
                                    $value = round( (($n->kriteria_penyimpanan->bobot_kriteria/100)*$n->kriteria_penyimpanan->bobot_kriteria/ $nilai->max('sum_kriteria_penyimpanan'))
                                    + (($n->kriteria_ram->bobot_kriteria/100)*$n->kriteria_ram->bobot_kriteria/ $nilai->max('sum_kriteria_ram'))
                                    + (($n->kriteria_processor->bobot_kriteria/100)*$n->kriteria_processor->bobot_kriteria/ $nilai->max('sum_kriteria_processor'))
                                    + (($n->kriteria_harga->bobot_kriteria/100)*$nilai->min('sum_kriteria_harga') / $n->kriteria_harga->bobot_kriteria)
                                    + (($n->kriteria_slot_sim->bobot_kriteria/100)*$n->kriteria_slot_sim->bobot_kriteria/ $nilai->max('sum_kriteria_slot_sim')),4);

                                    //array_push($valarray, $value);
                                    $out = [
                                        'kode' => $v,
                                        'brand' => $brand,
                                        'val' => $value
                                    ];
                                    array_push($valarray, $out);
                                    $v++;
                                    ?>
                                    {{$value}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="col-x2" style="width: 41% ">
            <div class="card card-info card-outline shadow">
                <div class="card-header ">
                    <div class="container-fluid">
                        <h3 class="card-title" style="inline-block">Kesimpulan Rangking</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php
                    $arrVal = [];
                    foreach($valarray as $va => $nil){
                        array_push($arrVal,$nil['val']);
                        $max = max($arrVal);
                        if(in_array($max, $nil)){
                            $kode = $nil['kode'];
                            $brand = $nil['brand'];
                        }
                    }
                    //if(in_array($max, $va)){
                       // echo $va['brand'].' ttttt ';
                    //}//
                    ?>
                    Dari Hasil perhitungan Rangking di samping, maka pemilihan Smartphone terbaik adalah V{{$kode}} dengan nilai {{$max}} yaitu Smartphone {{$brand}}.
                    
                </div>
            </div>
            </div>
        </div>


            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
    $(".data").DataTable({
        "bPaginate": false,
        "bFilter": false, //hide Search bar
        "bInfo": false, // hide showing entries
    })
  });
    </script>
    <!-- /.content -->
@endsection
