<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tasks for Today' }}</title>
    <style>body{font-family:Arial,sans-serif;background:#f5f7fb;color:#17202a;margin:0}.nav{background:#fff;border-bottom:1px solid #ddd;padding:20px 8%;display:flex;justify-content:space-between}.nav a{margin-left:20px;color:#2563eb;text-decoration:none;font-weight:bold}.container{max-width:900px;margin:40px auto;padding:0 20px}.card{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:24px;margin:16px 0}.task{display:flex;justify-content:space-between;border-bottom:1px solid #eee;padding:14px 0}.task:last-child{border:0}.badge{padding:5px 9px;border-radius:12px;background:#e0ecff;color:#1d4ed8;font-size:12px}.date{color:#64748b;font-size:14px}h1{font-size:40px}h2{margin-top:0}.muted{color:#64748b}</style>
</head>
<body>
    <nav class="nav"><strong>Tasks for Today</strong><span><a href="{{ route('welcome') }}">Welcome</a><a href="{{ route('tasks.index') }}">Tasks</a><a href="{{ route('profile') }}">Profile</a><a href="{{ route('about') }}">About</a></span></nav>
    <main class="container">@yield('content')</main>
</body>
</html>
