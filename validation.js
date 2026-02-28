$("#websiteForm").validate({
    rules:{
        fullname: "required",
        orgname: "required",
        logo: {
            required: true,
        },
        bdesc: "required",
        baddress: "required",
        phone: {
            required: true,
            minlength: 10
        },
        email: {
            required: true,
            email: true,
        },
        PSinfo: "required",
        color: "required",
        photos: {
            required: true,
        },
        test: {
            required: true,
        },
    }, 

    messages: {
        fullname: "Please enter your full name",
        orgname: "Please enter your organisation name",
        logo: {
            required: "Please select logo availability option",
        },
        bdesc: "Please enter your business description",
        baddress: "Please enter your business address",
        phone: {
            required: "Please enter your phone number" ,
            minlength: "Enter atleast 10 digit phone number",
        },
        email: {
            required: "Please enter your email",
            email: "Please enter your valid email address",
        },
        PSinfo: "Enter Product and Service information",
        color: "Please enter your color preferences",
        photos: {
            required: "Please select photo availability option",
        },
        test: {
            required: "Please select YES or NO",
        },
    }, 

    submitHandler: function(form) {
        form.submit();
    }
});