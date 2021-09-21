@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">10 Transaksi Terbaru</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Invoice </th>
                            <th> Pemesan </th>
                            <th> Subtotal </th>
                            <th> Status Pesanan </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($order_baru as $order)
                            <tr>
                              <td>{{ $order->invoice }}</td>
                              <td>{{ $order->nama_pemesan }}</td>
                              <td>{{ number_format($order->subtotal,2,',','.') }}</td>
                              <td>{{ $order->name }}</td>
                              <td> <a href="{{ route('admin.transaksi.detail',['id'=>$order->id]) }}" class="btn btn-warning btn-sm">Detail</a></td>
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
@endsection