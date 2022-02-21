@extends('backend.layouts.default', ['contentFullHeight' => true])

@section('title', 'Upload Data Manifest')

@section('content')
	<x-default-content>
		<div class="row">
			<div class="col-xl-12">
				<div id="dropzone">
					<form action="/file-upload"
					      class="dropzone"
					      id="my-awesome-dropzone">
					 @csrf     	
					 </form>
				</div>
			</div>
			<div class="col-xl-6" id="data">
			</div>
			<div class="col-xl-6" id="img">
				
			</div>
		</div>
		
	</x-default-content>
@endsection
@push('scripts')
     <script src="/assets/plugins/dropzone/dist/min/dropzone.min.js"></script>
     <script type="text/javascript">
		Dropzone.autoDiscover = false;
		let ocr = {
			image : function(uri) {
				return `
					<a href="${uri}" target="_blank">
					<img src="${uri}" alt="..." class="img-thumbnail">
					</a>
				`;
			},
			data : function(data){
				let x = `<ul class="list-unstyled list-inline">`;
				for (var i = data.length - 1; i >= 0; i--) {
					x += `<li class="list-inline-item"><h5>${data[i].join('<br>')}</h5></li>`;
				}
				x += `</ul>`;
				return x;
			}
		}
		$(document).ready(function(){
			let DR = $(".dropzone").dropzone({ 
				url: "flight/upload-dokument",
				method: "POST",
				paramName:"file",
				dictDefaultMessage:"Upload dokument manifest disini",
				createImageThumbnails: true,
				acceptedFiles: "image/jpeg,image/png",
				error:function(file, message, xhr){
					console.log(message)
					alert('error: '+message)
					// $(file.previewElement).remove();
				},
				success:function(file, response) {
					// console.log(response.uri)
					const img = ocr.image(response.uri);
					const data = ocr.data(response.body);
					$('#img').html(img);
					$('#data').html(data);

				}
			});
		})
		
     </script>
@endpush
@push('css')
	<link href="/assets/plugins/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
@endpush