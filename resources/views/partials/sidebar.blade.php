<div class="sidebar">
    <div class="logo-block">
        <a class="navbar-logo" href="{{ url('dashboard') }}">
            <img src="{{ asset('img/logo.svg') }}" class="img-fluid" />
            <span>Your Business tagline goes here</span>
        </a>
        <a href="javascript:void(0);" class="navbar-toggle">
            <img src="{{ asset('img/hamburger.png')}}" class="img-fluid" />
        </a>
    </div>
    <div class="menu-block">
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" class="active">
                    <img src="{{ asset('img/icon1.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon1-active.png')}}" class="img-fluid active" />
                    <span>Dashboard</span>
                </a>
            </li>
           @if(Auth::user()->role->id == 3)
              <li>
                <a href="{{ route('tasks') }}">
                    <img src="{{ asset('img/icon1.png') }}" class="img-fluid default" />
                    <img src="{{ asset('img/icon1-active.png') }}" class="img-fluid active" />
                    <span>Tasks</span>
                </a>
                </li>
                <li>
                    <a href="{{ route('players') }}">
                        <img src="{{ asset('img/icon3.png')}}" class="img-fluid default" />
                        <img src="{{ asset('img/icon3-active.png')}}" class="img-fluid active" />
                        <span>Players</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agents') }}">
                        <img src="{{ asset('img/icon2.png')}}" class="img-fluid default" />
                        <img src="{{ asset('img/icon2-active.png')}}" class="img-fluid active" />
                        <span>Agents</span>
                    </a>
                </li>
                   <li>
                    <a href="{{ route('associates') }}">
                        <img src="{{ asset('img/icon2.png')}}" class="img-fluid default" />
                        <img src="{{ asset('img/icon2-active.png')}}" class="img-fluid active" />
                        <span>Associates</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('transcations') }}">
                        <img src="{{ asset('img/icon6.png') }}" class="img-fluid default" />
                        <img src="{{ asset('img/icon6-active.png') }}" class="img-fluid active" />
                        <span>Transcations</span>
                    </a>
                </li>
              <li>
                    <a href="{{ route('reports') }}">
                        <img src="{{ asset('img/icon6.png') }}" class="img-fluid default" />
                        <img src="{{ asset('img/icon6-active.png') }}" class="img-fluid active" />
                        <span>Reports</span>
                    </a>
                    <ul class="submenu d-none">
                        <li><a href="javascript:void(0);" class="active">Revenue per agent</a></li>
                        <li><a href="javascript:void(0);">Revenue per player</a></li>
                    </ul>
                </li>
            @endif
            @if(Auth::user()->role->id == 1)
            <li>
                <a href="javascript:void(0);">
                    <img src="{{ asset('img/icon4.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon4-active.png')}}" class="img-fluid active" />
                    <span>Statistics</span>
                </a>
            </li>

            <li>
                <a href="javascript:void(0);">
                    <img src="{{ asset('img/icon5.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon5-active.png')}}" class="img-fluid active" />
                    <span>Settings</span>
                </a>

            </li>
            <li>
                <a href="{{ route('role')}}">
                    <img src="{{ asset('img/icon5.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon5-active.png')}}" class="img-fluid active" />
                    <span>Roles</span>
                </a>

            </li>
            <li>
                <a href="{{ route('create_user')}}">
                    <img src="{{ asset('img/icon2.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon2-active.png')}}" class="img-fluid active" />
                    <span>Create User</span>
                </a>

            </li>
            <li>
                <a href="javascript:void(0);">
                    <img src="{{ asset('img/icon6.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon6-active.png')}}" class="img-fluid active" />
                    <span>Support</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
    <div class="menu-bottom-block">
        <ul class="bottom-block">
            <li>
                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <img src="{{ asset('img/logout.svg') }}" class="img-fluid default" />
                    <img src="{{ asset('img/logout-active.svg') }}" class="img-fluid active" />
                    <span>Logout</span>
                </a>
                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
              </li>
        </ul>
    </div>
</div>
