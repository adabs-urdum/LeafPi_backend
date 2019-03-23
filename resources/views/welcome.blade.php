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
              <a href="{{ route('toggleOn') }}">toggle</a>

              <section>
                <h1>set brightness</h1>
                <ul>
                  <li><a href="{{ route('brightness', 25) }}">25%</a></li>
                  <li><a href="{{ route('brightness', 50) }}">50%</a></li>
                  <li><a href="{{ route('brightness', 75) }}">75%</a></li>
                  <li><a href="{{ route('brightness', 100) }}">100%</a></li>
                </ul>
              </section>

              <section>
                <h1>set color temperature</h1>
                <ul>
                  <li><a href="{{ route('temperature', 6500) }}">cold white 6500</a></li>
                  <li><a href="{{ route('temperature', 5250) }}">neutral white 5250</a></li>
                  <li><a href="{{ route('temperature', 4000) }}">warm white 4000</a></li>
                </ul>
              </section>
          </div>
        </section>
    </body>
</html>
