@extends('user.app')
@section('content')


<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h1 mb-3 text-black">Invoice akan dikirimkan ke email Anda, mohon dicek kembali yuk!</h2>
            <div class="p-3 p-lg-5 border">
              <form action="{{ route('send.email') }}" method="POST">
                @csrf

                                @foreach($users as $u)

                                <div class="form-group">
                                <label for="exampleInputUsername1">Email</label>
                                <input required type="email" class="form-control" name="email" value="{{ $u->email}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputUsername1">Nomor Invoice</label>
                                <input required type="text" class="form-control" name="subject" value="Pesanan atas Nomor Invoice {{ $u->invoice}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputUsername1">Total Pembayaran</label>
                                <input required type="number" class="form-control" name="content" value="{{ $u->subtotal}}">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success text-right">KIRIM</button>
                                </div>

                                @endforeach
              
            </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- </form> -->
  </div>
</div>



@endsection