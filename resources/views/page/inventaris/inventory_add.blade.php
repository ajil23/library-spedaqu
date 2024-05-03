@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Inventaris</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
               <form action="{{route('inventaris.store')}}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama peminjam buku" aria-label="Nama peminjam buku" name="nama" required>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Judul Buku</label>
                        <select class="form-control" name="buku_id" aria-label="Default select example" required>
                            <option value="">Pilih Judul Buku</option>
                            @foreach ($databuku as $buku)
                                <option value="{{ $buku->id }}">
                                    {{ $buku->judul}}
                                </option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Kondisi Sebelum Peminjaman</label>
                        <select class="form-control" name="kondisi_sebelum" id="kondisi_sebelum" required>
                            <option value="">Pilih Kondisi Buku</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                        </select>
                        {{-- <select class="form-control" aria-label="Default select example" name="kondisi_sebelum" required>
                            <option selected>Pilih Kondisi Buku</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                        </select> --}}
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Kondisi Setelah Peminjaman</label>
                        <select class="form-control" aria-label="Pilih Kondisi" name="kondisi_sesudah">
                            <option value="">Pilih Kondisi Buku</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" aria-label="Tanggal Peminjaman" name="peminjaman" required>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" aria-label="Tanggal Pengembalian" name="pengembalian">
                    </div>
                </div>
                <br>
               <p class="text-danger">*Pastikan anda mengisi formulir dengan benar!</p>
                <div>
                    <button type="submit" value="Submit" class="btn btn-success shadow">Simpan</button>
                    <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
                </div>
               </form>
            </div>
        </div>
   </div>
   @endsection