@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Buku</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" placeholder="Judul Lengkap Buku">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" placeholder="Penerbit Buku">
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Jumlah Halaman</label>
                        <input type="number" class="form-control" placeholder="Halaman" aria-label="Halaman">
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Kategori</label>
                        <select class="form-control" aria-label="Default select example">
                            <option selected>Pilih Kategori Buku</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Jumlah Buku</label>
                        <input type="number" class="form-control" placeholder="Jumlah Buku Yang Tersedia" aria-label="Jumlah Buku">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success shadow">Simpan</button>
                    <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
                </div>
            </div>
        </div>
   </div>
   @endsection