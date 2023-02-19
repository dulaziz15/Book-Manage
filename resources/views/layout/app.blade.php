
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shorcut icon" href="{{ url('img/icon.png') }}">
    <title>Book Manage</title>

    @include('tools.style')

</head>

<body id="page-top">

    @include('components.sidebar')
    @include('components.navbar')

        @yield('content')

    @include('components.footer')
    @include('tools.modal_logout')
    @include('tools.scripts')

</body>

</html>