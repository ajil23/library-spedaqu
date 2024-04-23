@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">E-book</h1>
            <a href="{{route('ebuku.add')}}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah E-Book</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Tabel Data E-Book</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Judul</center></th>
                                <th><center>Kategori</center></th>
                                <th><center>Jumlah Halaman</center></th>
                                <th><center>Sampul</center></th>
                                <th><center>PDF</center></th>
                                <th><center>Opsi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataebook as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}</center></td>
                                <td><center>{{$item->judul}}</center></td>
                                <td><center>{{$item->kategori->nama_kategori}}</center></td>
                                <td><center>{{$item->halaman}}</center></td>
                                <td><center><img src="{{ asset('storage/'.$item->image) }}" alt="sampul" style="height: 5rem; width:4rem"></center></td>
                                <td><a href="{{route('ebuku.pdf',$item->id)}}" target="_blank">
                                    <center><i class="fas fa-eye"></i><b>Lihat</b></center>
                                    </a></td>
                                <td colspan="2">
                                    <a href="{{route('ebuku.edit', $item->id)}}" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="fas fa-solid fa-pen fa-sm text-white-50"></i> Ubah
                                    </a>
                                    <a href="{{route('ebuku.delete', $item->id)}}" onclick="return confirm('Apakah anda yakin?')" class="d-none d-sm-inline-block btn btn-danger shadow"><i
                                        class="fas fa-solid fa-eraser fa-sm text-white-50"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$dataebook->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
   </div>
   @endsection