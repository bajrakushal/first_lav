@extends('layouts.master1')
@section('sidebar')
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/dashboard" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="/admin/rooms" aria-expanded="false">
                        <i class="fa fa-procedures"></i>
                        <span class="hide-menu">Rooms </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">View Rooms</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">View Room Details</h5>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif(session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
                    
                @endif
                <a href="/admin/room/create">
                    <button type="button" class="btn btn-primary" style="float: right;margin-bottom: 10px;">
                    <span>
                        <i class="fa fa-plus"></i>
                    </span>
                        Add Room
                    </button>
                </a>
                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datas as $i => $data)
                            <tr>
                                <td> {{ ++$i }}</td>
                                <td> {{ $data -> Room_name }}</td>
                                <td> {{ $data -> type }}</td>
                                <td> {{ $data -> price }}</td>
                                <td> {{ $data -> description }}</td>
                        
                                <td>
                                    <a href=""><i class="fa fa-eye"></i> </a>
                                    <a href="/admin/room/edit/{{ $data ->id }}"><i class="fa fa-edit"></i> </a>
                                    <a href="/admin/rooms/delete/{{ $data->id }}"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                         @endforeach
                        </tbody>
                        <tfoot>
                        <tr> 
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
