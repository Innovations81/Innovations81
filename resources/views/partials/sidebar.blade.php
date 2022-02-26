@php
   $prefix = trim(Request::route()->getPrefix(), '/');
   $route = Route::current()->getName();
   if ($prefix == 'operations/manager') {
        $prefix = 'om';
   }
@endphp

<div class="sidebar">
    <div class="logo-block">
        <a class="navbar-logo" href="{{ url($prefix.'.dashboard') }}">
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
                <a href="{{ route($prefix.'.dashboard') }}" class="active">
                    <img src="{{ asset('img/icon1.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon1-active.png')}}" class="img-fluid active" />
                    <span>Dashboard</span>
                </a>
            </li>
           @if(in_array(Auth::user()->role->id, [3,4]))
              <li>
                <a href="javascript:void(0);">
                    <img src="{{ asset('img/icon1.png') }}" class="img-fluid default" />
                    <img src="{{ asset('img/icon1-active.png') }}" class="img-fluid active" />
                    <span>Tasks</span>
                </a>
                <ul class="submenu">
                        <li><a href="{{ route($prefix.'.players-tasks') }}">Players</a></li>
                        <li><a href="{{ route($prefix.'.sales-tasks') }}">sales</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route($prefix.'.players') }}">
                        <img src="{{ asset('img/icon3.png')}}" class="img-fluid default" />
                        <img src="{{ asset('img/icon3-active.png')}}" class="img-fluid active" />
                        <span>Players</span>
                    </a>
                </li>
                 @if(in_array(Auth::user()->role->id, [3]))
                <li>
                    <a href="{{ route($prefix.'.agents') }}">
                        <img src="{{ asset('img/icon2.png')}}" class="img-fluid default" />
                        <img src="{{ asset('img/icon2-active.png')}}" class="img-fluid active" />
                        <span>Agents</span>
                    </a>
                </li>
                   <li>
                    <a href="{{ route($prefix.'.associates') }}">
                        <img src="{{ asset('img/icon2.png')}}" class="img-fluid default" />
                        <img src="{{ asset('img/icon2-active.png')}}" class="img-fluid active" />
                        <span>Associates</span>
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{ route($prefix.'.transcations') }}">
                        <img src="{{ asset('img/icon6.png') }}" class="img-fluid default" />
                        <img src="{{ asset('img/icon6-active.png') }}" class="img-fluid active" />
                        <span>Transcations</span>
                    </a>
                </li>
              <li>
                    <a href="javascript:void(0);">
                        <img src="{{ asset('img/icon6.png') }}" class="img-fluid default" />
                        <img src="{{ asset('img/icon6-active.png') }}" class="img-fluid active" />
                        <span>Reports</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route($prefix.'.agents-reports')}}">Revenue per agent</a></li>
                        <li><a href="{{ route($prefix.'.players-reports')}}">Revenue per player</a></li>
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
                <a href="{{ route($prefix.'.role')}}">
                    <img src="{{ asset('img/icon5.png')}}" class="img-fluid default" />
                    <img src="{{ asset('img/icon5-active.png')}}" class="img-fluid active" />
                    <span>Roles</span>
                </a>

            </li>
            <li>
                <a href="{{ route($prefix.'.create_user')}}">
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
