
@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Barang</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Barang</li>
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
                      <a href="{{route('barang.create') }}" class="btn btn-info btn-rounded" name="button">Tambah Barang</a>
                      <div class="table-responsive m-t-0">
                          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Kode</th>
                                      <th>Nama Barang</th>
                                      <th>Photo</th>
                                      <th>Stok</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($barang as $barangs)
                                  <tr>
                                      <td><a href="{{ route('barang.show',$barangs->id) }}">{{ $barangs->kode_barang }}</a></td>
                                      <td>{{ $barangs->nama_barang }}</td>
                                      <td>
                                        @if($barangs->featured_image)
                                        <img src="{{asset('images/'.$barangs->featured_image)}}" alt="logo" height="50" width="50" style="display:block;margin-left:auto;margin-right:auto;">
                                      @else
                                        <p>Ga ada</p>
                                      @endif
                                    </td>
                                    <td>{{ $barangs->stok }}</td>
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
