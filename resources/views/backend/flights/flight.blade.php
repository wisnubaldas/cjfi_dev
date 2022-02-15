@extends('backend.layouts.default', ['contentFullHeight' => true])

@section('title', 'Full Height Content Page')

@section('content')
	<!-- begin vertical-box -->
	<div class="vertical-box">
		<!-- begin vertical-box-column -->
		<div class="vertical-box-column">
			<!-- begin vertical-box -->
			<div class="vertical-box">
				<!-- begin vertical-box-row -->
				<div class="vertical-box-row">
					<!-- begin vertical-box-cell -->
					<div class="vertical-box-cell">
						<!-- begin vertical-box-inner-cell -->
						<div class="vertical-box-inner-cell">
							<!-- begin scrollbar -->
							<div data-scrollbar="true" data-height="100%" class="wrapper">
                            <h1>
                            	KONTENT MEK
                            </h1>
							</div>
							<!-- end scrollbar -->
						</div>
						<!-- end vertical-box-inner-cell -->
					</div>
					<!-- end vertical-box-cell -->
				</div>
				<!-- end vertical-box-row -->
			</div>
			<!-- end vertical-box -->
		</div>
		<!-- end vertical-box-column -->
		
	</div>
	<!-- end vertical-box -->
@endsection
@push('scripts')
    
@endpush