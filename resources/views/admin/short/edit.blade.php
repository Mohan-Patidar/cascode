@extends('layouts.adminlayout')

@section('content')

@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<div class="page-inner ad-inr">
   
        <div class="page-title">
            <h3 class="panel-header">Edit Short <b>code</b></h3>
            <a href="{{url('/shorts')}}" class="cstm-btn btn btn-primary">
                < Back</a>
        </div>
         <div class="inr-page-sec">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <!--<div class="col-md-12 text-right btn-margin">-->
                    <!--                           <a href="{{url('/shorts')}}" class="btn btn-primary">-->
                    <!--                               < Back</a> -->
                    <!--                       </div> -->
                    <div class="panel panel-white">
                        <!--                      <div class="panel-titles">-->
                        <!--    <h3 class="panel-header">Edit Short Code</h3>-->
                        <!--   <a href="{{url('/shorts')}}" class="cstm-btn btn btn-primary">-->
                        <!--                                            < Back</a> -->
                        <!--</div>-->
                        <div class="panel-body">
                            <form class="popup-box" method="Post"
                                action="{{route('shorts.update',['short' => $short->id])}}"
                                enctype="multipart/form-data" onsubmit="return redirectMe();">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Expertise Name</label>
                                            <select class="form-control select2" name="expertise_id">
                                                @foreach($experts as $expert)
                                                <option value="{{$expert->id}}">{{$expert->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short Code</label>
                                            <input type="text" placeholder="Short Code" name="short_code"
                                                id="short_code" class="form-control" value="{{$short->short_code}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Value</label>
                                            <input type="text" placeholder="Value" name="value" id="value"
                                                class="form-control" value="{{$short->value}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description </label>
                                            <textarea id="description" placeholder="Description" name="description"
                                                class="form-control textarea">{{$short->description}}</textarea>
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

        @endsection