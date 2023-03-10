<div class="user-account-box">
	<div class="header clearfix">
		<h3>{{ auth()->user()->name }}</h3>
		<p>{{ auth()->user()->email }}</p>
		<div class="edit-profile-photo">
			<img src="{{ asset('nest/img/avatar/avatar-5.png') }}" alt="agent-1" class="img-responsive">
			{{--<div class="change-photo-btn">--}}
				{{--<div class="photoUpload">--}}
					{{--<span><i class="fa fa-upload"></i> Upload Photo</span>--}}
					{{--<input type="file" class="upload">--}}
				{{--</div>--}}
			{{--</div>--}}
		</div>
	</div>
	<div class="content">
		<ul>
			<li>
				<a href="{{ route('user.profile') }}">
					<i class="flaticon-social"></i>Profile
				</a>
			</li>
			<li>
				<a href="{{ route('home') }}">
					<i class="flaticon-apartment"></i>My Hostels
				</a>
			</li>
			<li>
				<a href="{{ route('user.password') }}">
					<i class="flaticon-security"></i>Change Password
				</a>
			</li>
			<li>
				<a class="dropdown-item" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					<i class="flaticon-sign-out-option"></i> Logout
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>
		</ul>
	</div>
</div>