<html>
    <head>
        {{ HTML::style('css/style.css'); }}
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

    </head>    
    <body>
        @include('layout.header')
       
        <div class="content">
        @section('content')
            Content.
        @show
        </div>
        
        @include('layout.footer')
    </body>   
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    {{ HTML::script('http://code.jquery.com/jquery-1.11.0.min.js'); }}
    {{ HTML::script('js/main.js'); }}
</html>   

