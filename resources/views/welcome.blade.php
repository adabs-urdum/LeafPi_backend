<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LeafPi</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section>
          <div>
              <a href="{{ route('turnOn') }}">on</a>
              <a href="{{ route('turnOff') }}">off</a>
          </div>
        </section>
    </body>
</html>
