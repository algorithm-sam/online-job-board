@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Banner
================================================== -->

<div id="banner" style="background: url(images/banner-home-01.jpg)">
	<div class="container">
		<div class="sixteen columns">
			
			<div class="search-container">

				<!-- Form -->
				<h2>Find job</h2>
				<input type="text" class="ico-01" placeholder="job title, keywords or company name" value=""/>
				<input type="text" class="ico-02" placeholder="city, province or region" value=""/>
				<button><i class="fa fa-search"></i></button>

				<!-- Browse Jobs -->
				<div class="browse-jobs">
					Browse job offers by <a href="browse-categories.html"> category</a> or <a href="#">location</a>
				</div>
				
				<!-- Announce -->
				<div class="announce">
					We’ve over <strong>15 000</strong> job offers for you!
				</div>

			</div>

		</div>
	</div>
</div>

<!-- Categories -->
<div class="container">
        <div class="sixteen columns">
            <h3 class="margin-bottom-25">Popular Categories</h3>
            <ul id="popular-categories">
                <li><a href="#"><i class="fa fa-line-chart"></i> Accounting / Finance</a></li>
                <li><a href="#"><i class="fa fa-wrench"></i> Automotive Jobs</a></li>
                <li><a href="#"><i class="fa fa-building-o"></i> Construction / Facilities</a></li>
                <li><a href="#"><i class="fa fa-graduation-cap"></i> Education Training</a></li>
                <li><a href="#"><i class="fa fa-medkit"></i> Healthcare</a></li>
                <li><a href="#"><i class="fa fa-cutlery"></i> Restaurant / Food Service</a></li>
                <li><a href="#"><i class="fa fa-globe"></i> Transportation / Logistics</a></li>
                <li><a href="#"><i class="fa fa-laptop"></i> Telecommunications</a></li>
            </ul>
    
            <div class="clearfix"></div>
            <div class="margin-top-30"></div>
    
            <a href="browse-categories.html" class="button centered">Browse All Categories</a>
            <div class="margin-bottom-50"></div>
        </div>
    </div>

@endsection
