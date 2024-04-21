@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kategori Buku</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('cat.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Kategori Buku</label>
                        <input type="text" class="form-control" id="judul" name="nama_kategori" placeholder="Tulis kategori buku baru untuk ditambahkan...">
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