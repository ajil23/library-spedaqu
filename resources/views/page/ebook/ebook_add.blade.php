@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data E-Book</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('ebuku.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Judul E-Book</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Lengkap Buku" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">File PDF E-Book</label>
                    <input type="file" class="form-control" id="pdf" name="pdf" placeholder="File PDF Ebook" required>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Jumlah Halaman</label>
                        <input type="number" class="form-control" name="halaman" placeholder="Halaman" aria-label="Halaman" required>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Kategori</label>
                        <select class="form-control" name="kategori_id" aria-label="Default select example" required>
                            <option selected>Pilih Kategori Buku</option>
                            @foreach ($datakategori as $kategori)
                                <option value="{{ $kategori->id }}">
                                    {{ $kategori->nama_kategori}}
                                </option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Sampul</label>
                        <input type="file" class="form-control" name="image" placeholder="Sampul ebook" aria-label="Jumlah Buku">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success shadow">Simpan</button>
                    <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
                </div>
                </form>
            </div>
        </div>
   </div>
   @endsection