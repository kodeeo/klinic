<div class="leftside-menu">
    <!-- LOGO -->
    <a href="{{route('admin.dashboard')}}" class="logo text-center logo-light">
        <span class="logo-lg">

            <img src="{{$klinic->image}}" width="170px" alt="Company Logo">

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

            @if (hasAnyPermissions('clinic.index'))
            <li class="side-nav-item">
                <a href="{{route('clinic.index')}}" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Clinic Setup </span>
                </a>
            </li>
            @endif

            @if (hasAnyPermissions('patients.index'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#patients" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Patients </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="patients">
                    <ul class="side-nav-second-level">
                        @if (hasAnyPermissions('patients.create'))
                        <li>
                            <a href="{{route('patients.create')}}">Add Patients</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('patients.index'))
                        <li>
                            <a href="{{route('patients.index')}}">Patients List</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif

            @if (hasAnyPermissions('doctor.index'))
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
                        @endif
                        @if (hasAnyPermissions('doctor.create'))
                        <li>
                            <a href="{{route('doctor.create')}}">Add Doctor </a>
                        </li>
                        @endif


                        @if (hasAnyPermissions('doctor.index'))
                        <li>
                            <a href="{{route('doctor.index')}}">Doctor List</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('schedule.create'))
                        <li>
                            <a href="{{route('schedule.create')}}">Add Schedule</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('schedule.index'))
                        <li>
                            <a href="{{route('schedule.index')}}">Schedule List</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('prescription.create'))
                        <li>
                            <a href="{{route('prescription.create')}}">Add Prescription</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('presecription.index'))
                        <li>
                            <a href="{{route('prescription.index')}}">Prescription List</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif




            @if (hasAnyPermissions('staff.create'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#staffs" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Staffs </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="staffs">
                    <ul class="side-nav-second-level">
                        @if (hasAnyPermissions('staffs.create'))
                        <li>
                            <a href="{{route('staffs.create')}}">Add Staffs</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('nurses.index'))
                        <li>
                            <a href="{{route('nurses.index')}}">Nurse List</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('wardboys.index'))
                        <li>
                            <a href="{{route('wardboys.index')}}">WardBoy List</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif

            @if (hasAnyPermissions('admin.service.list'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Services </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="services">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('services.create')}}">Add Services</a>
                        </li>
                        <li>
                            <a href="{{route('services.index')}}">Service List</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            @if (hasAnyPermissions('tests.index'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#diagonistic" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Diagonistic </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="diagonistic">
                    <ul class="side-nav-second-level">
                        @if (hasAnyPermissions('tests.create'))
                        <li>
                            <a href="{{route('tests.create')}}">Add Test</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('tests.index'))
                        <li>
                            <a href="{{route('tests.index')}}">Test List</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('assign.test.create'))
                        <li>
                            <a href="{{route('assign.test.create')}}">Assign Test</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('assign.test.index'))
                        <li>
                            <a href="{{route('assign.test.index')}}">Assigned Test List</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif

            @if (hasAnyPermissions('beds.index'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#bedManager" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Bed Manager </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="bedManager">
                    <ul class="side-nav-second-level">
                        @if (hasAnyPermissions('beds.create'))
                        <li>
                            <a href="{{route('beds.create')}}">Add Bed</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('beds.index'))
                        <li>
                            <a href="{{route('beds.index')}}">Bed List</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('assign.bed.create'))
                        <li>
                            <a href="{{route('assign.bed.create')}}">Bed Assign</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('assign.bed.index'))
                        <li>
                            <a href="{{route('assign.bed.index')}}">Assigned Bed List</a>
                        </li>
                        @endif
                        <li>
                            <a href="#">Report</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            @if (hasAnyPermissions('birth_report.index'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#hospital_activities" aria-expanded="false"
                    aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Hospital Activities </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="hospital_activities">
                    <ul class="side-nav-second-level">
                        @if (hasAnyPermissions('birth_report.index'))
                        <li>
                            <a href="{{route('birth_report.index')}}">Birth Report</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('death_report.index'))
                        <li>
                            <a href="{{route('death_report.index')}}">Death Report</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('operational_activities.index'))
                        <li>
                            <a href="{{route('operational_activities.index')}}">Operation Activity</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('investigations.index'))
                        <li>
                            <a href="{{route('investigations.index')}}">Investigation Report</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('medicine.index'))
                        <li>
                            <a href="{{route('medicine.index')}}">Medicine</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('medicine_category.index'))
                        <li>
                            <a href="{{route('medicine_category.index')}}">Medicine Category</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif

            @if (hasAnyPermissions('bill.index'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#billing" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Billing </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="billing">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('packages.create')}}">Add Package</a>
                        </li>
                        <li>
                            <a href="{{route('packages.index')}}">Package List</a>
                        </li>
                        <li>
                            <a href="{{route('admissions.create')}}">Add Patient Admission</a>
                        </li>
                        <li>
                            <a href="{{route('admissions.index')}}">Patient Admission List</a>
                        </li>
                        <li>
                            <a href="{{route('advancepayment.index')}}">Advance Payment List</a>
                        </li>
                        <li>
                            <a href="{{route('bill.index')}}">Bill List</a>
                        </li>

                    </ul>
                </div>
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

            @if (hasAnyPermissions('appointment.index'))
            <li class="side-nav-item">
                <a href="{{route('appointment.index')}}" class="side-nav-link">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span> Appointment </span>
                </a>
            </li>
            @endif

            @if (hasAnyPermissions('insurance.index'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#insurance" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Insurance </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="insurance">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('insurance.create')}}">Create Insurance</a>
                        </li>
                        <li>
                            <a href="{{route('insurance.index')}}">Insurance List</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            @if (hasAnyPermissions('ward.index'))
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#room" aria-expanded="false" aria-controls="sidebarTasks"
                    class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Room </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="room">
                    <ul class="side-nav-second-level">
                        @if (hasAnyPermissions('ward.index'))
                        <li>
                            <a href="{{route('ward.index')}}">Ward</a>
                        </li>
                        @endif
                        @if (hasAnyPermissions('cabin.index'))
                        <li>
                            <a href="{{route('cabin.index')}}">Cabin</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif

        </ul>

        <!-- End Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>
