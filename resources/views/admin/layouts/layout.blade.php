<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield("title")</title>
  <link rel="shortcut icon" href="images/t.jpg">
 

 @include("admin.layouts.styles")
</head>
@include("admin.layouts.header")
@include("admin.layouts.leftsidebar")
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@section("content")
@show
@include("admin.layouts.footer")

  <aside class="control-sidebar control-sidebar-dark">
  
  </aside>
 
</div>

@include("admin.layouts.scripts")
</body>
</html>
