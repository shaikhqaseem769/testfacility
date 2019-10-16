<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DCPFood Settings</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/demo/public/app-assets/images/favicon.jpg" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            ul > li{
                list-style: none;
                display: inline-block;
            }
            label,input{

                position: relative;
                display: block;
                float: left;
            }
            .white{
              background-color: white !important;
              color: grey !important;
            }
            .black{
              background-color: black !important;
              color: white !important;
            }
            .green{
              background-color: green !important;
              color: black !important;
            }
            .red{
              background-color: red !important;
              color: black !important;
            }
            .pink{
              background-color: pink !important;
              color: black !important;
            }
            .maroon{
              background-color: maroon !important;
              color: white !important;
            }
            .aqua{
              background-color: aqua !important;
              color: black !important;
            }
            .grey{
              background-color: grey !important;
              color: black !important;
            }
        </style>
    </head>
    <body class="{{ session('theme') }}">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/settings') }}">Settings</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="content">
                <div class="m-b-mds">
                    <form action="{{ url('save_settings') }}" method="POST">
                        {{ csrf_field() }}
                        <fieldset>
                            <legend>Notification Setting</legend>
                            <label for="sendNotification">
                                <input type="Checkbox" name="sendNotification" id="sendNotification">Send Notification
                            </label>
                        </fieldset>

                        <fieldset>
                            <legend>Email Setting</legend>
                            <label for="sendEmail">
                                <input type="Checkbox" name="sendEmail" id="sendEmail">Send Email
                            </label>
                        </fieldset>

                        <fieldset>
                            <legend>Theme Setting</legend>
                            <label for="theme">
                                <select name="theme" id="theme" onchange="changeColor(this);">
                                    @foreach($time_zones as $time_zone)
                                    <option value="{{ $time_zone }}" {{ (session('theme')==$time_zone) ? 'selected' : '' }}>{{ucfirst($time_zone)}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </fieldset>

                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            changeColor = function(ev){
                document.getElementsByTagName('body')[0].className = ev.value;
            };

        </script>
    </body>
</html>
