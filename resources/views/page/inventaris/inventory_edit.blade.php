@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Inventaris</h1>
        </div>
        
        {{-- Input Group --}}
        <div class="card shadow mb-4">
            <div class="card-body">
               <form action="{{route('inventaris.update', $invent->id)}}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama peminjam buku" aria-label="Nama peminjam buku" name="nama" value="{{$invent->nama}}">
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Judul Buku</label>
                        <select class="form-control" name="buku_id" aria-label="Default select example" required>
                            <option value="{{$invent->buku_id}}" selected>{{$invent->buku->judul}}</option>
                            @foreach ($databuku as $buku)
                                <option value="{{ $buku->id }}">
                                    {{ $buku->judul}}
                                </option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Kondisi Sebelum Peminjaman</label>
                        <select class="form-control" aria-label="Default select example" name="kondisi_sebelum" required>
                            <option value="{{$invent->kondisi_sebelum}}" selected>{{$invent->kondisi_sebelum}}</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Kondisi Setelah Peminjaman</label>
                        <select class="form-control" aria-label="Default select example" name="kondisi_sesudah">
                            <option value="{{$invent->kondisi_sebelum}}" selected>{{$invent->kondisi_sebelum}}</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" aria-label="Tanggal Peminjaman" name="peminjaman" value="{{$invent->peminjaman}}">
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" aria-label="Tanggal Pengembalian" name="pengembalian" value="{{$invent->pengembalian}}">
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