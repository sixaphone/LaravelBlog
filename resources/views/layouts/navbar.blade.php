  <br><div class="container ">
      <nav class="navbar navbar-default ">
        <div class="container-fluid">
        <ul class="nav navbar-nav  navbar-left">
          <li><a style="font-size: 16px;" href="/">Home</a></li>
          <li><a style="font-size: 16px;" href="/about">About</a></li>
          <li><a style="font-size: 16px;" href="/services">Services</a></li>
          <li><a style="font-size: 16px;" href="/posts">Posts</a></li>
        </ul>
        <!--<ul class="nav navbar-nav navbar-right">
        </ul>-->
         <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="/home">Home</a></li>
                                    <li><a href="/posts/create">New Post</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
        </div>
      </nav>
  </div>
