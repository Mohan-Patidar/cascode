@extends('layouts.adminlayout')

@section('content')

<div class="page-inner ad-inr">
  
      <div class="page-title">
        <h3 class="panel-header">Add Short <b>code</b></h3>
       <a href="{{url('/shorts')}}" class="cstm-btn btn btn-primary">
                                                < Back</a> 
    </div>
      <div class="inr-page-sec">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                 
                <div class="panel panel-white">
    
                    <div class="panel-body">
                       @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
                        <form class="popup-box" method="Post" action="{{route('shorts.store')}}"
                            enctype="multipart/form-data" onsubmit="return redirectMe();">
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
                                        <input type="text" placeholder="Short Code" name="short_code" id="short_code"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Value</label>
                                        <input type="text" placeholder="Value" name="value" id="value"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description </label>
                                        <textarea id="description" placeholder="Description" name="description"
                                            class="form-control textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                           <div class="btn-inline">
 <button type="submit" class="cstm-btn margin-top-15" name="save" value="saveclose">Save & Close</button>
                            <button type="submit" class="cstm-btn margin-top-15 margin-left-15" name="save" value="saveadd">Save & Add New</button>
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