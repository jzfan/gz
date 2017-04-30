      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="/" class="logo" >58<span>工长通</span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
            <li class="">
                <a class="" href="/{{ Auth::user()->role }}-console">
                    <i class="icon-dashboard"></i>
                    <span>控制台</span>
                </a>
            </li>
            <li class="">
                <a class="" href="/backend/appointments">
                    <i class="icon-bell"></i>
                    <span>预约</span>
                </a>
            </li>
            <li class="">
                <a class="" href="/backend/comments">
                    <i class="icon-comment-alt"></i>
                    <span>评论</span>
                </a>
            </li>
          </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="/flatlab/#">
                          <img alt="" src="{{ Auth::user()->avatar }}" height="29">
                          <span class="username">{{ Auth::user()->name }}</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <!-- <li><a href="/flatlab/#"><i class=" icon-suitcase"></i>Profile</a></li>
                          <li><a href="/flatlab/#"><i class="icon-cog"></i> Settings</a></li>
                          <li><a href="/flatlab/#"><i class="icon-bell-alt"></i> Notification</a></li> -->
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  <i class="icon-key"></i> 退出
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>