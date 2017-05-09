      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-globe"></i>
                          <span>内容</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/seos">S E O</a></li>
                          <li><a class="" href="/cards">卡片</a></li>
                          <li><a class="" href="/flows">流程</a></li>
                          <li><a class="" href="/asks">问答</a></li>
                      </ul>
                  </li>
                  <li class="">
                      <a class="" href="/backend/articles">
                          <i class="icon-file-text-alt"></i>
                          <span>文章</span>
                      </a>
                  </li>
          @if (Auth::user()->isAdmin())
                  <li class="">
                      <a class="" href="/backend-users">
                          <i class="icon-key"></i>
                          <span>后台</span>
                      </a>
                  </li>
                  <li class="">
                      <!-- <a class="" href="/backend/applies"> -->
                      <a class="" href="/applies">
                          <i class="icon-envelope-alt"></i>
                          <span>申请</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="/backend/offers">
                          <i class="icon-table"></i>
                          <span>报价</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-picture"></i>
                          <span>相册</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/backend/galleries?type=leader">工长</a></li>
                          <li><a class="" href="/backend/galleries?type=working">工地</a></li>
<!--                           <li><a class="" href="/backend/galleries?type=inspection">验收</a></li> -->
                          <li><a class="" href="/backend/galleries?type=design">设计</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-user"></i>
                          <span>用户</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/backend/leaders">工长</a></li>
                          <li><a class="" href="/backend/workers">工人</a></li>
                          <li><a class="" href="/backend/customers">业主</a></li>
                          <li><a class="" href="/backend/designers">设计师</a></li>
                      </ul>
                  </li>
                  <li class="">
                      <a class="" href="/materials">
                          <i class="icon-cogs"></i>
                          <span>辅材</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="/items">
                          <i class="icon-anchor"></i>
                          <span>项目</span>
                      </a>
                  </li>
                  
                  @endif
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>