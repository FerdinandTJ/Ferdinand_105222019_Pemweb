<div class="dropdown-menu dropdown-menu-right ">
	@if (Auth::user())
			<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="ni ni-user-run"></i> <span>Logout</span>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
			</form>
	@else
			<a class="dropdown-item" data-toggle="modal" data-target="#loginModal">
					<i class="ni ni-bold-right"></i> <span>Login</span>
			</a>
	@endif
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
			<form class="modal-content" method="POST" action="{{ route('auth') }}">
					<div class="modal-header">
							<h5 class="modal-title" id="loginModalLabel">Login</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">
							<form method="POST" action="{{ route('auth') }}">
									@csrf 
									<div class="form-group">
										<label for="login">Email or Username</label>
										<input type="text" name="login" id="login" class="form-control" required>
									</div>
									<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
									</div>
									<div class="form-group text-right">
											<button type="submit" class="btn btn-primary w-100">Submit</button>
									</div>
							</form>
					</div>
			</form>
	</div>
</div>
