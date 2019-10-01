@extends('layouts.master')

@section('content')
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>My Account</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<div class="container">

	<div class="my-account">

		<div class="tabs-container">
				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Register</h3>

                    <form method="post" class="register" action="{{route('register')}}">
                        @csrf

                        <p class="form-row form-row-wide">
                            <label for="reg_name">Name:</label>
                            <input type="text" class="input-text @error('name') is-invalid @enderror" name="name" id="reg_name" placeholder="Name" />
                            @error('name')
                                {{ $message }}
                            @enderror
                        </p>

						<p class="form-row form-row-wide">
							<label for="reg_email">Email Address:</label>
                            <input type="email" class="input-text @error('email') is-invalid @enderror" name="email" id="reg_email" placeholder="example@example.net" />
                            @error('email')
                                {{ $message }}
                            @enderror
						</p>


                        <p class="form-row form-row-wide">
                            <label for="account_type">Account Type:</label>
                            <select class="form-control" name="account_type">
                                <option value=""> Select Account Type</option>
                                <option value="Employer"> Employer</option>
                                <option value="Job Seeker"> Job Seeker</option>
                            </select>
                            {{-- <input type="email" class="input-text @error('email') is-invalid @enderror" name="email" id="account_type" placeholder="example@example.net" /> --}}
                            @error('account_type')
                                {{ $message }}
                            @enderror
                        </p>

						<p class="form-row form-row-wide">
							<label for="reg_password">Password:</label>
                            <input type="password" class="input-text  @error('password') is-invalid @enderror" name="password" id="reg_password" />
                            @error('password')
                                {{ $message }}
                            @enderror
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_password2">Repeat Password:</label>
							<input type="password" class="input-text  @error('password') is-invalid @enderror" name="password_confirmation" id="reg_password2" />
						</p>


                        <p class="lost_password">
                                <div class="pull-right">
                                    <a href="/login">Login Instead</a>

                                </div>
                        </p>
						<p class="form-row">
							<button type="submit" class="button"> Register </button>
						</p>

					</form>
				</div>
		</div>
	</div>
</div>

@endsection
