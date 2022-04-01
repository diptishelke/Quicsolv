jQuery('#frm').validate({
rules:{
    email:"required",
    password:{
        required:true,
        minlength:5
        
    },

},messages:{
    email:"please enter your email",
    password:"please enter your password"

}
});