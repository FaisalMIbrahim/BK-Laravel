<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('stisla-master/assets/modules/ionicons/css/ionicons.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla-master//assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla-master/assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
        @include('partials.nav');
        @include('partials.sidebar');
    </div>
    @include('sweetalert::alert')
         
        <div class="main-content">
         
            @yield('content')
        </div>
    </div>
  </div>
</div>

<!-- General JS Scripts -->
 <!-- General JS Scripts -->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
 <script src="{{ asset('stisla-master/assets/js/stisla.js') }}"></script>

 <!-- JS Libraies -->

 <!-- Template JS File -->
 <script src="{{ asset('stisla-master/assets/js/scripts.js')}}"></script>
 <script src="{{ asset('stisla-master/assets/js/custom.js')}}"></script>

 <!-- Page Specific JS File -->
<script>
 $(document).ready(function() {
            $('#siswa_id').on('change', function() {
               var siswaID = $(this).val();
               if(siswaID) {
                   $.ajax({
                       url: '/getsiswa/'+siswaID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#nis').empty();
                            $('#nama').empty();

                            $.each(data, function(key, nis, nama){
                                $('[name="nis"]').val(nis.nis);
                                $('[name="nama"]').val(nis.nama);
                            });
                        }else{
                            $('#course').empty();
                        }
                     }
                   });
               }else{
                 $('#course').empty();
               }
            });
            });
 $(document).ready(function() {
            $('#users_id').on('change', function() {
               var usersID = $(this).val();
               if(usersID) {
                   $.ajax({
                       url: '/getuser/'+usersID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#nis').empty();
                            $('#nama_lengkap').empty();

                            $.each(data, function(key, nis, nama){
                                $('[name="nis"]').val(nis.nis);
                                $('[name="nama"]').val(nis.nama_lengkap);
                            });
                        }else{
                            $('#course').empty();
                        }
                     }
                   });
               }else{
                 $('#course').empty();
               }
            });
            });
 $(document).ready(function() {
            $('#users_id').on('change', function() {
               var usersID = $(this).val();
               if(usersID) {
                   $.ajax({
                       url: '/getpendidik/'+usersID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#nis').empty();
                            $('#nama_lengkap').empty();

                            $.each(data, function(key, nis, nama){
                                $('[name="nama"]').val(nis.nama_lengkap);
                            });
                        }else{
                            $('#courxse').empty();
                        }
                     }
                   });
               }else{
                 $('#course').empty();
               }
            });
            });

</script>
</body>
</html>

