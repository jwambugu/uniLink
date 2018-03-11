<div class="user-account-box">
	<div class="header clearfix">
		<h3>{{ auth()->user()->name }}</h3>
		<p>{{ auth()->user()->email }}</p>
		<div class="edit-profile-photo">
			<img src="{{ asset('nest/img/avatar/avatar-5.png') }}" alt="agent-1" class="img-responsive">
			<div class="change-photo-btn">
				<div class="photoUpload">
					<span><i class="fa fa-upload"></i> Upload Photo</span>
					<input type="file" class="upload">
				</div>
			</div>
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
				<a href="#">
					<i class="fa fa-heart"></i>Favorited Properties
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-plus"></i>Submit New Property
				</a>
			</li>
			<li>
				<a href="#">
					<i class="flaticon-security"></i>Change Password
				</a>
			</li>
			<li>
				<a href="{{ route('logout') }}">
					<i class="flaticon-sign-out-option"></i>Log Out
				</a>
			</li>
		</ul>
	</div>
</div>