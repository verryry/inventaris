@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Barang</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Barang</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
      <!-- /# row -->
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-title">
                      <h4>Info Umum</h4>

                  </div>
                  <div class="card-body">
                    <div class="basic-elements">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Nama:</label><br>
                            <h4>{{ $barang->nama_barang }}</h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Kode Barang:</label><br>
                            <h4>{{ $barang->kode_barang }}</h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label><b>Status:</b></label><br>
                            <h4>{{ $barang->status }}</h4>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <hr class="style">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Featured Image:</label><br>
                            @if($barang->featured_image)
                              <img src="{{asset('images/'.$barang->featured_image)}}" alt="logo" height="150" width="200">
                            @else
                              <p>Ga ada</p>
                            @endif
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Price:</label><br>
                            <h4>{{ $barang->jenis_barang }}</h4>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <hr class="style">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Created At :</label><br>
                            <h4>{{ $barang->created_at }}</h4>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label style="font-weight:bold;">Updated At:</label><br>
                            <h4>{{ $barang->updated_at }} </h4>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <hr class="style">
                        </div>
                      </div>
                      <div class="dt-buttons">
                        <div class="sweetalert m-t-15">
                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-md m-b-10 m-l-5" name="button">Edit</a>
                        </div>
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
