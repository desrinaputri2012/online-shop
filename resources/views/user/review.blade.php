@extends('user.app')
@section('content')


<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Detil Produk</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Review Produk</strong></div>
    </div>
  </div>
</div>
{{-- <style>
  .counterCell:before {              
    content: counter(tableCount); 
    counter-increment: tableCount; 
}
</style> --}}

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h1 mb-3 text-black">Beberapa Pelanggan Sudah Memberikan Penilaiannya Nih, Liat Yuk!</h2>
            <div class="p-3 p-lg-5 border">
                @csrf
                <table class="table table-bordered table-hovered" id="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Ulasan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;?>
                    @foreach($reviews as $reviu)
                      <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $reviu->name }}</td>
                          <td>{{ $reviu->review }}</td>
                            </a>
                          </div>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>



@endsection