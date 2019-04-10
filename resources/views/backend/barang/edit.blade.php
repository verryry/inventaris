@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Barang</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah</a></li>
                <li class="breadcrumb-item active">Barang</li>
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
                      <h4>Tambah Barang</h4>

                  </div>
                  <div class="card-body">
                      <div class="basic-elements">
                          <form action="{{ route('barang.update',$barang->id) }}" enctype="multipart/form-data" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                              <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Kode Barang<span style="color:red;"> *</span></label>
                                        <input type="number" min="0" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}">
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('kode_barang'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('kode_barang')}}
                                          @endif
                                        </p>
                                    </div>
                                      <div class="form-group">
                                          <label>Nama Barang<span style="color:red;"> *</span></label>
                                          <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}">
                                          <p style="color:red;font-size:13px;">
                                            @if($errors->has('nama_barang'))
                                            <i class="fa fa-exclamation-circle"></i> {{$errors->first('nama_barang')}}
                                            @endif
                                          </p>
                                      </div>
                                      <label>Gambar Barang<span style="color:red;"> *</span></label>
                                      <div class="form-group dropzone">
                                          <input class="form-control" name="featured_image" type="file" value="{{ $barang->featured_image }}" multiple/>
                                      </div>
                                      <p style="color:red;font-size:13px;">
                                        @if($errors->has('featured_image'))
                                        <i class="fa fa-exclamation-circle"></i> {{$errors->first('featured_image')}}
                                        @endif
                                      </p>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Barang<span style="color:red;"> *</span></label>
                                        <select class="form-control" name="jenis_barang" value="{{ $barang->jenis_barang }}">
                                          <option selected="true" disabled="disabled" value="{{ $barang->jenis_barang }}">{{ $barang->jenis_barang }}</option>
                                          <option value="elektronik">Elektronik</option>
                                          <option value="perabotan">Perabotan</option>
                                        </select>
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('jenis_barang'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('jenis_barang')}}
                                          @endif
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Stok Barang<span style="color:red;"> *</span></label>
                                        <input type="number" min="0" name="stok" class="form-control" value="{{ $barang->stok }}">
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('stok'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('stok')}}
                                          @endif
                                        </p>
                                    </div>
                                    <div class="form-group">
                                      <input type="hidden" name="status" value="tersedia">
                                    </div>
                                  </div>
                              </div>
                              <div class="dt-buttons">
                                <div class="sweetalert m-t-15">
                                  <button class="btn btn-info btn sweet-success" type="submit">Submit</button>
                                </div>
                              </div>
                          </form>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>
@endsection
