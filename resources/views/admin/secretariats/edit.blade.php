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

                <a href="/admin/staff" class="btn btn-success"></i> BACK</a>
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
                                <h4 class="card-title">{{$secretariat->name}}</h4>
                                {{--
                                                                    <h6 class="card-subtitle">A City is the practitioner's area of practice.</h6>
                                --}}
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <form action="/admin/staff/{{$secretariat->id}}" method="post" class="m-t-40"
                                      enctype="multipart/form-data" novalidate>
                                    {{method_field('PATCH')}}
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <h5> Member name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" value="{{$secretariat->name}}"
                                                   class="form-control"
                                                   required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> Member position <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="position" value="{{$secretariat->position}}"
                                                   class="form-control"
                                                   required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5> Member Bio <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="bio" id="editor" class="form-control" required
                                                      data-validation-required-message="This field is
                                                      required">{{$secretariat->bio}}</textarea>
                                        </div>
                                        <div class="form-control-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5> update Image Cover <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" value="{{old('image')}}"
                                                   class="form-control"
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
                                                   value="Update Member">
                                        </div>

                                    </div>


                                </form>
                            </div>

                            <div class="col-3 col-md-3">
                                <div class="card">
                                    <h3>Current profile</h3>
                                    <img class="card-img-top img-responsive" src="{{asset($secretariat->image)}}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        {{--
                                                                                <h4 class="card-title">Current Logo</h4>
                                        --}}
                                    </div>
                                </div>
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
