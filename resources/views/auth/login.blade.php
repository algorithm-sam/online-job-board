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
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

				<h3 class="margin-bottom-10 margin-top-10">Login</h3>

                <form method="POST" class="login" action="{{route('login')}}">
                    @csrf
					<p class="form-row form-row-wide">
						<label for="username">Username or Email Address:</label>
                        <input type="text" class="input-text" name="email" id="username" value="" />
                        @error('email')
                            {{ $message }}
                        @enderror
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:</label>
                        <input class="input-text" type="password" name="password" id="password" />

                        @error('password')
                            {{$message}}
                        @enderror
					</p>

					<p class="form-row">
                        <label for="rememberme" class="rememberme">
                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
                        <div class="form-field">
                            <button type="submit" class="button"> Login </button>
                        </div>
					</p>

					<p class="lost_password">
                        <div class="pull-left">
                            <a href="#" >Lost Your Password?</a>
                        </div>
                        <div class="pull-right">
                            <a href="/register">Register Account</a>

                        </div>
					</p>

				</form>
			</div>

		</div>
	</div>
</div>

@endsection
