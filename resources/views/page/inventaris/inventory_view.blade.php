@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inventaris</h1>
            <a href="{{route('inventaris.add')}}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Tabel Data Inventaris</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th><center>Judul</center></th>
                                <th><center>Peminjam</center></th>
                                <th><center>Kondisi Sebelum</center></th>
                                <th><center>Kondisi Setelah</center></th>
                                <th><center>Tgl Peminjaman</center></th>
                                <th><center>Tgl Pengembalian</center></th>
                                <th><center>Opsi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invent as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}</center></td>
                                <td><center>{{$item->buku->judul}}</center></td>
                                <td><center>{{$item->nama}}</center></td>
                                <td><center>{{$item->kondisi_sebelum}}</center></td>
                                <td><center>{{$item->kondisi_sesudah}}</center></td>
                                <td><center>{{$item->peminjaman}}</center></td>
                                <td><center>{{$item->pengembalian}}</center></td>
                                <td colspan="2">
                                    <a href="#" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="fas fa-solid fa-pen fa-sm text-white-50"></i>
                                    </a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-danger shadow"><i
                                        class="fas fa-solid fa-eraser fa-sm text-white-50"></i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   </div>
   @endsection