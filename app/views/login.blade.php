

<!doctype html>
<!--
<html>
    <head>
        {{ HTML::style('css/style.css'); }}
        <title>Look at me Login</title>
   </head>
    <body>
         @include('layout.header')
 -->        
@section('content')
        {{ Form::open() }}
        <h1 class="loginClass">Login</h1>

        <!-- if there are login errors, show them here -->
        <p class="parag">
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
        </p>

        <p class="parag">
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
        </p>

        <p class="parag">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>

        <p class="parag">{{ Form::submit('Submit!') }}</p>
        {{ Form::close() }}  

       <!--        @include('layout.footer')
    </body>
{{ HTML::script('http://code.jquery.com/jquery-1.11.0.min.js'); }}
{{ HTML::script('js/main.js'); }}

</html>
-->
@stop