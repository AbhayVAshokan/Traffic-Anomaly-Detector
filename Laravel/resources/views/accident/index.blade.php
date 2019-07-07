@extends('master')

@section('link')
    <title>QResponse
    </title>
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/adminlte.min.css') }}">
    <link rel="shortcut icon" href="emergency-icon.ico" />
    <!-- summernote -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/summernote-bs4.css') }}">
    <link href="https://cdnjs.cloudfare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <b><h1>Respond Now</h1></b>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Articles</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!--Success message -->

        <section class="content">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">ACCIDENT DATA</h3>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">ID</th>
                                            <th>CAMERA_NO</th>
                                            <th>LATITUDE</th>
                                            <th>LONGITUDE</th>
                                            <th>IMAGE</th>
                                            <th >CREATED_DATE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($accident as $row)
                                            <tr>
                                                <td>{{ $row->id }}</td>
                                                <td>{{$row->camera_id}}</td>
                                                <td>{{$row->latitude}}</td>
                                                <td>{{$row->longitude}}</td>
                                                <td><img src="{{ url(''.$row->image_src) }}" width="200" height="150" alt="" title="" /></td>
                                                <td>{{$row->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot><!--
                                      <tr>
                                          <th style="width: 10px">ID</th>
                                          <th>Name</th>
                                          <th>Location</th>
                                          <th>Organizer</th>
                                          <th >Start_Date</th>
                                          <th>End_Date</th>
                                          <th style="width:250px">Action</th>
                                      </tr>-->
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script>
        $(document).ready(function () {
            $('.delete_form').on('submit', function () {
                if (confirm("Are you sure you want to delete it?")) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
@endsection

@section('footer')
    <script type="text/javascript" src="{{ url('js/summernote-bs4.min.js') }}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection