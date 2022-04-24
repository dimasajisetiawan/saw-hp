@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <?php
        foreach ($nilai as $n)
            $idn = $n->id_nilai;
            $ids = $n->id_smartphone;
            $idss = $n->id_kriteria_slot_sim;
            $idr = $n->id_kriteria_ram;
            $idp = $n->id_kriteria_processor;
            $idpe = $n->id_kriteria_penyimpanan;
            $idh = $n->id_kriteria_harga;
        ?>
        <div class="row p-3">
            <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Smartphone + Penilaian</h3>
              </div>
              <form method="POST" action="/update_smartphone_with_value/{{$idn}}">
                <div class="card-body">
                @csrf
                <div class="form-group">
                  <label for="kriteria_processor" class="form-label">id_Kriteria Processor</label>
                  <select class="form-control col-8 @error('kriteria_processor') is-invalid @enderror"" name="id_kriteria_processor">
                    @foreach ($kriteria_processor as $kp)
                    @if( $idp == $kp->id_kriteria_processor)
                    <option value="{{ $kp->id_kriteria_processor }}" selected>{{ $kp->pilihan_kriteria }}</option>
                    @else
                    <option value="{{ $kp->id_kriteria_processor }}">{{ $kp->pilihan_kriteria}} </option>
                    @endif
                    @endforeach
                  </select>
                  @error('kriteria_processor')
                      <div class="invalid-message">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="kriteria_penyimpanan" class="form-label">Kriteria Penyimpanan</label>
                    <select class="form-control col-8 @error('kriteria_penyimpanan') is-invalid @enderror"" name="id_kriteria_penyimpanan">
                      @foreach ($kriteria_penyimpanan as $kp)
                      @if( $idpe == $kp->id_kriteria_penyimpanan)
                      <option value="{{ $kp->id_kriteria_penyimpanan }}" selected>{{ $kp->pilihan_kriteria }}</option>
                      @else
                      <option value="{{ $kp->id_kriteria_penyimpanan }}">{{ $kp->pilihan_kriteria}} </option>
                      @endif
                      @endforeach
                    </select>
                    @error('kriteria_penyimpanan')
                        <div class="invalid-message">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="kriteria_ram" class="form-label">Kriteria Ram</label>
                    <select class="form-control col-8 @error('kriteria_ram') is-invalid @enderror" name="id_kriteria_ram">
                      @foreach ($kriteria_ram as $km)
                      @if( $idr == $km->id_kriteria_ram)
                      <option value="{{ $km->id_kriteria_ram }}" selected>{{ $km->pilihan_kriteria }}</option>
                      @else
                      <option value="{{ $km->id_kriteria_ram }}">{{ $km->pilihan_kriteria}} </option>
                      @endif
                      @endforeach
                    </select>
                    @error('kriteria_ram')
                        <div class="invalid-message">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="kriteria_slot_sim" class="form-label">Kriteria Slot Sim</label>
                    <select class="form-control col-8 @error('kriteria_slot_sim') is-invalid @enderror"" name="id_kriteria_slot_sim">                  
                    @foreach ($kriteria_slot_sim as $kss)
                      @if( $idss == $kss->id_kriteria_slot_sim)
                      <option value="{{ $kss->id_kriteria_slot_sim }}" selected>{{ $kss->pilihan_kriteria }}</option>
                      @else
                      <option value="{{ $kss->id_kriteria_slot_sim }}">{{ $kss->pilihan_kriteria}} </option>
                      @endif
                      @endforeach
                    </select>
                    @error('kriteria_slot_sim')
                        <div class="invalid-message">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="kriteria_harga" class="form-label">Kriteria Harga</label>
                    <select class="form-control col-8 @error('kriteria_harga') is-invalid @enderror"" name="id_kriteria_harga">
                      @foreach ($kriteria_harga as $kg)
                      @if( $idh == $kg->id_kriteria_harga)
                      <option value="{{ $kg->id_kriteria_harga }}" selected>{{ $kg->pilihan_kriteria }}</option>
                      @else
                      <option value="{{ $kg->id_kriteria_harga }}">{{ $kg->pilihan_kriteria}} </option>
                      @endif
                      @endforeach
                    </select>
                    @error('kriteria_harga')
                        <div class="invalid-message">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="smartphone" class="form-label">Kriteria Processor</label>
                    <select class="form-control col-8 @error('smartphone') is-invalid @enderror"" name="id_smartphone">
                      @foreach ($smartphone as $sp)
                      @if( $ids == $sp->id_smartphone)
                      <option value="{{ $sp->id_smartphone }}" selected>{{ $sp->merek_handphone }} {{ $sp->type_handphone }}</option>
                      @else
                      <option value="{{ $sp->id_smartphone }}">{{ $sp->merek_handphone }} {{ $sp->type_handphone }}</option>
                      @endif
                      @endforeach
                    </select>
                    @error('smartphone')
                        <div class="invalid-message">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Smartphone</button>
                  </div>
              </form>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
