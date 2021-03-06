<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Barber - Kallols Reservation Systems Inc.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="/css/app.css" media="screen">
  <!-- Custom styles for this template -->
  <!-- <link href="starter-template.css" rel="stylesheet"> -->  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.print.css" media="print"/>
</head>

<body>

  @include ('layouts.navbar')

  <div class="container">
    <div class="col-lg-12">
      <div class="row">

        @yield ('content')
        
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
  
        @include ('layouts.footer')
  
      </div>
    </div>
  </div>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/custom.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>


</body>

</html>