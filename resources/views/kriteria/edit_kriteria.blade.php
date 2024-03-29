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
        <div class="row p-3">
            <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Kriteria</h3>
              </div>
              <form method="POST" action="/edit_{{ Request::is('data_kriteria/edit_penyimpanan/*') ? 'penyimpanan' : (Request::is('data_kriteria/edit_ram/*') ? 'ram' : (Request::is('data_kriteria/edit_processor/*') ? 'processor' : (Request::is('data_kriteria/edit_slot_sim/*') ? 'slot_sim' : (Request::is('data_kriteria/edit_harga/*') ? 'harga': '' ))))}}/{{ $krt['id_kriteria'] }}">
                <div class="card-body">
                    @method('put')
                @csrf
                <div class="form-group">
                  <label for="pilihan_kriteria" class="form-label">Pilihan Kriteria</label>
                  <input type="text" class="form-control col-5 @error('pilihan_kriteria') is-invalid @enderror" id="pilihan_kriteria" name="pilihan_kriteria"
                  required autofocus value="{{ old('pilihan_kriteria',$krt['pilihan_kriteria']) }}" disabled>
                  @error('pilihan_kriteria')
                      <div class="invalid-message">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="bobot_kriteria" class="form-label">Bobot Kriteria</label>
                  <input type="number" class="form-control col-3 @error('bobot_kriteria') is-invalid @enderror" id="bobot_kriteria" name="bobot_kriteria"
                  required autofocus value="{{ old('bobot_kriteria',$krt['bobot_kriteria']) }}">
                  @error('bobot_kriteria')
                      <div class="invalid-message">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit Kriteria </button>
                  </div>
              </form>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
