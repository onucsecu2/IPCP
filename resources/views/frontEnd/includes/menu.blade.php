<div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
         
                    <a class="navbar-brand" href="#">IPCP-CSECU</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li @yield('Active_home')><a href="{{url('/')}}">Home</a></li>
                        @if(Request::url() ==='http://127.0.0.1:8000/settings'|| Request::url() === 'http://127.0.0.1:8000/settings/submit-problem'||Request::url() === 'http://127.0.0.1:8000/Settings/Create-Team' )
                                        <li ><a href="{{url('/settings/submit-problem')}}">Submit Problem </a></li>
                                        <li ><a href="{{url('/Settings/Create-Team')}}">Create Team</a></li>
                                        <li ><a href="{{url('/Settings/Switch to Judge ')}}">Switch to judge</a></li>
                               
        				@elseif(Request::url() ==='http://127.0.0.1:8000/current-contest' || Request::url() === 'http://127.0.0.1:8000/current-contest/status' ||Request::url() === 'http://127.0.0.1:8000/current-contest/standings'|| Request::url() === 'http://127.0.0.1:8000/current-contest/my-submission' || Request::url() === 'http://127.0.0.1:8000/current-contest/problems' || Request::url() === 'http://127.0.0.1:8000/current-contest/clarification')
                                        <li ><a href="{{url('/current-contest/problems')}}">Problems <span class= "glyphicon glyphicon-sunglasses" aria-hidden="true"</span></a></li>
                                        <li ><a href="{{url('/current-contest/status')}}">Status <span class= "glyphicon glyphicon-sunglasses" aria-hidden="true"</span></a></li>
                                        <li ><a href="{{url('/current-contest/standings')}}">Standings<span class="glyphicon glyphicon-stats" aria-hidden="true"</span></a></li>
                                        <li ><a href="{{url('/current-contest/my-submission')}}">My Submission <span class= "glyphicon glyphicon-erase" aria-hidden="true"</span></a></li>

                                        <li ><a href="{{url('/current-contest/clarification')}}">Clarification<span class= "glyphicon glyphicon-erase" aria-hidden="true"</span></a></li>
                               
                        @else
                        
                                        <li class="nav-link disabled"><a href="{{url('/current-contest')}}" >Current Contest<!--span class="glyphicon glyphicon-flag" aria-hidden="true"> </span --></a></li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Info<b class="caret"></b></a>
                
                                            <ul class="dropdown-menu">
                                                <li><a @yield('Active_other_info') href="{{url('/contest-ranks')}}">Ranks</a></li>
                                                <li><a href="{{url('coaches')}}">Coaches</a></li>
                                                <li>
                                                    <ul class="dropdown-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown [Menu 1.2] <b class="caret"></b></a></ul>
                                                </li>
                                            </ul>
                                        </li>
                        		@endif
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        
                      
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <span class="glyphicon glyphicon-user" aria-hidden="true"></span><b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="{{url('settings')}}">Settings  &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-wrench" aria-hidden="true"></a></li>
                                <li><a href="#">Notification(s)&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-bell" aria-hidden="true"> </span></a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Log out&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-off" aria-hidden="true"> </span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                     </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team(s)<b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Official Team</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Un-Official Team<b class="caret"></b></a>

                                            <ul class="dropdown-menu">
												<li><a href="#">Action [Menu 2.4]</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 