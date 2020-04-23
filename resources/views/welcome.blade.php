<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="penguin">
            <div class="penguin-bottom">
              <div class="right-hand"></div>
              <div class="left-hand"></div>
              <div class="right-feet"></div>
              <div class="left-feet"></div>
            </div>
            <div class="penguin-top">
              <div class="right-cheek"></div>
              <div class="left-cheek"></div>
              <div class="belly"></div>
              <div class="right-eye">
                <div class="sparkle"></div>
              </div>
              <div class="left-eye">
                <div class="sparkle"></div>
              </div>
              <div class="blush-right"></div>
              <div class="blush-left"></div>
              <div class="beak-top"></div>
              <div class="beak-bottom"></div>
            </div>
          </div>
    </body>
</html>
