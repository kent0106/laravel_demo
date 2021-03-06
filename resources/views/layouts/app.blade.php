<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  Laravel Album</title>

    <!-- 加载 CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- bootstrap 导航条 -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO 首页跳转按钮 -->
          <a class="navbar-brand" href="{{ route('home') }}">Laravel Album</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- 导航按钮 此网站不需要 -->
            <!-- <li><a href="#">Link</a></li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- bootstrap 容器 -->
    <div class="container">
        <!-- 显示提示消息 -->
       
    </div>

    <!-- 加载 CSS -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>
