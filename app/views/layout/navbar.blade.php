<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>@ViewBag.Title</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="@Url.Content("~/Scripts/modernizr-1.7.min.js")" type="text/javascript"></script>
    <script src="@Url.Content("~/Scripts/bootstrap.js")" type="text/javascript"></script>
    <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
   </script>

    <link href="@Url.Content("~/Content/bootstrap.min.css")" rel="stylesheet" type="text/css" />

</head>
<body>
<nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Brand</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="register" >Registration</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout">Logout</a></li>
        </ul>
        <ul class="nav pull-right">
            <li class="dropdown" id="accountmenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">User name<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @if(Auth::check())
                              <li> <p>" {{ Auth::user()->first_name}} "</p></li>
                              <li><a href="logout">Logout</a></li>
                           @else
                               <li><a href="login">Login</a></li>
                           @endif
                        </ul>
             </li>
        </ul>
    </div>
</nav> 

</body>
</html>