
<div class="d-print-none" style="display:flex; justify-content:space-between; align-items:center;">
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
    <ul class="list-unstyled topbar-menu mb-0" style="display: flex; align-items:center; padding-right: 6%;">
{{--        <li class="dropdown notification-list">--}}

{{--             <select class="form-control" size="1" name="links" onchange="window.location.href=this.value;">--}}
{{--                 <option value="">Select language</option>--}}
{{--                 <option value="{{route('admin.language.change','en')}}">EN</option>--}}
{{--                 <option value="{{route('admin.language.change','bn')}}">BN</option>--}}
{{--                 <option value="{{route('admin.language.change','ar')}}">AR</option>--}}

{{--             </select>--}}
{{--        </li>--}}



        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none" style="border:none;" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar">
                    <img style="border-radius: 20px;" src="{{url('/uploads/users/'.auth()->user()->image)}}" alt="">
                </span>
                <span>
                    <span class="account-user-name">{{ucfirst(auth()->user()->username)}}</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropd2own-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6> <span>{{ucfirst(auth()->user()->username)}}</span>
                </div>
                <!-- item-->

                <a href="{{route('profile',auth()->user()->id)}}" class="dropdown-item notify-item">
                <i class="fa-solid fa-user"></i>
                    <span>Profile</span>
                </a>

                <a href="{{route('profile.edit',auth()->user()->id)}}" class="dropdown-item notify-item">
                <i class="fa-solid fa-address-card"></i>
                    <span>Edit Profile</span>
                </a>

                <a href="{{route('password.edit',auth()->user()->id)}}" class="dropdown-item notify-item">
                <i class="fa-solid fa-key"></i>
                    <span>Update Password</span>
                </a>


                <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
</div>
