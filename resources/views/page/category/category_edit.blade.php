@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Kategori</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('cat.update', $editkategori->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Kategori Buku</label>
                        <input type="text" class="form-control" id="judul" value="{{$editkategori->nama_kategori}}" name="nama_kategori" >
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success shadow">Simpan</button>
                        <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
                    </div>
                </form>
            </div>
        </div>
   </div>
   @endsection