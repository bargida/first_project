
<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="@yield('dashboard')">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.groups.index')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Groups</span>
				</a>
			</li>
			
		
			<li>
				<a href="{{ route('admin.regions.index')}}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Regions</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.students.index')}}">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Students</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.passports.index')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Passports</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="log/login.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Login</span>
				</a>
			</li>
			<li>
				<a href="#" class="log/logout.php">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
