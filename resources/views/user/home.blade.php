@extends('user.index')
@section('content')

<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="slide" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="{{(asset('doctor'))}}/img/stetoskop.jpg" alt="">
								<div class="card">
									<div class="rectangle-3"></div>
									<div class="flex-row flex">
										<div class="d-flex justify-content-evenly">
											<div class="health-information lora-bold-east-bay-3-7px">Healt Information</div>
											<div class="overlap-group">
												<div class="more-info inter-medium-white-2-5px">More Info</div>
											</div>
										</div>
										<div class="flex-col-1 flex-col-3">
											<div class="opening-hours lora-bold-east-bay-3-7px">Opening Hours</div>
											<div class="flex-container flex">
												<div class="text inter-medium-white-2-5px-2">
													<span class="inter-medium-sonic-silver-2-5px">Hari&nbsp;&nbsp;&nbsp;&nbsp;: Senin - Jumat</span>
												</div>
												<div class="text inter-medium-white-2-5px-2">
													<span class="inter-medium-sonic-silver-2-5px">Pukul : </span><span class="span2">07.00 - 16.00</span>
												</div>
											</div>
										</div>
										<div class="emergency-cases lora-bold-east-bay-3-7px">emergency cases</div>
										<div class="phone">+62 822-4445-3495</div>
									</div>
								</div>
							</div>
			        </div>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	@endsection
