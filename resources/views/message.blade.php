<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
    <link href="{{asset('bootstrap-4.0.0-dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('js/slick-1.8.1/slick/slick.css')}}"/> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">/ -->
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/c869b225f8.js" crossorigin="anonymous"></script>
    <!-- jquery-->
    <!-- <script  src="{{asset('js/jquery.js')}}"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- Bootstrap js -->
    <script  src="{{asset('bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h4>Gib die neue Nachricht ein</h4>
      </div>
      <div class="row">
        <div class="col">
      <form class="" action="{{route('message.upload')}}" method="post">
            @csrf
            <textarea name="message" rows="8" cols="80"></textarea>
            <button type="sutmit" name="button">Absenden</button>
          </form>

        </div>
      </div>
    </div>
  </body>
  </html>
