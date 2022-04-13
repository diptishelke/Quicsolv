jQuery('#frm').validate({
rules:{
    email:{ required:true,
        email:true

    },
    password:{
        required:true,
        minlength:5
        
    },
     name:{
        required:true,
        
        
    },
    lastname:{
        required:true,
       
        
    },
    phone:{
        required:true,
        minlength:10
        
    },
    confirmpassword:{
        required:true,
        
        
    },
   

},messages:{
    email:{
        required:"please enter your email",
        email:"please enter valid email"
    },

    password:{
        required:"please enter your password",
        minlength:"please enter minimum 5 character"
    },
    name:{
        required:"please enter your name",
        
    },
    lastname:{
        required:"please enter your lastname",
       
    },
    phone:{
        required:"please enter your phone",
        phone:"please enter minimum 10 character"
    },
    confirmpassword:{
        required:"please enter same as password",
       
    },


}
});