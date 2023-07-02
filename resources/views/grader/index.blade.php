<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h3>
        {{ Auth::guard('grader')->user()->name }}
    </h3>
    <h1>hELLO Grader</h1>
    <a href="{{ route('admin.register') }}">Crteate a new Account</a>
    <a href="{{ route('grader.logout') }}">logout</a>
</body>
</html>
