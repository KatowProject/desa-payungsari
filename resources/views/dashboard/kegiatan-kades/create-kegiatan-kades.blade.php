@extends('dashboard.layouts.template')


@section('content')


    <style>
        .form-label{
        font-weight: 500;
        padding-left: 3px;
        font-size: 14px;
        font-family: Arial;
        }
        
        .form-label span{
        color: red;
        }
  judul{
        text-align: center;
        font-weight: 500;
        background-color: rgb(182, 182, 182);
        }
        
        .form-control{
        box-shadow: none;
        border-radius: 0; 
        }
        
        .form-select{
        box-shadow: none;
        border-radius: 0; 
        }
        
        .form-control:focus{
        box-shadow: none;
        border-radius: 0; 
        }
        
        .form-select:focus{
        box-shadow: none;
        border-radius: 0; 
        }
        
        .btn-submit{
        border-radius: 5px;
        padding: 10px 30px;
        }
        
        .btn-back{
        border-radius: 5px;
        padding: 10px 30px;
        margin-left: 10px;
        margin-top: 10px;
        }
    </style>




<div class="card">
    <h2 class="card-title px-4">Kegiatan Kepala Desa</h2>
        <div class="card-body">
            <form action="/kades" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="col-md-1">
                    <label for="judul" class="form-label">Judul<span>*</span></label>
                    <input type="text" class="form-control" name="judul">
                  </div>
                </div>
                <br>
                <div class="form-floating">
            
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="isi"></textarea>
                  <label for="floatingTextarea">Isi</label>
                </div>
                <div class="col-md-6">
                  <label for="keterangan" class="form-label">Keterangan <span>*</span></label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" autocomplete="off">
                </div>
                
                  <div class="col-md-6">
                    <label for="formFile" class="form-label">Foto Kegiatan <span>*</span></label>
                    <input type="file" name="photo_path[]" multiple class="form-control">
                  </div>
                  <div class="col-12 text-end">
                    <button class="btn btn-primary btn-submit" type="submit"><i class="bi bi-file-earmark-plus"></i> Tambahkan Kegiatan </button>
                  </div>        
              </form>
        </div>
</div>

@endsection