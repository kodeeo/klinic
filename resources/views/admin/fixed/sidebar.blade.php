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

            @if(hasAnyPermissions('admin.dashboard'))
            <li class="side-nav-item">
                <a href="{{route('admin.dashboard')}}" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Dashboard</span>
                </a>
            </li>
            @endif

            @if (hasAnyPermissions('user.list'))
            <li class="side-nav-item">
                <a href="{{route('user.list')}}" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Users </span>
                </a>
            </li>
            @endif

            @if (hasAnyPermissions('role.list'))
            <li class="side-nav-item">
                <a href="{{route('role.list')}}" class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Role </span>
                </a>
            </li>
            @endif
            @if (hasAnyPermissions('permission.list'))
            <li class="side-nav-item">
                <a href="{{ route ('permission.index') }}" class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Permission </span>
                </a>
            </li>
            @endif



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Doctors </span>
                    <span class="menu-arrow"></span>
                </a>

                <div class="collapse" id="doctors">
                    <ul class="side-nav-second-level">
                        @if (hasAnyPermissions('show.department'))

                        <li>
                            <a href="{{route('show.department')}}">Add Department</a>
                        </li>
                        <li>
                            <a href="{{route('doctor.create')}}">Add Doctor </a>
                        </li>
                        @endif

                        @if (hasAnyPermissions('doctor.index'))
                        <li>
                            <a href="{{route('doctor.index')}}">Doctor List</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{route('schedule.create')}}">Add Schedule</a>
                        </li>
                        <li>
                            <a href="{{route('schedule.index')}}">Schedule List</a>
                        </li>
                        <li>
                            <a href="#">Add Prescription</a>
                        </li>
                        <li>
                            <a href="{{route('prescription.index')}}">Prescription List</a>
                        </li>
                    </ul>
                </div>
            </li>




            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#staffs" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Staffs </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="staffs">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('staffs.create')}}">Add Staffs</a>
                        </li>
                        <li>
                            <a href="{{route('nurses.index')}}">Nurse List</a>
                        </li>
                        <li>
                            <a href="{{route('wardboys.index')}}">WardBoy List</a>
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
                <a data-bs-toggle="collapse" href="#patients" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Patients </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="patients">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('patients.create')}}">Add Patients</a>
                        </li>
                        <li>
                            <a href="{{route('patients.index')}}">Patients List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{route('appointment.index')}}" class="side-nav-link">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span> Appointment </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('admissions.index')}}" class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span>Admissions</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#diagonistic" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Diagonistic </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="diagonistic">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('tests.create')}}">Add Test</a>
                        </li>
                        <li>
                            <a href="{{route('tests.index')}}">Test List</a>
                        </li>
                        <li>
                            <a href="{{route('assign.test.create')}}">Assign Test</a>
                        </li>
                        <li>
                            <a href="{{route('assign.test.index')}}">Assigned Test List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#bedManager" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Bed Manager </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="bedManager">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('beds.create')}}">Add Bed</a>
                        </li>
                        <li>
                            <a href="{{route('beds.index')}}">Bed List</a>
                        </li>
                        <li>
                            <a href="{{route('assign.bed.create')}}">Bed Assign</a>
                        </li>
                        <li>
                            <a href="{{route('assign.bed.index')}}">Assigned Bed List</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#room" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Room </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="room">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('ward.index')}}">Ward</a>
                        </li>
                        <li>
                            <a href="{{route('cabin.index')}}">Cabin</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#hospital_activities" aria-expanded="false"
                    aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Hospital Activities </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="hospital_activities">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('birth_report.index')}}">Birth Report</a>
                        </li>
                        <li>
                            <a href="{{route('death_report.index')}}">Death Report</a>
                        </li>
                        <li>
                            <a href="{{route('operational_activities.index')}}">Operation Activity</a>
                        </li>
                        <li>
                            <a href="{{route('investigations.index')}}">Investigation Report</a>
                        </li>
                        <li>
                            <a href="{{route('medicine.index')}}">Medicine</a>
                        </li>
                        <li>
                            <a href="{{route('medicine_category.index')}}">Medicine Category</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#billing" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Billing </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="billing">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('bill.index')}}">Bill List</a>
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