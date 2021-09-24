/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.6.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/admin/
*/
let addInputFileUpload = {};

let selectMotif = function(el){
        el.select2({
                placeholder: "Select a state",
                delay: 250,
                ajax: {
                    url: '/product-image/get_motif',
                    dataType: 'json',
                    processResults: function (data) {
                        if(data.data.length == 0)
                        {
                            return 'end of page';
                        }
                            return {
                                        results: data.data,
                                        pagination: {
                                            more: true
                                        }
                                    };
                    },
                    data: function (params) {
                        var query = {
                            search: params.term,
                            page: params.page || 1
                        };
                        return query;
                    }
                }
        });
    }

let trigerMotif = function(el){
    el.on('select2:select', function (e) {
        const id = $(this).val();
                $.ajax({
                    url: '/product-image/get-product-by-motif/'+id, 
                    success: function(result){
                        
                        if(!result)
                        {
                            const tmpl = `<div class="note note-warning note-with-right-icon">
                                    <div class="note-icon"><i class="fa fa-lightbulb"></i></div>
                                    <div class="note-content text-right">
                                        <h4>Error: <b>500</b></h4>
                                        <p>Product tidak di tenukan...!!! Product id: <b>${id}</b></p>
                                    </div>
                                    </div>`;
                            $('#result-product').html(tmpl);
                            $('#multiple-upload-image').addClass('d-none');
                        }else{
                            /* ANCHOR get warna id */
                            // console.log(result.warna_id);
                            const tmpl = `<div class="note note-success note-with-right-icon">
                                    <div class="note-icon"><i class="fa fa-lightbulb"></i></div>
                                    <div class="note-content text-right">
                                        <h4>Product Code <b>${result.code}</b></h4>
                                        </p>
                                    </div>
                                    </div>`;
                                
                                addInputFileUpload.id_product = result.id;
                                // $('#id_product').val(result.id);
                                $('#result-product').html(tmpl);
                                $('#multiple-upload-image').removeClass('d-none');

                            getWarna(result.warna_id,function(data){
                                // addInputFileUpload.warna = data;

                                // console.log(data)
                                // let warna = [];
                                for (const k in data) {
                                    if (Object.hasOwnProperty.call(data, k)) {
                                        $('#warna-option').append(`<option value="${k}">${data[k]}</option>`);
                                    }
                                }
                                
                                // setWarna($('.isi-warna'),$('#id_warna'));
                            });
                        }
                    },
                    error:function(xhr){
                        alert("An error occured: " + xhr.status + " " + xhr.statusText);
                    }
                });
        });
}

/* ANCHOR ajax get warna */
let getWarna = function(warna,callback)
{
    $.ajax({
            url: '/product-image/warna',
            method: 'GET',
            data: {
                    warna: warna
                  }						
    }).done(function(data) {
         return callback(data);
    }).fail(function() {
        alert( "error" );
    }).always(function() {

    });
};
/* ANCHOR ajax set warna */
let setWarna = function(a)
{
    var x = (a.value || a.options[a.selectedIndex].value);  //crossbrowser solution =)
    addInputFileUpload.warna = x;
    
};
/* end get warna */
let setTipe = function(a){
    var x = (a.value || a.options[a.selectedIndex].value);  //crossbrowser solution =)
    addInputFileUpload.status = x;
}

// file upload 
var handleJqueryFileUpload = function() {
	// Initialize the jQuery File Upload widget:
	$('#fileupload').fileupload({
		autoUpload: false,
		disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
		maxFileSize: 5000000,
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
		// Uncomment the following to send cross-domain cookies:
		// xhrFields: {withCCOLOR_REDentials: true},   
	});

	// Enable iframe cross-domain access via COLOR_REDirect option:
	$('#fileupload').fileupload(
		'option',
		'COLOR_REDirect',
		window.location.href.replace(
			/\/[^\/]*$/,
			'/product-image/create?%s'
		)
	);

	// hide empty row text
	$('#fileupload').bind('fileuploadadd', function(e, data) {
		$('#fileupload [data-id="empty"]').hide();
        // additional file input file upload
        $('#mysmodal').modal({
            keyboard: false,
            backdrop: 'static'
        })

        $('#btn-model').on('click',function(){
            // console.log(addInputFileUpload)
            data.formData = addInputFileUpload
        });
        
	});
	
	// show empty row text
	$('#fileupload').bind('fileuploadfail', function(e, data) {
        if(data.hasOwnProperty('_response') && data._response.jqXHR.status == 422)
        {
                alert('Server Error: '+data._response.jqXHR.responseJSON.message)
        }

		var rowLeft = (data['originalFiles']) ? data['originalFiles'].length : 0;
		if (rowLeft === 0) {
			$('#fileupload [data-id="empty"]').show();
		} else {
			$('#fileupload [data-id="empty"]').hide();
		}
	});

	// Upload server status check for browsers with CORS support:
	if ($.support.cors) {
		$.ajax({
			type: 'HEAD'
		}).fail(function () {
			$('<div class="alert alert-danger"/>').text('Upload server currently unavailable - ' + new Date()).appendTo('#fileupload');
		});
	}

	// Load & display existing files:
	$('#fileupload').addClass('fileupload-processing');
	$.ajax({
		// Uncomment the following to send cross-domain cookies:
		// xhrFields: {withCCOLOR_REDentials: true},
		url: $('#fileupload').fileupload('option', 'url'),
		dataType: 'json',
		context: $('#fileupload')[0]
    }).always(function () {
        $(this).removeClass('fileupload-processing');
    }).done(function (result) {
		// console.log(result);
		$(this).fileupload('option', 'done')
		.call(this, $.Event('done'), {result: result});
	});
    
};


var FormMultipleUpload = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleJqueryFileUpload();
		}
	};
}();

$(document).ready(function() {
	FormMultipleUpload.init();
});