<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
            name="viewport"
        />
        <title>@yield('titlePage')</title>

        @include('includes.user.style')

    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">

                @include('includes.user.navbar')
                
                @include('includes.user.sidebar')

                @yield('content')
                
                @include('includes.user.footer')

            </div>
        </div>

        @include('includes.user.script')

    </body>
</html>
