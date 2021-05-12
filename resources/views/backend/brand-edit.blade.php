@extends('backend.layouts.default')

@section('title', 'Edit Brand')

@section('content')
<!-- begin panel -->
<div class="panel panel-warning">
    <!-- begin panel-body -->
    <div class="panel-body">
        {{-- @dump($brand->image_asset) --}}
        <!-- begin #gallery -->
        <div id="gallery" class="gallery">
            <!-- begin image -->
            @foreach ($brand->image_asset as $item)
            <div class="image gallery-group-1">
                <div class="image-inner">
                    <a href="{{url('img/item/original/'.$item->image_small)}}" data-lightbox="gallery-group-1">
                        <div class="img" style="{{'background-image: url(/img/item/small/'.$item->image_small.')'}}"></div>
                    </a>
                    <p class="image-caption text-uppercase">
                        {{$item->status}}
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">{{$item->name}}</h5>
                    <div class="desc">
                       {{$item->desc}}
                       <a href="#" class="btn btn-xs btn-danger">Remove</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end image -->
        </div>
       
        <!-- end #gallery -->
        {{-- the form --}}
        <form action="#">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group m-b-10">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="" class="form-control form-control-sm"
                            value="{{$brand->nama}}">
                    </div>
                    <div class="form-group m-b-10">
                        <label for="">Tipe</label>
                        <select class="form-control form-control-sm text-uppercase" name="types_id">
                            @foreach ($tipe as $item)
                            <option value="{{$item->id}}" {{$brand->types_id == $item->id? 'selected':''}}>
                                {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-b-10">
                        <label for="">Motif</label>
                        <select class="form-control form-control-sm text-uppercase" name="motifs_id">
                            @foreach ($motif as $item)
                            <option value="{{$item->id}}" {{$brand->motifs_id == $item->id? 'selected':''}}>
                                {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group m-b-10">
                        <label for="">Keterangan</label>
                        <input type="text" name="desc" id="" class="form-control form-control-sm"
                            value="{{$brand->desc}}">
                    </div>
                    <div class="form-group m-b-10">
                        <label for="">Ukuran</label>
                        <select class="form-control form-control-sm text-uppercase" name="ukurans_id">
                            @foreach ($ukuran as $item)
                            <option value="{{$item->id}}" {{$brand->ukurans_id == $item->id? 'selected':''}}>
                                {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="btn-group">
                        <a href="#modal-message" data-backdrop="static" data-toggle="modal" class="btn btn-primary">Add Image</a>
                        <button type="submit" class="btn btn-green">Update</button>
                        <a href="/merek/grid" class="btn btn-purple">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- #modal-message -->
        <div class="modal modal-message fade" id="modal-message">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Image </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label>Name Image</label>
                                <input class="form-control form-control-sm text-uppercase" id="img-name" type="text" name="name"/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input id="img-desc" class="form-control form-control-sm" type="text" name="desc"/>
                            </div>
                            <label>Type Image</label>
                            <div class="form-group">
                                    <div class="radio radio-css radio-inline">
                                        <input type="radio" name="radio_css_inline" id="inlineCssRadio1" value="foto" checked />
                                        <label for="inlineCssRadio1">Foto Slide Dekorasi</label>
                                    </div>
                                    <div class="radio radio-css radio-inline">
                                        <input type="radio" name="radio_css_inline" id="inlineCssRadio2" value="tiles"/>
                                        <label for="inlineCssRadio2">Foto Keramik</label>
                                    </div>
                                    <div class="radio radio-css radio-inline">
                                        <input type="radio" name="radio_css_inline" id="inlineCssRadio3" value="foto_tiles" 
                                        data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" />
                                        <label for="inlineCssRadio3">Foto Dekorasi Keramik</label>
                                    </div>
                            </div>
                            <div class="form-group row collapse" id="collapseExample">
                                <div class="col-lg-12">
                                    <label for="">Parent Keramik</label>
                                    <select class="default-select2 form-control" name="parent_id" type='text'>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control form-control-sm" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Pilih Image</label>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                        <a href="javascript:;" class="btn btn-primary" id="save-image">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
    </div>
    <!-- end panel-body -->
</div>
<!-- end panel -->
@endsection

@push('scripts')
<script src="/assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="/assets/plugins/isotope-layout/dist/isotope.pkgd.min.js"></script>
<script src="/assets/plugins/lightbox2/dist/js/lightbox.min.js"></script>
<script src="/assets/js/demo/gallery.demo.js"></script>
<script>
    $('input:radio[name="radio_css_inline"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() !== 'foto_tiles') {
            // append goes here
						// alert($(this).val())
						$('#collapseExample').removeClass('show')
						$('.default-select2').val(null).trigger('change');
        }
    });

    jQuery(function(){
			const url_img = "{{route('merek.save_image')}}";
			let tmplAddImg = function(d){
								return `<div class="widget-img widget-img-xl rounded bg-inverse pull-left m-r-5 m-b-5" style="background-image: url(/img/item/small/${d.name})"></div>`;
						}
						
			$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
	
			$('#save-image').on('click',function(){
					const img_name = $('#img-name').val();
					const img_desc = $('#img-desc').val();
					const img_tipe = $("input[name='radio_css_inline']:checked").val();
					const parent_id = $(".default-select2").val();
					var file_data = $('#customFile').prop('files')[0];   
					var form_data = new FormData();     
					form_data.append('file', file_data);
					form_data.append('parent_id', parent_id);
					form_data.append('name', img_name);
					form_data.append('desc', img_desc);
					form_data.append('type', img_tipe);
					// console.log(form_data);                             
					$.ajax({
							url: url_img, // point to server-side PHP script 
							dataType: 'json',  // what to expect back from the PHP script, if anything
							cache: false,
							contentType: false,
							processData: false,
							data: form_data,                         
							type: 'post',
							success: function(r){
									$('#modal-message').modal('hide');
									$('#show-img').append(tmplAddImg(r))
									$('#id-images').append(`<input type="text" name="id_images[]" value="${r.id}" hidden>`)
									// console.log(r); // display response from the PHP script, if any
							}
					});
			})
			const parent_uri = "{{route('merek.parent_image')}}";
						$(".default-select2").select2({
							minimumInputLength: 4,
							ajax: {
								method:'GET',
								url: parent_uri,
								dataType: 'json',
								data: function (params) {
												var query = {
													search: params.term,
													type: 'public'
												}
												return query;
											}
							}
						});
		});
</script>
@endpush

@push('css')
<link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<link href="/assets/plugins/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
@endpush