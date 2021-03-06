 <!-- Right Side Of Navbar -->
 <ul class="navbar-nav ml-auto">
     <!-- Authentication Links -->
     @guest
     <li class="nav-item">
         <a class="nav-link" href="{{ route('login') }}">{{ __('Navbar.Login') }}</a>
     </li>
     @if (Route::has('register'))
     <li class="nav-item">
         <a class="nav-link" href="{{ route('register') }}">{{ __('Navbar.Register') }}</a>
     </li>
     @endif
     @else
     <li class="nav-item">
         <a class="nav-link" href="{{ route('entries.new') }}">{{__('Navbar.New_Entry')}}</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{__('Navbar.My_Entries')}}</a>
    </li>
     <li class="nav-item dropdown">
         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             {{ Auth::user()->name }}
         </a>

         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 {{ __('navbar.Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
         </div>
     </li>
     @endguest
 </ul>
