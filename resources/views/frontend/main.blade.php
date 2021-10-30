<!DOCTYPE html>
<html>
<head>
<title> Assignment Submission System</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="/frontend/styles/style.css" />
<link rel="stylesheet" type="text/css" href="/frontend/styles/custom.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
@include('frontend.header')

@yield('content')

  @include('frontend.footer')
</div>
</body>
</html>