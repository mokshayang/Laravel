<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <div style="color:red">
                This is the master sidebar.
                <br>
                這是layout app
            </div>
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>