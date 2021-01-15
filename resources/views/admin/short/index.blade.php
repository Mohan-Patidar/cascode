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
    <div class="page-title d-flex align-items-center justify-content-between">
        <h3 class="breadcrumb-header">Short <b>Code</b></h3>
        <a href="{{route('shorts.create')}}" class="cstm-btn btn btn-primary">Add Short code</a>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="add-expertise">
                            <!--<a href="{{route('shorts.create')}}" class="cstm-btn btn btn-primary">Add Short code</a>-->
                        </div>
                        <!--                     <div class="panel-titles">-->
                        <!--    <h3 class="panel-header">Short code</h3>-->
                        <!--     <a href="{{route('shorts.create')}}" class="btn btn-primary">Add Short code</a>-->
                        <!--</div>-->
                        <div class="table-responsive cstm-data-table">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th> Name</th>
                                        <th> Short Code</th>
                                        <th> Value</th>
                                        <th> Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($shorts as $short)
                                    <tr role="row" class="odd">
                                    @foreach($experts as $expert)
                                    @if($short->expertise_id == $expert->id)
                                        <td class="sorting_1">{{$expert->name}}</td>
                                    @endif
                                    @endforeach    
                                   
                                        <td class="sorting_1">{{$short->short_code}}</td>
                                        <td class="sorting_1">{{$short->value}}</td>
                                        <td class="sorting_1">{{$short->description}}</td>
                                        <td>
                                            <div class="action-btn">
                                                <button class="btn btn-success edit-btn">
                                                    <a href="{{route('shorts.edit', ['short' => $short->id])}}">
                                                        <!--<i class="fa fa-pencil" aria-hidden="true"></i>-->
                                                        <img src="{{url('/')}}/assets/images/edit-icon.svg" alt="">
                                                    </a>
                                                </button>

                                                <!--<form action="{{route('shorts.destroy', ['short' => $short->id])}}"-->
                                                <!--    method="post">-->
                                                <!--    <input type="hidden" name="_method" value="DELETE">-->
                                                <!--    <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                                                <!--    <button type="submit" class="btn btn-danger">-->
                                                        <!--<i class="fa fa-trash" aria-hidden="true"></i>-->
                                                <!--        <img src="{{url('/')}}/assets/images/trash-icon.svg" alt="">-->
                                                <!--    </button>-->
                                                <!--</form>-->
                                                <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-id="{{$short->id}}" data-name="{{ $short->name }}">
                                                <img src="{{url('/')}}/assets/images/trash-icon.svg" alt="">
                                                    </button>  
                                            </div>
                                        </td>
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
</div>
@endsection
@section('additionalscripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
$('.delete-confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      var id = $(this).data("id");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete ${name}?`,
         
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
            url: 'delete', 
            method: "get",  
            data:{id:id},  
            success:function(data){
               location.reload();
                
                // console.log(data);
           }  

       });  
        }
      });
  });
</script>
@endsection