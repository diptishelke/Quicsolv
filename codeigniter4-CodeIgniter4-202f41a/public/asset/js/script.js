  jQuery('#frm').validate({
    rules:{
          name:{
              required:true,
          },
          lastname:{
            required:true,
        },
          email: {
            required: true,
            email: true
          },
          phone: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10
          },
          password: {
             minlength: 6,
             maxlength: 14,
             required: true,
             pwcheck: true 
          },
          confirm_password: {
            minlength: 6,
            maxlength: 14,
            required: true,
            pwcheck: true 
         },
    },messages:{
          name:{
              required: "please specify  your first name",
         },
         lastname:{
          required: "please specify  your last name",
     },
         email: {
          required: "*  please specify  your email",
          email: "* your email address must be in the format of name@domain.com"
        },
        phone:{
          required:"* please specify your phone number",
        },
        password: {
          required: "* this field is required",
          pwcheck: "* password is not strong enough"
      },
     confirm_password: {
        required: "* this field is required",
        pwcheck: "* password is not strong enough"
    },
    },
    submitHandler: function(form) {
      // do other things for a valid form
      form.submit();
    },

    errorPlacement: function(error, element) {
      //for name attribute
      if (element.attr("name") == "name" )
      {
          error.insertAfter(".name_error");
      }
      else if  (element.attr("name") == "lastname" )
      {
          error.insertAfter(".lastname_error");
      } 
      else if  (element.attr("name") == "email" )
      {
          error.insertAfter(".email_error");
      }
      else if  (element.attr("name") == "phone" )
      {
          error.insertAfter(".phone_error");
      }
      else if  (element.attr("name") == "password" )
      {
          error.insertAfter(".password_error");
      }
      else if  (element.attr("name") == "confirm_password" )
      {
          error.insertAfter(".confirm_password_error");
      }
      //for rest of the elements, keeping same position
      else
      {
          error.insertAfter(element);
      }
  }
  });