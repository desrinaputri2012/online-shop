@extends('user.app')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
    <div class="row mb-3">
        <div class="col-md-12 text-center">
            <h2 class="display-5">Silahkan Lakukan Pembayaran Lewat Nomor Rekening Berikut</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <hr>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="{{ route('user.review.submit',['id' => $reviews->id ]) }}" method="POST" enctype="multipart/form-data">
                            <?php dd($reviews); ?>
                        @csrf
                            <div class="form-group">
                            <label for="">Ulasan</label>
                            <input type="text" name="ulasan" id="" class="form-control" required>
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    </div>
</div>
@endsection