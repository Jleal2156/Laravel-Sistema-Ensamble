<!DOCTYPE html>
<html>
<head>
<title>Sistema Ensamble</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">
<div class="bg-dark text-white p-3" style="width:250px;height:100vh;">
<h4>🏭 Ensamble</h4>
<a href="/" class="text-white d-block">Dashboard</a>
<a href="/operarios" class="text-white d-block">Operarios</a>
</div>

<div class="p-4 w-100">
@yield('content')
</div>
</div>

</body>
</html>
