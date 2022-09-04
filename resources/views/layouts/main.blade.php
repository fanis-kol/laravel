<html>
   <head>
      <title>main</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

   </head>
   <body>
      @include('partials/sidebar')

      @yield('content')
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      
      <script>

         $(document).ready(function() {
           $(".select-opt").select2();
         });
          
         $(document).ready(function (){           
            $.validator.addMethod('selectValid', function(value, ele, param){ 
                return value != '';
            }, 'Select Country');

            $('form').validate({
               rules:{
                  country:{
                     selectValid:true,
                  }
               }
            })
            $('.submit-btn').on('click', function(){
               console.log($('form').valid());
            });
         });

      
      </script>
   </body>
</html>