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


    // // // $('.alert').delay(5000).fadeOut(5000);
    // $('.common_select2').select2({
    //     minimumResultsForSearch: 20,
    //     dropdownParent: $('.js-select2_dt').next('.dropDownSelect2')
    // });

    // // $( "#common_datepicker" ).datepicker({ minDate: 0});
    // $( ".common_datepicker" ).datepicker({ 
    //     // minDate: 0,
    //     // changeMonth: true,
    //     // changeYear: true,
    //     dateFormat:'yy-mm-dd',
    //     changeMonth: true,
    //     changeYear: true
    // });

    // $( ".common_datepicker_no_min_date" ).datepicker({ 
    //     // changeMonth: true,
    //     // changeYear: true,
    //     // format:'Y-m-d H:m:s',
    // });

    // //start date
    // $( ".startDate" ).datepicker({ 
    //     dateFormat:'yy-mm-dd',
    //     changeMonth: true,
    //     changeYear: true,
    //     // numberOfMonths: 2,
    //     onSelect: function (selected) {
    //         var dt = new Date(selected);
    //         dt.setDate(dt.getDate());
    //         $(".endDate").datepicker("option", "minDate", dt);
    //     }
    // });

    // //end date
    // $(".endDate").datepicker({
    //     dateFormat:'yy-mm-dd',
    //     changeMonth: true,
    //     changeYear: true,
    //     // numberOfMonths: 2,
    //     onSelect: function (selected) {
    //         var dt = new Date(selected);
    //         dt.setDate(dt.getDate());
    //         $(".startDate").datepicker("option", "maxDate", dt);
    //     }
    // });

    // tinymce.init({
    //     selector: '.tinyMCE_textarea',
    //     height: 200,
    //     theme: "modern",
    // });

// ---------------------------------------------User Login-----------------------------------------------
    $(".user_login_form").validate({
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
           
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });

// ---------------------------------------------User Register-----------------------------------------------
    $(".user_register_form").validate({
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
            // order:{
            //     required: true,
            //     number: true
            // },
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });


// ---------------------------------------------Admin Login-----------------------------------------------
    $(".admin_login_form").validate({
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
            // order:{
            //     required: true,
            //     number: true
            // },
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });


// ---------------------------------------------Admin-----------------------------------------------
    $(".admin_form").validate({
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
            // order:{
            //     required: true,
            //     number: true
            // },
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });

    //Admin delete
    $(document.body).on('click','.delete-admin-btn',function(e){
        e.preventDefault();
        var me = $(this);
        var first_messages = 'Are you sure you want to delete this Admin? This process is not reversable.';
        var final_messages = 'Are you sure ?';
        var datatable_name = '.admin_datatable';
        DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
    });


// ---------------------------------------------Frontend (User Panel) Permission-----------------------------------------------
    $(".frontend_permission_form").validate({
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
            // end_date: { greaterThan: ".startDate" }
            // order:{
            //     required: true,
            //     number: true
            // },
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });

    $(document.body).on('click','.delete-frontend-permission-btn',function(e){
        e.preventDefault();
        var me = $(this);
        var first_messages = 'Are you sure you want to delete this Permission? This process is not reversable.';
        var final_messages = 'Are you sure ?';
        var datatable_name = '.frontend_permission_datatable';
        DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
    });


// ---------------------------------------------Backend (Admin Panel) Permission-----------------------------------------------
    $(".backend_permission_form").validate({
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
            // end_date: { greaterThan: ".startDate" }
            // order:{
            //     required: true,
            //     number: true
            // },
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });

    // // jQuery.validator.addMethod("greaterThan", 
    // // function(value, element, params) {

    // //     if (!/Invalid|NaN/.test(new Date(value))) {
    // //         return new Date(value) >= new Date($(params).val());
    // //     }

    // //     return isNaN(value) && isNaN($(params).val()) 
    // //         || (Number(value) > Number($(params).val())); 
    // // },'Must be greater than start date.');


    $(document.body).on('click','.delete-backend-permission-btn',function(e){
        e.preventDefault();
        var me = $(this);
        var first_messages = 'Are you sure you want to delete this Permission? This process is not reversable.';
        var final_messages = 'Are you sure ?';
        var datatable_name = '.backend_permission_datatable';
        DeleteConfirmAlert(me, first_messages, final_messages, datatable_name);
    });


// ---------------------------------------------Backend (Admin Panel) Role-----------------------------------------------
    $(".backend_role_form").validate({
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
            // end_date: { greaterThan: ".startDate" }
            // order:{
            //     required: true,
            //     number: true
            // },
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });

// ---------------------------------------------Frontend (User Panel) Role-----------------------------------------------
    $(".frontend_role_form").validate({
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
            // end_date: { greaterThan: ".startDate" }
            // order:{
            //     required: true,
            //     number: true
            // },
            // title: 'required',
            // slug: 'required',
            // strapline: 'required',
            // meta_key: 'required',
            // meta_desc: 'required',
        },
        messages: {
            
        }
    });

// ---------------------------------------------User-----------------------------------------------
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

