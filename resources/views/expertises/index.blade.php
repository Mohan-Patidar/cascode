<!DOCTYPE html>
<html>
  <head>
    <title>Loading data remotely in Select2 – Laravel</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/select2/dist/css/select2.min.css">

    <!-- Script -->
    <script src="{{url('/')}}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/assets/select2/dist/js/select2.min.js"></script>

  </head>
  <body>

    <!-- For defining autocomplete -->
    <select id='selUser' style='width: 200px;'>
      <option value='0'>-- Select user --</option>
    </select>

    <!-- Script -->
    <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#selUser" ).select2({
        ajax: { 
          url: "{{route('expertises.getExpertises')}}",
          type: "post",
          dataType: 'json',
          delay: 250,
          data: function (params) {
            return {
              _token: CSRF_TOKEN,
              search: params.term // search term
            };
          },
          processResults: function (response) {
            return {
              results: response
            };
          },
          cache: true
        }

      });

    });
    </script>
  </body>
</html>