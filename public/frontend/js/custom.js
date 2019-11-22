$(document).ready(function(){

    var token = $('meta[name="csrf-token"]').attr('content');

    $('.select2').each(function () {
        $(this).select2({
          // theme: 'bootstrap4',
          // width: 'style',
          placeholder: $(this).attr('placeholder'),
          allowClear: Boolean($(this).data('allow-clear')),
        });
    });




// ---------------------------------------------Employee-----------------------------------------------
    $(".user_form").validate({
        //ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        // eslint-disable-next-line object-shorthand
        // errorElement: 'em',
        highlight: function highlight(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        // eslint-disable-next-line object-shorthand
        unhighlight: function unhighlight(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        },

        // Different components require proper error label placement
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');
    
            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else {
                error.insertAfter(element);
            }
        },
        validClass: "validation-valid-label",
        success: function(label,element) {
           // label.addClass("validation-valid-label").text("Successfully")
            //label.parent().removeClass('error');
            $(element).closest('.form-group').removeClass('has-error');
            label.remove();
          // console.log(label);
        },
        submitHandler: function(form) {
            form.submit();
        },
        rules: {
            height:{
                // required: true,
                number: true
            },
            weight:{
                // required: true,
                number: true
            },
            email:{
                required: true,
                email: true,
                validate_email: true,
            },
            profile_image: {
                fileType: {
                    types: ["jpg", "jpeg", "png"]
                },
                // maxFileSize: {
                //     "unit": "KB",
                //     "size": 100
                // },
                // minFileSize: {
                //     "unit": "KB",
                //     "size": "10"
                // }
            },
            company_email:{
                email: true,
                // validate_email: true,
            },
        },
        messages: {
            
        }
    });

    $(document.body).on('click','.delete-user-btn',function(e){
        e.preventDefault();
        var me = $(this);
        var first_messages = 'Are you sure you want to delete this User? This process is not reversable.';
        var final_messages = 'Are you sure ?';
        var datatable_name = '.user_datatable';
        DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
    });

    $(document.body).on('click','.user_status',function(){
        var me = $(this);
        StatusChange(me);
    });

// ------------------------------------------Company---------------------------------------------------------------------------
    $(".company_form").validate({
        //ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        // eslint-disable-next-line object-shorthand
        // errorElement: 'em',
        highlight: function highlight(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        // eslint-disable-next-line object-shorthand
        unhighlight: function unhighlight(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        },

        // Different components require proper error label placement
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');

            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else {
                error.insertAfter(element);
            }
        },
        validClass: "validation-valid-label",
        success: function(label,element) {
            $(element).closest('.form-group').removeClass('has-error');
            label.remove();
        // console.log(label);
        },
        submitHandler: function(form) {
            form.submit();
        },
        rules: {
            name:{
                required: true,
            },
            status:{
                required: true,
            },
        },
        messages: {
            
        }
    });

    $(document.body).on('click','.delete-company-btn',function(e){
        e.preventDefault();
        var me = $(this);
        var first_messages = 'Are you sure you want to delete this Company? This process is not reversable.';
        var final_messages = 'Are you sure ?';
        var datatable_name = '.company_datatable';
        DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
    });

    $(document.body).on('click','.company_status',function(){
        var me = $(this);
        StatusChange(me);
    });

// ------------------------------------------Leave Groups---------------------------------------------------------------------------
    $(".leave_group_form").validate({
        //ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        // eslint-disable-next-line object-shorthand
        // errorElement: 'em',
        highlight: function highlight(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        // eslint-disable-next-line object-shorthand
        unhighlight: function unhighlight(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        },

        // Different components require proper error label placement
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');

            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else {
                error.insertAfter(element);
            }
        },
        validClass: "validation-valid-label",
        success: function(label,element) {
            $(element).closest('.form-group').removeClass('has-error');
            label.remove();
        // console.log(label);
        },
        submitHandler: function(form) {
            form.submit();
        },
        rules: {
            name:{
                required: true,
            },
            description:{
                required: true,
            },
            status:{
                required: true,
            },
        },
        messages: {
            
        }
    });

    $(document.body).on('click','.delete-leave_group-btn',function(e){
        e.preventDefault();
        var me = $(this);
        var first_messages = 'Are you sure you want to delete this LeaveGroup? This process is not reversable.';
        var final_messages = 'Are you sure ?';
        var datatable_name = '.leave_group_datatable';
        DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
    });

    $(document.body).on('click','.leave_group_status',function(){
        var me = $(this);
        StatusChange(me);
    });

// ------------------------------------------Leave Types---------------------------------------------------------------------------
    $(".leave_type_form").validate({
        //ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        // eslint-disable-next-line object-shorthand
        // errorElement: 'em',
        highlight: function highlight(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        // eslint-disable-next-line object-shorthand
        unhighlight: function unhighlight(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        },

        // Different components require proper error label placement
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');

            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else {
                error.insertAfter(element);
            }
        },
        validClass: "validation-valid-label",
        success: function(label,element) {
            $(element).closest('.form-group').removeClass('has-error');
            label.remove();
        // console.log(label);
        },
        submitHandler: function(form) {
            form.submit();
        },
        rules: {
            name:{
                required: true,
            },
            description:{
                required: true,
            },
            status:{
                required: true,
            },
        },
        messages: {
            
        }
    });

    $(document.body).on('click','.delete-leave_type-btn',function(e){
        e.preventDefault();
        var me = $(this);
        var first_messages = 'Are you sure you want to delete this LeaveType? This process is not reversable.';
        var final_messages = 'Are you sure ?';
        var datatable_name = '.leave_type_datatable';
        DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
    });

    $(document.body).on('click','.leave_type_status',function(){
        var me = $(this);
        StatusChange(me);
    });


// -------------------------------------------------------Department-------------------------------------------------------------------------
$(".department_form").validate({
    highlight: function highlight(element) {
        $(element).addClass('is-invalid').removeClass('is-valid');
    },
    // eslint-disable-next-line object-shorthand
    unhighlight: function unhighlight(element) {
        $(element).addClass('is-valid').removeClass('is-invalid');
    },

    // Different components require proper error label placement
    errorPlacement: function errorPlacement(error, element) {
        error.addClass('invalid-feedback');

        if (element.prop('type') === 'checkbox') {
            error.insertAfter(element.parent('label'));
        } else {
            error.insertAfter(element);
        }
    },
    validClass: "validation-valid-label",
    success: function(label,element) {
        $(element).closest('.form-group').removeClass('has-error');
        label.remove();
      // console.log(label);
    },
    submitHandler: function(form) {
        form.submit();
    },
    rules: {
        name:{
            required: true,
        },
        status:{
            required: true,
        },
        
    },
    messages: {
        
    }
});

$(document.body).on('click','.delete-department-btn',function(e){
    e.preventDefault();
    var me = $(this);
    var first_messages = 'Are you sure you want to delete this department? This process is not reversable.';
    var final_messages = 'Are you sure ?';
    var datatable_name = '.department_datatable';
    DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
});

$(document.body).on('click','.department_status',function(){
    var me = $(this);
    StatusChange(me);
});

// ----------------------------------------------------Job title----------------------------------------------------------------------------
$(".job_title_form").validate({
    highlight: function highlight(element) {
        $(element).addClass('is-invalid').removeClass('is-valid');
    },
    // eslint-disable-next-line object-shorthand
    unhighlight: function unhighlight(element) {
        $(element).addClass('is-valid').removeClass('is-invalid');
    },

    // Different components require proper error label placement
    errorPlacement: function errorPlacement(error, element) {
        error.addClass('invalid-feedback');

        if (element.prop('type') === 'checkbox') {
            error.insertAfter(element.parent('label'));
        } else {
            error.insertAfter(element);
        }
    },
    validClass: "validation-valid-label",
    success: function(label,element) {
        $(element).closest('.form-group').removeClass('has-error');
        label.remove();
      // console.log(label);
    },
    submitHandler: function(form) {
        form.submit();
    },
    rules: {
        name:{
            required: true,
        },
        department_id:{
            required: true,
        },
        status:{
            required: true,
        },
        
    },
    messages: {
        
    }
});

$(document.body).on('click','.delete-job-title-btn',function(e){
    e.preventDefault();
    var me = $(this);
    var first_messages = 'Are you sure you want to delete this job title? This process is not reversable.';
    var final_messages = 'Are you sure ?';
    var datatable_name = '.job_title_datatable';
    DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
});

$(document.body).on('click','.job_title_status',function(){
    var me = $(this);
    StatusChange(me);
});


jQuery.validator.addMethod("validate_email", function(value, element) {

    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}, "Please enter a valid Email.");
    





}); //end document.ready

//----------------------------------------All Function---------------------------------------------------
function DeleteConfirmAlert(me, first_messages, final_messages, datatable_name){
    $.confirm({
      title: 'Confirmation',
      content: first_messages,
      icon: 'fa fa-exclamation-triangle',
      animation: 'scale',
      closeAnimation: 'scale',
      opacity: 0.5,
      buttons: {
          'confirm': {
              text: 'Proceed',
              btnClass: 'btn-blue',
              action: function(){
                  $.confirm({
                      title: 'This maybe critical',
                      content: final_messages,
                      icon: 'fa skull-crossbones',
                      animation: 'scale',
                      closeAnimation: 'zoom',
                      buttons: {
                          confirm: {
                              text: 'Yes, sure!',
                              btnClass: 'btn-danger',
                              action: function(){
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                var url = me.data('url');
                                $.ajax({
                                    url: url,
                                    type: 'DELETE',
                                    dataType: 'json',
                                    data: {method: '_DELETE', submit: true},
                                    success: function(data){
                                        var session = data.msg;
                                        if(data.status == 'success'){
                                            $(datatable_name).DataTable().draw(false);
                                            if (session != ""){
                                                Swal.fire({
                                                    title: 'Good job!',
                                                    text: session,
                                                    type: 'success',
                                                    // confirmButtonText: 'Deposit Funds'
                                                }).then(function() {
                                                    // window.location = "https://cryptolico.com/portal/deposit-fund";
                                                });
                                            }
                                        }else{
                                            if (session != ""){
                                                Swal.fire({
                                                    title: 'Sorry!',
                                                    text: session,
                                                    type: 'warning',
                                                })
                                            }
                                        }
                                        
                                    }
                                })
                              }
                          },
                          cancel: function(){
                              //$.alert('you clicked on <strong>cancel</strong>');
                          }
                      }
                  });
              }
          },
          cancel: function(){
              //$.alert('you clicked on <strong>cancel</strong>');
          },
          
      }
    });

} 


function StatusChange(me){
    var url = me.attr('data-url');
    var status = '';
    if (me.hasClass('active')) {
        status = '0';
    } else {
        status = '1';
    }

    $.ajax({
        type: 'get',
        url: url,
        data:{status:status},
        dataType: 'json',
        success: function(data){
            if(data.status == 'success'){
                var session = data.msg;
                if(data.status == 'success'){
                    if (me.hasClass('active')) {
                        me.addClass('inactive');
                        me.removeClass('active');

                        me.addClass('theme-bg4');
                        me.removeClass('theme-bg3');

                        me.text('Deactive');
                        
                    } else {

                        me.addClass('active');
                        me.removeClass('inactive');

                        me.addClass('theme-bg3');
                        me.removeClass('theme-bg4');

                        me.text('Active');
                    }
                    Swal.fire({
                        title: 'Good job!',
                        text: session,
                        type: 'success',
                    });
                }else{
                    if (session != ""){
                        Swal.fire({
                            title: 'Sorry!',
                            text: session,
                            type: 'warning',
                        })
                    }
                }
            }
        }
    });
}

function bulkDelete(me, datatable_name, id){
    var url = me.attr('data-url');
    $.when(SimpleconfirmAlert()).then(
        function(status) {
            if (status == "Yes") {
                if(id.length > 0){
                    $.ajax({
                        type: 'post',
                        url: url,
                        data:{
                            'id': id,
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                        },
                        dataType: 'json',
                        success:function(data){
                            if(data.status == 'success'){
                                $(datatable_name).DataTable().draw(false);
                                var session = data.msg;
                                if (session != ""){
                                    Swal.fire({
                                        title: 'Good job!',
                                        text: session,
                                        type: 'success',
                                        // confirmButtonText: 'Deposit Funds'
                                    }).then(function() {
                                        // window.location = "https://cryptolico.com/portal/deposit-fund";
                                    });
                                }
                            }else{
                                SimpleAlert('Some Problm for delete tag.');
                            }
                        }
                    });
                }else{
                    SimpleAlert('Please select atleast one checkbox.');
                }
            }
        }
    );
}

function closeWin() { 
    // window.top.close();
    window.close();
}

function SimpleconfirmAlert() {
    var def = $.Deferred();
    $.confirm({
        title: 'Confirmation',
        content: 'Are You Sure?',
        icon: 'fa fa-exclamation-triangle',
        animation: 'scale',
        closeAnimation: 'scale',
        opacity: 0.5,
        buttons: {
            confirm: {
                text: 'Proceed',
                btnClass: 'btn-blue',
                action: function () {
                    // return true;
                    def.resolve("Yes");
                }
            },
            cancel: {
                text: 'Cancel',
                btnClass: 'btn btn-danger',
                action:  function () {
                    // return false;
                    def.resolve("No");
                }
            }
        }
    });
    
    return def.promise();

}

function SimpleAlert(message){
    $.alert({
        title: 'Error',
        icon: 'fa skull-crossbones',
        type: 'red',
        content: message,
    });
}

