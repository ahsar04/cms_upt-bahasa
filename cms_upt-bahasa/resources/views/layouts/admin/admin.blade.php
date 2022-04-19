<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
            name="viewport"
        />
        <title>Modules &rsaquo; DataTables &mdash; Stisla</title>

        @include('includes.admin.style')

    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">

                @include('includes.admin.navbar')
                
                @include('includes.admin.sidebar')

                @yield('content')
                
                @include('includes.admin.footer')

            </div>
        </div>

        @include('includes.admin.script')

    </body>
</html>
