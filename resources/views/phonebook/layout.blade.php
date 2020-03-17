<!DOCTYPE html>
<html>
<head>
    <title>Phonebook</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
</head>
<body class="bg-light">
    <div>
        @yield('nav')
    </div>
    
    <div id="tableContent">
        @yield('content')
    </div>
    
    <div>
        @yield('foot')
    </div>
</body>
</html>