@extends('layouts.adminlayout')

@section('content')

<div class="page-inner ad-inr">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
  
        <div class="page-title">
            <h3 class="panel-header">Edit Expert <b>area</b></h3>
            <a href="{{url('/experts')}}" class="cstm-btn btn btn-primary">
                < Back</a>
        </div>
          <div class="inr-page-sec">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <!--<div class="col-md-12 text-right btn-margin">-->
                    <!--                            <a href="{{url('/experts')}}" class="btn btn-primary">-->
                    <!--                                < Back</a> -->
                    <!--                        </div> -->

                    <div class="panel panel-white">
                        <!--                                     <div class="panel-titles">-->
                        <!--    <h3 class="panel-header">Edit Expert area</h3>-->
                        <!--   <a href="{{url('/experts')}}" class="cstm-btn btn btn-primary">-->
                        <!--                                            < Back</a> -->
                        <!--</div>-->
                        <div class="panel-body">
                            <form class="popup-box" method="Post"
                                action="{{route('experts.update',['expert' => $expert->id])}}"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$expert->id}}" />
                                        <div class="form-group">
                                            <label> Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                value="{{$expert->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="description" placeholder="Description" name="description"
                                                class="form-control textarea summernote">{{$expert->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="cstm-btn margin-top-15">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection