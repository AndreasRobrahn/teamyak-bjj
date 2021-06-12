<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->

    <title>Benachrichtigung</title>
    <!-- Styles -->
    <body>
      <div class="" style="display: block; height: auto; width: 100%;">
        <div class="" style="display: flex; width: 100%; padding: 5px;">
          @if(isset($customer))
            <h5 style="font-size: 1.5em; font-weight: 900;">Danke für deine Anfrage. In Kürze erhälst du eine Rückmeldung</h5>
          @else
            <h5>Wir haben eine Anfrage erhalten</h5>
          @endif
        </div>
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <p>{{$dmessage}}</p>
        </div>
        @if(!isset($customer))
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <p>Von: {{$name}} </p>
          <p>Email: {{$email}}</p>
        </div>
        @endif
      </div>
    </body>

</html>
