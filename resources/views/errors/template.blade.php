<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                background: #181818;
                display: table;
                font-size: 24px;
                font-family: system, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                color: #a0a0a0;
            }

            .container {
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                padding: 76px;
            }

            .title {
                font-weight: 100;
                font-size: 48px;
                margin-bottom: 40px;
                color: #fff;
            }


            button {
                background: #3498db;
                background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
                background-image: -moz-linear-gradient(top, #3498db, #2980b9);
                background-image: -ms-linear-gradient(top, #3498db, #2980b9);
                background-image: -o-linear-gradient(top, #3498db, #2980b9);
                background-image: linear-gradient(to bottom, #3498db, #2980b9);
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                font-family: Arial;
                color: #ffffff;
                font-size: 18px;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
                border: none;
            }

            button:hover {
                background: #3cb0fd;
                background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
                background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
                text-decoration: none;
            }


        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">@yield('title')</div>
                <div class="details">@yield('details')</div>
                <a href="{{ url('/') }}" style="text-decoration: none;">
                    <button>Homepage</button>
                </a>
            </div>
        </div>
    </body>
</html>