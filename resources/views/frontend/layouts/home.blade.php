@extends('frontend.layouts.master')

@section('content')
    
@include('frontend.layouts.slider')
	
	<!-- Mission and Vision -->
	<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Mission and Vision</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="frontend/image/mission.jpg" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
					<p style="text-align: justify;"><strong>Mission</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
				<div class="col-md-6">
					<img src="frontend/image/vision.jpg" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
					<p style="text-align: justify;"><strong>Vision</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
			</div>
		</div>
	</section>
	<!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
				</div>
				<div class="col-md-9" style="padding-top: 15px;">
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>Image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>24/11/2019</td>
								<td><img src="frontend/image/news1.jpg"></td>
								<td>Dummy content</td>
								<td><a href="" class="btn btn-info">Details</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>25/11/2019</td>
								<td><img src="frontend/image/news2.jpg"></td>
								<td>Dummy content2</td>
								<td><a href="" class="btn btn-info">Details</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>26/11/2019</td>
								<td><img src="frontend/image/news3.jpg"></td>
								<td>Dummy content3</td>
								<td><a href="" class="btn btn-info">Details</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Services -->
	<section class="our_services">
		<div class="container" style="padding-top: 15px">
			<!-- Nav tab -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#service" class="nav-link active" data-toggle="tab">Our Services</a>
				</li>
				<li class="nav-item">
					<a href="#expertise" class="nav-link" data-toggle="tab">Our Expertise</a>
				</li>
				<li class="nav-item">
					<a href="#prouduct" class="nav-link" data-toggle="tab">Our Products</a>
				</li>
			</ul>
			<!-- Tab Content -->
			<div class="tab-content">
				<div id="service" class="container tab-pane active">
					<h3>Our Services</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
				<div id="expertise" class="container tab-pane fade">
					<h3>Our Expertise</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
				<div id="prouduct" class="container tab-pane fade">
					<h3>Our Product</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
			</div>
		</div>
	</section>

    @endsection

