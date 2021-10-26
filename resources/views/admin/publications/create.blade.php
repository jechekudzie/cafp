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
                            <div class="col-2"></div>
                            <div class="col-8">
                                <form action="/admin/publications" method="post" class="m-t-40"
                                      enctype="multipart/form-data"
                                      novalidate>
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <h5>Category <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="publication_category_id" id="select" required class="form-control selectpicker" data-live-search="true">
                                                <option value="">Select Category</option>
                                                @foreach($publication_categories as $publication_category)
                                                    <option
                                                        value="{{$publication_category->id}}">{{$publication_category->name}}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Period <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="period" id="select" required class="form-control selectpicker" data-live-search="true">
                                                <option value="">Choose Period</option>
                                                @for($x =date('Y');$x >= 2008;$x--)
                                                    <option value="{{$x}}">{{$x}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5> Publication title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="title" value="{{old('title')}}"
                                                   class="form-control"
                                                   required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> Publication sub title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="sub_title" value="{{old('sub_title')}}"
                                                   class="form-control"
                                                   required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> Publication intro <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea  name="description" id="editor" class="form-control"
                                                       required></textarea>
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> Authors (separate by comma)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="authors" value="{{old('authors')}}"
                                                   class="form-control"
                                                   required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> Publication file <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="file" value="{{old('file')}}" class="form-control"
                                                   required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="submit" name="add"
                                                   class="btn btn-rounded btn btn-block btn-success"
                                                   value="Add Publication">
                                        </div>

                                    </div>


                                </form>
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
