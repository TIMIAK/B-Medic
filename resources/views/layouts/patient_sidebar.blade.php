<section class="patient-dashboard bg-color-3">
    <div class="left-panel">
        <div class="profile-box patient-profile">
            <div class="upper-box">
                <figure class="profile-image">
                    @if(Auth::user()->avatar)
                    <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" />
                @endif
                </figure>
                <div class="title-box centred">
                    <div class="inner">
                        <h3>{{ $user->username }}</h3>
                        {{-- <p><i class="fas fa-calendar-alt"></i> --}}
                            <p><i class="fas fa-calendar-alt"></i>
                                @if($user->dob)
                                    {{$user->dob}}
                                @endif
                                @if($user->age)
                                    {{$user->age . ' Years'}}
                                @endif
                                </p>

                            </p>
                        {{-- <p><i class="fas fa-calendar-alt"></i>{{ $user->dob }}  {{ $user->age .'Years'}} </p> --}}
                    </div>
                </div>
            </div>
            <div class="profile-info">
                <ul class="list clearfix">
                    <li><a href="{{route('dashboard')}}" class="current"><i class="fas fa-columns"></i>Dashboard</a></li>
                    <li><a href="favourite-doctors.html"><i class="fas fa-heart"></i>Favourite Doctors</a></li>
                    <li><a href="schedule-timing-2.html"><i class="fas fa-clock"></i>Schedule Timing</a></li>
                    <li><a href="message-2.html"><i class="fas fa-comments"></i>Messages</a><span>20</span></li>
                    <li><a href="{{route('profile')}}"><i class="fas fa-user"></i>My Profile</a></li>
                    <li><a href="{{route('change.password')}}"><i class="fas fa-unlock-alt"></i>Change Password</a></li>
                    <li><a href="#" onclick="event.preventDefault;
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                <form action="{{route('logout')}}" method="POST" id="logout-form">
                    @csrf
                </form>
                </ul>
            </div>
        </div>
    </div>
