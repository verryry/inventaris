
@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Barang Keluar</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Barang Keluar</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <div class="table-responsive m-t-0">
                          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Nama Barang</th>
                                      <th>Jumlah Barang Rusak</th>
                                      <th>Keterangan</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($rusak as $barangs)
                                  <tr>
                                      <td><a href="{{ route('barang-rusak.show',$barangs->id) }}">{{ $barangs->barang->nama_barang }}</a></td>
                                      <td>{{ $barangs->jmlh_rusak }}</td>
                                      <td>{{ $barangs->keterangan }}</td>
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
        <!-- End PAge Content -->
    </div>
</div>
@endsection
