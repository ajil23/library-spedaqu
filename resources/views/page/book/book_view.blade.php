@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buku</h1>
            <a href="{{route('buku.add')}}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Buku</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Tabel Data Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>Judul</center></th>
                                <th><center>Penerbit</center></th>
                                <th><center>Kategori</center></th>
                                <th><center>Jumlah Halaman</center></th>
                                <th><center>Jumlah Buku</center></th>
                                <th><center>Opsi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><center>Ilmu Pengetahuan Alam Kelas VII</center></td>
                                <td><center>Indah Cahya Grup</center></td>
                                <td><center>Alam</center></td>
                                <td><center>61</center></td>
                                <td><center>125</center></td>
                                <td colspan="2">
                                    <a href="{{route('buku.edit')}}" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="fas fa-solid fa-pen fa-sm text-white-50"></i> Ubah
                                    </a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-danger shadow"><i
                                        class="fas fa-solid fa-eraser fa-sm text-white-50"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   </div>
   @endsection