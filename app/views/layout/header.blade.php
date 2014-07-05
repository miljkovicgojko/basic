<header>

    <div>
        <h1>Basic knowledge course</h1>
    </div>
   <div class="image">
      <!--  {{HTML::image('images/logo6.gif','alt-text')}}  -->
     <img id="myImage" onclick="changeImage()" src="images/logo5.gif">
   </div>
    
    <div>
     @include('layout.navbar')
    </div>
    
     @if(Auth::check())
    <div class="logout">
        <a href="{{ URL::to('logout') }}">Logout</a><br>
    </div>
    <p class="pHeader">Ulogovan je korisnik:</p>
    <p2 class ="pHeader">"{{ Auth::user()->first_name," ",Auth::user()->last_name }}"</p2>
    @else
    <div class="logout">
        <a href="{{ URL::to('login') }}">Login</a>
    </div>
    @endif
</header>