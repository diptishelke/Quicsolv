jQuery('#frm').validate({
rules:{
    email:{ required:true,
        email:true

    },
    password:{
        required:true,
        minlength:5
        
    },

},messages:{
    email:{
        required:"please enter your email",
        email:"please enter valid email"
    },

    password:{
        required:"please enter your password",
        minlength:"please enter minimum 5 character"
    }

}
});