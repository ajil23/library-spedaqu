@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data E-Book</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('ebuku.update', $editebook->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Judul E-Book</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$editebook->judul}}" placeholder="Judul Lengkap Buku">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">File PDF E-Book</label>
                        <input type="file" class="form-control" id="pdf" name="pdf" placeholder="File PDF Ebook" value="{{$editebook->pdf}}">
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="inputEmail4" class="form-label">Jumlah Halaman</label>
                            <input type="number" class="form-control" name="halaman" value="{{$editebook->halaman}}" placeholder="Halaman" aria-label="Halaman">
                        </div>
                        <div class="col">
                            <label for="inputEmail4" class="form-label">Kategori</label>
                            <select class="form-control" name="kategori_id" aria-label="Default select example">
                                <option  value="{{$editebook->kategori_id}}" selected >{{$editebook->kategori->nama_kategori}}</option>
                                @foreach ($datakategori as $kategori)
                                    <option value="{{ $kategori->id }}">
                                        {{ $kategori->nama_kategori}}
                                    </option>
                                @endforeach
                              </select>
                        </div>
                        <div class="col">
                            <label for="inputEmail4" class="form-label">Sampul</label>
                            <input type="file" class="form-control" name="file" value="{{$editebook->cover}}" placeholder="Cover ebook" aria-label="Jumlah Buku">
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