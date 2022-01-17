@extends('layout.app')

@section('content')
<!-- Begin Page Content -->

<div id="content">
@include('layout.header.top-nav')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
    <a href="{{ route('blog.create') }}" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Data</span>
    </a>

    <br> <br> <br>
    <div class="divider"></div>
        <div class="table-responsive">
        @include('layout.msg.msg-blade')
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                       
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Waktu Upload</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($blogs as $blg)
                    <?php $no = 1;  ?>
                    <tr>
                        <td>{{ $no }}</td>
                     
                        <td>{{$blg->judul}}</td>
                        <td>{!!$blg->deskripsi!!}</td>
                        <td>{{ \Carbon\Carbon::parse($blg->created_at)->diffForHumans() }}
                        </td>
                        <td>
                        <a onclick="return confirm('Are you sure you want to update this item?');" href="{{ url('/blog/edit/' . $blg->id) }}" class="btn btn-warning btn-circle">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ url('/blog/hapus/' . $blg->id) }}" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                    <?php $no++ ?>
                    @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>
</div>
<!-- /.container-fluid -->

@endsection