
<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Lang::get( 'navbar.locale.label' ) }} <b class="caret"></b></a>
    <ul class="dropdown-menu">
     @foreach( Lang::get( 'navbar.locale.option' ) as $mKey => $mLanguage )
      <li>{{ HTML::linkAction( 'BaseController@setLocale', $mLanguage, $mKey ) }}</li>
     @endforeach
    </ul>
   </li>

