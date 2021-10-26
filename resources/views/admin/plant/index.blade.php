@extends('layouts.admin')
@section('title','AHPCZ - Cities/Locations')
@section('plugins-css')

@endsection

@section('content')
    <div class="container-fluid">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                 <a href="/admin/plants/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add
                     Plant</a>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

                        <li class="breadcrumb-item active">Plants</li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- End Bread crumb and right sidebar toggle -->

        <!-- Cities/Locations List -->
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success alert-rounded"><i class="fa fa-check-circle"></i>  {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Plants</h4>
                        <div class="table-responsive m-t-40">
                            <table id="cities" class="display nowrap table table-hover table-striped table-bordered"
                                   cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Plant</th>
                                    <th>Document</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Plant</th>
                                    <th>Document</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($plants as $plant)
                                    <tr>
                                        <td><img src="{{asset($plant->path)}}" width="100" ></td>
                                        <td><a href="@if($plant->file){{url($plant->file)}}@endif" target="_blank">View
                                                File</a></td>
                                        <td><a href="/admin/plants/{{$plant->id}}/edit"><i class="fa fa-pencil"></i>
                                                Edit</a> </td>
                                        <td><a href="/admin/plants/{{$plant->id}}"><i class="fa fa-trash"></i>
                                                Delete</a> </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('plugins-js')

    <!-- This is data table -->
    <script src="{{asset('assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>

        $('#cities').DataTable({
            order: [],
            dom: 'Bfrtip',

            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
@endsection
