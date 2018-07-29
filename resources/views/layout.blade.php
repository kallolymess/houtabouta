<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Barber - Kallols Reservation Systems Inc.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="/css/simplex-bootwatch.css" media="screen">
  <link rel="stylesheet" href="/css/custom.min.css">
</head>

<body>

  @include ('layouts.navbar')

  <div class="container">

    <div class="row">

        @yield ('content')
        
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

</body>

</html>