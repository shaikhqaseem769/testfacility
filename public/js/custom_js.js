



/*Add New Record and update existing records*/
function addUpdateRecord(url, formData, successMessage, reloadUrl, formId){

	$.ajax({
        url:url,
        method:'POST',
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        beforeSend:function () {
            $('.help-block').html('');
            $('#menu_category_preloader').show();
            $('.save_btn').prop('disabled',true);
        },
        success:function(response){
            $('#menu_category_preloader').hide();
            $('.save_btn').prop('disabled',false);
            if(response.success === true){
                $('form#' + formId)[0].reset();
                swal(successMessage, response.message, "success");
                setTimeout(function(){
                   // window.location.reload();
                  window.location.href = reloadUrl;
                },2500);
                
            }else{
                swal("Cancelled", response.message, "error");
            }
        },
        error:function(response){
            $('#menu_category_preloader').hide();
            $('.save_btn').prop('disabled',false);
            $.each(response.responseJSON.errors,function(index,value){
                $('#'+index+'-block').html(value[0]);
            });
        }
    });
}



/* change record status*/
function changeRecordStatus(rid, status, url, recordMessages){
	
	swal({
      title: "Are you sure?",
      text: recordMessages.textMessage,
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        swal({
          title: 'Status Change!',
          text: recordMessages.confirm,
          icon: 'success'
        }).then(function() {
         
          $.ajax({
            url: url,
            method:'POST',
            cache:false,
            data:{active_record_id: rid, status: status},
            headers:{
                'x-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            },
            success:function(response){
                
                if(response.success === true){
                    
                    setTimeout(function(){
                       window.location.reload();
                    },10);
                }else{

                   
                }
            },
            error:function(response){
                console.log(response);
            }
        });

        });
      } else {
        swal("Cancelled", recordMessages.notConfirm, "error");
      }
    });
}

/*show edit record to update data*/
function editRecord(rid, rname, url){
	swal({
	  title: "Are you sure?",
	  text: 'Do you want to edit '+rname+'?',
	  icon: "warning",
	  buttons: [
	    'No, cancel it!',
	    'Yes, I am sure!'
	  ],
	  dangerMode: true,
	}).then(function(isConfirm) {
	    if (isConfirm) {
	        window.location.href = url;

	    }
	});
}



/*delete record from data base*/
function deleteRecord(rid, rname, recordMessages){

	swal({
      title: "Are you sure?",
      text: "You will not be able to recover this record!",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        swal({
          title: 'Deleted!',
          text: recordMessages.textMessage,
          icon: 'success'
        }).then(function() {
          $.ajax({
            url:APP_BASE_URL.concat('/delete-category/',rid),
            method:'DELETE',
            cache:false,
            headers:{
                'x-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            },
            success:function(response){
                console.log(response);
                if(response.success){

                    setTimeout(function(){
                        window.location.reload();
                    },10);
                }else{

                }
            },
            error:function(response){
                console.log(response);
            }
        })
        });
      } else {
        swal("Cancelled", "Your record is safe :)", "error");
      }
    });
}


