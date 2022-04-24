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
                <h3 class="card-title">Edit Smartphone</h3>
              </div>
              @foreach ($sp as $s)
              <form method="POST" action="/edit_smartphone/{{$s->id_smartphone}}">
                <div class="card-body">
                @csrf
                <div class="form-group">
                  <label for="merek_handphone" class="form-label">Merek Smartphone</label>
                  <input type="text" class="form-control col-8 @error('merek_handphone') is-invalid @enderror" id="merek_handphone" name="merek_handphone"
                  required autofocus value="{{ $s->merek_handphone }}" placeholder="Enter Merk Smartphone">
                  @error('merek_handphone')
                      <div class="invalid-message">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="type_handphone" class="form-label">Type Smartphone</label>
                  <input type="text" class="form-control col-8 @error('type_handphone') is-invalid @enderror" id="type_handphone" name="type_handphone"
                  required autofocus value="{{ $s->type_handphone }}" placeholder="Enter Type Smartphone">
                  @error('type_smartphone')
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
              @endforeach
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
