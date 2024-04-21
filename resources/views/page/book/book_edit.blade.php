@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Buku</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('buku.update', $editbuku->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$editbuku->judul}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{$editbuku->penerbit}}">
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="inputEmail4" class="form-label">Jumlah Halaman</label>
                            <input type="number" class="form-control" placeholder="Halaman" name="halaman" aria-label="Halaman" value="{{$editbuku->halaman}}">
                        </div>
                        <div class="col">
                            <label for="inputEmail4" class="form-label">Kategori</label>
                            <select class="form-control" name="kategori_id" aria-label="Default select example">
                                <option  value="{{$editbuku->kategori_id}}" selected >{{$editbuku->kategori->nama_kategori}}</option>
                                @foreach ($datakategori as $kategori)
                                    <option value="{{ $kategori->id }}">
                                        {{ $kategori->nama_kategori}}
                                    </option>
                                @endforeach
                              </select>
                        </div>
                        <div class="col">
                            <label for="inputEmail4" class="form-label">Jumlah Buku</label>
                            <input type="number" class="form-control" name="jumlah" value="{{$editbuku->jumlah}}" aria-label="Jumlah Buku">
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