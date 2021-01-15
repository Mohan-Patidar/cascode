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
            <h3 class="panel-header">Add Expert <b>area</b></h3>
            <a href="{{url('/experts')}}" class="cstm-btn btn btn-primary">
                < Back</a>
        </div>
         <div class="inr-page-sec">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                      
                        <div class="panel-body" class="center hideform">
                            <form class="popup-box" method="Post" action="{{route('experts.store')}}"
                                enctype="multipart/form-data" onsubmit="return redirectMe();">

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="Expertise Area" name="name" id="name"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="description" placeholder="Description" name="description"
                                                class="form-control textarea summernote"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="cstm-btn margin-top-15">Add Expert</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection