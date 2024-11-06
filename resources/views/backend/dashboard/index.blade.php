@extends('backend.layout.main')

@section('content')
	<!-- header area start -->
    <x-admin.header pageTitle="Dashboard" currentPage="Dashboard"></x-admin.header>
    <!-- header area end -->
	<div class="main-content-inner">
		<div class="row">
			<!-- seo fact area start -->
			<div class="col-lg-8">
				<div class="row">
					<div class="col-md-6 mt-5 mb-3">
						<div class="card">
							<div class="seo-fact sbg1">
								<div class="p-4 d-flex justify-content-between align-items-center">
									<div class="seofct-icon"><i class="fa fa-file"></i> Articles</div>
									<h2>{{ App\Models\Article::count() }}</h2>
								</div>
								<canvas id="seolinechart1" height="50"></canvas>
							</div>
						</div>
					</div>
					<div class="col-md-6 mt-md-5 mb-3">
						<div class="card">
							<div class="seo-fact sbg2">
								<div class="p-4 d-flex justify-content-between align-items-center">
									<div class="seofct-icon"><i class="fa fa-calendar-check-o"></i> Events</div>
									<h2>{{ App\Models\Event::count() }}</h2>
								</div>
								<canvas id="seolinechart2" height="50"></canvas>
							</div>
						</div>
					</div>
					<div class="col-md-6 mt-md-5 mb-3">
						<div class="card">
							<div class="seo-fact sbg3">
								<div class="p-4 d-flex justify-content-between align-items-center">
									<div class="seofct-icon"><i class="fa fa-money"></i> Donations</div>
									<h2>{{ App\Models\Donation::count() }}</h2>
								</div>
								<canvas id="seolinechart1" height="50"></canvas>
							</div>
						</div>
					</div>
					<div class="col-md-6 mt-md-5 mb-3">
						<div class="card">
							<div class="seo-fact sbg4">
								<div class="p-4 d-flex justify-content-between align-items-center">
									<div class="seofct-icon"><i class="fa fa-calendar-check-o"></i> Programs</div>
									<h2>{{ App\Models\Program::count() }}</h2>
								</div>
								<canvas id="seolinechart2" height="50"></canvas>
							</div>
						</div>
					</div>
					{{-- <div class="col-md-6 mb-3 mb-lg-0">
						<div class="card">
							<div class="seo-fact sbg3">
								<div class="p-4 d-flex justify-content-between align-items-center">
									<div class="seofct-icon">Impressions</div>
									<canvas id="seolinechart3" height="60"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="seo-fact sbg4">
								<div class="p-4 d-flex justify-content-between align-items-center">
									<div class="seofct-icon">New Users</div>
									<canvas id="seolinechart4" height="60"></canvas>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
			<!-- seo fact area end -->
		
			<!-- testimonial area start -->
			<div class="col-xl-7 col-lg-12 mt-5">
				<div class="card">
					<div class="card-body bg1">
						<h4 class="header-title text-white">Client Feedback</h4>
						@if($inquires->isNotEmpty())
							<div class="testimonial-carousel owl-carousel">
								@foreach($inquires as $testimonial)
									<div class="tst-item">
										<div class="tstu-img">
											<img src="{{ asset($testimonial->photo) }}" alt="author image">
										</div>
										<div class="tstu-content">
											<h4 class="tstu-name">{{ $testimonial->name }}</h4>
											<span class="profsn">{{ $testimonial->profession }}</span>
											<p>{{ $testimonial->feedback }}</p>
										</div>
									</div>
								@endforeach
							</div>
						@else
							<div class="testimonial-carousel owl-carousel">
								<div class="tst-item">
									<div class="tstu-img">
										<img src="{{ asset('backend/images/team/team-author1.jpg') }}" alt="author image">
									</div>
									<div class="tstu-content">
										<h4 class="tstu-name">Abel Franecki</h4>
										<span class="profsn">Designer</span>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
									</div>
								</div>
								<div class="tst-item">
									<div class="tstu-img">
										<img src="{{ asset('backend/images/team/team-author2.jpg') }}" alt="author image">
									</div>
									<div class="tstu-content">
										<h4 class="tstu-name">Abel Franecki</h4>
										<span class="profsn">Designer</span>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
									</div>
								</div>
								<div class="tst-item">
									<div class="tstu-img">
										<img src="{{ asset('backend/images/team/team-author3.jpg') }}" alt="author image">
									</div>
									<div class="tstu-content">
										<h4 class="tstu-name">Abel Franecki</h4>
										<span class="profsn">Designer</span>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
									</div>
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
			<!-- testimonial area end -->
		</div>
	</div>
@endsection