<div class="leftside-menu">
  <!-- LOGO -->
  <a href="index.html" class="logo text-center logo-light">
      <span class="logo-lg">
      <h4 style="color:white"><img src="{{$klinic->image}}" width="50px" alt="Company Logo">
        <br>
        <b> {{$klinic->name}}</b></h4>
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

              
      <!--- Sidemenu -->
      <ul class="side-nav">


          <li class="side-nav-title side-nav-item">Navigation</li>

          <li class="side-nav-item">
            <a href="{{route('admin.dashboard')}}" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> Dashboard</span>
            </a>
        </li>
          
          <li class="side-nav-item">
              <a href="{{route('user.list')}}" class="side-nav-link">
                  <i class="uil-folder-plus"></i>
                  <span> Users </span>
              </a>
          </li>

          <li class="side-nav-item">
              <a href="{{route('role.list')}}" class="side-nav-link">
                  <i class="uil-copy-alt"></i>
                 <span> Role </span>
              </a>
          </li>
          <li class="side-nav-item">
              <a href="{{ route ('permission.index') }}" class="side-nav-link">
                  <i class="uil-copy-alt"></i>
                 <span> Permission </span>
              </a>
          </li>


          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Doctors </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="doctors">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('show.department')}}">Department</a>
                    </li>
                    <li>
                        <a href="{{route('doctor.index')}}">Doctor List</a>
                    </li>
                </ul>
            </div>
        </li>


    

          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#staffs" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Staffs </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="staffs">
                <ul class="side-nav-second-level">
                <li>
                        <a href="{{route('nurse.list')}}">Nurse</a>
                    </li>
                    <li>
                        <a href="{{route('wardboy.list')}}">WardBoy</a>
                    </li>
                    <li>
                        <a href="{{route('staff.index')}}">Staff List</a>
                    </li>
                    <li>
                        <a href="{{route('designation.index')}}">Designation</a>
                    </li>
                </ul>
            </div>
        </li>

         

          <li class="side-nav-item">
              <a href="{{ route('admin.service.list') }}" class="side-nav-link">
                  <i class="uil-comments-alt"></i>
                  <span> Services </span>
              </a>
          </li>

          <li class="side-nav-item">
            <a href="{{route('patient.list')}}" class="side-nav-link">
                <i class="uil-copy-alt"></i>
               <span> Patients List </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{route('appointment.index')}}" class="side-nav-link">
            <i class="fa-solid fa-calendar-check"></i>
               <span> Appointment </span>
            </a>
        </li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#diagonistic" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                  <i class="uil-clipboard-alt"></i>
                  <span> Diagonistic </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="diagonistic">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="{{route('test.category.list')}}">Test Category</a>
                      </li>
                      <li>
                          <a href="{{route('test.list')}}">Test List</a>
                      </li>
                      <li>
                        <a href="{{route('cart.index')}}">Assign Test</a>
                    </li>
                  </ul>
              </div>
          </li>

          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#patients" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Room </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="patients">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="#">Ward</a>
                    </li>
                    <li>
                        <a href="{{route('cabin.index')}}">Cabin</a>
                    </li>
                </ul>
            </div>
        </li>

          
          <li class="side-nav-item">
              <a href="{{route('clinic.informations')}}" class="side-nav-link">
                  <i class="uil-folder-plus"></i>
                  <span> Clinic Setup </span>
              </a>
          </li>
          
      </ul>

      
      <!-- End Sidebar -->
      <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->
</div>