@extends('backend.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Mutasi</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah</a></li>
                <li class="breadcrumb-item active">Mutasi</li>
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
                      <h4>Tambah Mutasi Keluar</h4>

                  </div>
                  <div class="card-body">
                      <div class="basic-elements">
                          <form action="{{ route('mutasi-keluar.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label>Barang<span style="color:red;"> *</span></label>
                                          <select class="form-control" name="id_barang">
                                            <option selected="true" disabled="disabled" value="{{ old('nama_barang') }}">Pilih</option>
                                            @foreach($barang as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                            @endforeach
                                          </select>
                                          <p style="color:red;font-size:13px;">
                                            @if($errors->has('nama_barang'))
                                            <i class="fa fa-exclamation-circle"></i> {{$errors->first('nama_barang')}}
                                            @endif
                                          </p>
                                      </div>

                                        <div class="form-group">
                                            <label>Jumlah Mutasi<span style="color:red;"> *</span></label>
                                            <input type="number" min="0" name="jmlh" class="form-control" value="{{ old('jmlh') }}">
                                            <p style="color:red;font-size:13px;">
                                              @if($errors->has('jmlh'))
                                              <i class="fa fa-exclamation-circle"></i> {{$errors->first('jmlh')}}
                                              @endif
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tujuan<span style="color:red;"> *</span></label>
                                            <input type="text" name="ke" class="form-control" value="{{ old('ke') }}">
                                            <p style="color:red;font-size:13px;">
                                              @if($errors->has('ke'))
                                              <i class="fa fa-exclamation-circle"></i> {{$errors->first('ke')}}
                                              @endif
                                            </p>
                                        </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Keterangan<span style="color:red;"> *</span></label>
                                      <textarea style="border-color:lightgrey;" name="keterangan" rows="8" cols="58"></textarea>
                                        <p style="color:red;font-size:13px;">
                                          @if($errors->has('keterangan'))
                                          <i class="fa fa-exclamation-circle"></i> {{$errors->first('keterangan')}}
                                          @endif
                                        </p>
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
