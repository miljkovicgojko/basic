
<!doctype html>

<html>
 
<body>
   
    
        {{ Form::open(array('url' => 'logout')) }}
		<h1>Logout</h1>
                <a href="{{ URL::to('logout') }}">Logout</a>
         {{ Form::close() }}
         
        
</body>

</html>