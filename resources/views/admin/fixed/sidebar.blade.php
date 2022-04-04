<div class="leftside-menu">
  <!-- LOGO -->
  <a href="index.html" class="logo text-center logo-light">
      <span class="logo-lg">
          <img src="{{url('backend/images/fund.png')}}" alt="" height="90">
      </span>
      <span class="logo-sm">
          <img src="{{url('backend/images/logo_sm.png')}}" alt="" height="16">
      </span>
  </a>

  <!-- LOGO -->
  <a href="index.html" class="logo text-center logo-dark">
      <span class="logo-lg">
          <img src="{{url('backend/images/logo-dark.png')}}" alt="" height="16">
      </span>
      <span class="logo-sm">
          <img src="{{url('backend/images/logo_sm_dark.png')}}" alt="" height="16">
      </span>
  </a>

  <div class="h-100" id="leftside-menu-container" data-simplebar>

                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Actions</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  {{-- //Users --}}
                  <!-- parent pages-->
                  <a href="{{route('user.list')}}">
                    <div class="d-flex align-items-center"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 14.062V20h2v-5.938c3.946.492 7 3.858 7 7.938H4a8.001 8.001 0 0 1 7-7.938zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"/></svg></span>
                      <span class="nav-link-text ps-1">Users</span>
                    </div>
                  </a>
                  <a href="{{route('role.list')}}">
                    <div class="d-flex align-items-center"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 14.062V20h2v-5.938c3.946.492 7 3.858 7 7.938H4a8.001 8.001 0 0 1 7-7.938zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"/></svg></span>
                      <span class="nav-link-text ps-1">Role</span>
                    </div>
                  </a>
                  <a href="#">
                    <div class="d-flex align-items-center"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 14.062V20h2v-5.938c3.946.492 7 3.858 7 7.938H4a8.001 8.001 0 0 1 7-7.938zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"/></svg></span>
                      <span class="nav-link-text ps-1">Permission</span>
                    </div>
                  </a>
                </li>
      <!--- Sidemenu -->
      <ul class="side-nav">


          <li class="side-nav-title side-nav-item">Navigation</li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                  <i class="uil-home-alt"></i>
                  <span class="badge bg-success float-end">4</span>
                  <span> Dashboards </span>
              </a>
              <div class="collapse" id="sidebarDashboards">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="dashboard-analytics.html">Analytics</a>
                      </li>
                      <li>
                          <a href="dashboard-crm.html">CRM</a>
                      </li>
                      <li>
                          <a href="index.html">Ecommerce</a>
                      </li>
                      <li>
                          <a href="dashboard-projects.html">Projects</a>
                      </li>
                  </ul>
              </div>
          </li>

          <li class="side-nav-title side-nav-item">Apps</li>
          
          <li class="side-nav-item">
              <a href="" class="side-nav-link">
                  <i class="uil-folder-plus"></i>
                  <span> Users </span>
              </a>
          </li>

          <li class="side-nav-item">
              <a href="" class="side-nav-link">
                  <i class="uil-copy-alt"></i>
                 <span> Role </span>
              </a>
          </li>
          <li class="side-nav-item">
              <a href="" class="side-nav-link">
                  <i class="uil-copy-alt"></i>
                 <span> Permission </span>
              </a>
          </li>
          <li class="side-nav-item">
              <a href="" class="side-nav-link">
                  <i class="uil-copy-alt"></i>
                 <span> Doctors </span>
              </a>
          </li>

          <li class="side-nav-item">
              <a href="" class="side-nav-link">
                  <i class="uil-copy-alt"></i>
                  <span> Patients </span>
              </a>
          </li>

          <li class="side-nav-item">
              <a href="" class="side-nav-link">
                  <i class="uil-comments-alt"></i>
                  <span> Services </span>
              </a>
          </li>

          

          

          

          

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                  <i class="uil-clipboard-alt"></i>
                  <span> Demo </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarTasks">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="apps-tasks.html">Demo1</a>
                      </li>
                      <li>
                          <a href="apps-tasks-details.html">Demo2</a>
                      </li>
                  </ul>
              </div>
          </li>

          <li class="side-nav-item">
              <a href="apps-file-manager.html" class="side-nav-link">
                  <i class="uil-folder-plus"></i>
                  <span> Demo </span>
              </a>
          </li>

          <li class="side-nav-title side-nav-item">Custom</li>
          
          <li class="side-nav-item">
              <a href="apps-file-manager.html" class="side-nav-link">
                  <i class="uil-folder-plus"></i>
                  <span> Demo </span>
              </a>
          </li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                  <i class="uil-copy-alt"></i>
                  <span> Demo </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarPages">
                  <ul class="side-nav-second-level">

                      <li class="side-nav-item">
                          <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                              <span> Demo3 </span>
                              <span class="menu-arrow"></span>
                          </a>
                          <div class="collapse" id="sidebarPagesAuth">
                              <ul class="side-nav-third-level">
                                  <li>
                                      <a href="pages-login.html">Demo 3.1</a>
                                  </li>
                                  <li>
                                      <a href="pages-login-2.html">Demo 3.2</a>
                                  </li>
                                  <li>
                                      <a href="pages-register.html">Demo 3.3</a>
                                  </li>
                                  <li>
                                      <a href="pages-register-2.html">Register 2</a>
                                  </li>
                                  <li>
                                      <a href="pages-logout.html">Logout</a>
                                  </li>
                                  <li>
                                      <a href="pages-logout-2.html">Logout 2</a>
                                  </li>
                                  <li>
                                      <a href="pages-recoverpw.html">Recover Password</a>
                                  </li>
                                  <li>
                                      <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                  </li>
                                  <li>
                                      <a href="pages-lock-screen.html">Lock Screen</a>
                                  </li>
                                  <li>
                                      <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                  </li>
                                  <li>
                                      <a href="pages-confirm-mail.html">Confirm Mail</a>
                                  </li>
                                  <li>
                                      <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="side-nav-item">
                          <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                              <span> Demo4 </span>
                              <span class="menu-arrow"></span>
                          </a>
                          <div class="collapse" id="sidebarPagesError">
                              <ul class="side-nav-third-level">
                                  <li>
                                  <a href="pages-404.html">Error 404</a>
                              </li>
                              <li>
                                  <a href="pages-404-alt.html">Error 404-alt</a>
                              </li>
                              <li>
                                  <a href="pages-500.html">Error 500</a>
                              </li>
                              </ul>
                          </div>
                      </li>
                      <li>
                          <a href="pages-starter.html">Demo5</a>
                      </li>
                  </ul>
              </div>
          </li>

          <li class="side-nav-item">
              <a href="landing.html" target="_blank" class="side-nav-link">
                  <i class="uil-globe"></i>
                  <span class="badge bg-secondary text-light float-end">New</span>
                  <span> Demo </span>
              </a>
          </li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                  <i class="uil-window"></i>
                  <span> Demo </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarLayouts">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="layouts-horizontal.html">Horizontal</a>
                      </li>
                      <li>
                          <a href="layouts-detached.html">Detached</a>
                      </li>
                      <li>
                          <a href="layouts-full.html">Full</a>
                      </li>
                  </ul>
              </div>
          </li>

         
          
      </ul>

      
      <!-- End Sidebar -->
      <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->
</div>