<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Painel Administrativo Advir Online</title>
    <link rel="stylesheet" href={{ mix('/css/admin/default/app.css') }}>
</head>
<body>
<div class="wrapper">
    @yield('siderbar', View::make('admin.default.layouts.siderbar'))
    <div class="main">
        @yield('header', View::make('admin.default.layouts.header'))
        <main class="content">
            @yield('content')
        </main>
        @yield('header', View::make('admin.default.layouts.footer'))
    </div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ mix('/js/admin/default/app.js') }}"></script>
</body>
</html>
