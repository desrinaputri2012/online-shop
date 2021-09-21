@extends('user.app')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="/">Beranda</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Pengaturan Akun</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('home', $id ?? '') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Pilih Status Toko</label>
                        <select class="form-control" name="id" id="exampleFormControlSelect2">
                        @foreach($status_toko as $status_tok)
                            <option value="{{ $status_tok->id }}">{{ $status_tok->status }}</option>
                        @endforeach
                        </select>
                    </div>
                        
                        <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    </div>
</div>
@endsection