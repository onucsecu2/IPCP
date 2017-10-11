                      
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <span class="glyphicon glyphicon-user" aria-hidden="true"></span><b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Settings  &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-wrench" aria-hidden="true"></a></li>
                                <li><a href="#">Notification(s)&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-bell" aria-hidden="true"> </span></a></li>
                                <!--li><a href="#">Something else here [Menu 2.1]</a></li -->
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Log out&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-off" aria-hidden="true"> </span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                     </li>
                                <li class="divider"></li>
                                <!-- li><a href="#">One more separated link [Menu 2.1]</a></li -->
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team(s)<b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <!--li><a href="#">Action [Menu 2.2]</a></li>
                                        <li><a href="#">Another action [Menu 2.2]</a></li>
                                        <li><a href="#">Something else here [Menu 2.2]</a></li-->
                                        <!--li class="divider"></li-->
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