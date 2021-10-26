@extends('layouts.admin')
@section('title','Felymas')
@section('plugins-css')

@endsection

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">

                <a href="/admin/publications" class="btn btn-success"></i> BACK</a>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-8">
                                @if($errors->any())
                                    @include('errors')
                                @endif

                                @if (session('message'))
                                    <div class="alert alert-success alert-rounded"><i class="fa fa-check-circle"></i>  {{ session('message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                @endif
                                <h4 class="card-title">Publication</h4>
                                {{--
                                                                    <h6 class="card-subtitle">A City is the practitioner's area of practice.</h6>
                                --}}
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <form action="/admin/publications/{{$publication->id}}" method="post" class="m-t-40"
                                      enctype="multipart/form-data" novalidate>
                                    {{method_field('PATCH')}}
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <h5>Provinces <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="publication_category_id" id="select" required
                                                    class="form-control
                                            selectpicker" data-live-search="true">
                                                <option value="">Select Category</option>
                                                @foreach($publication_categories as $publication_category)
                                                    <option value="{{$publication_category->id}}"
                                                    @if($publication->publication_category_id == $publication_category->id){{'selected'}}@endif
                                                    >{{$publication_category->name}}
                                                    </option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> Publication name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" value="{{$publication->name}}"
                                                   class="form-control"
                                                   required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> File <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="file" value="{{old('file')}}" class="form-control"

                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="submit" name="add"
                                                   class="btn btn-rounded btn btn-block btn-success"
                                                   value="Updater Publication">
                                        </div>

                                    </div>


                                </form>
                            </div>


                            <div class="col-3">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('plugins-js')
    <script type="text/javascript">
        $(function() {
            $('.selectpicker').selectpicker();
        });
    </script>
@endsection
