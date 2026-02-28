$("#websiteForm").validate({
    errorElement: "div",                   //Show error inside div - next line
    errorClass: "text-danger",             //Bootstrap styling to show error in red
    errorPlacement: function(error,element) {
        error.insertAfter(element);       //To place error after input
    },

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

    submitHandler: function(form) {   //Submit handler runs after validation is successful
        // console.log("AJAX is running"); //To check default form submission
        let submitBtn = $("button[type='submit']");  //Select submit button using jQuery
        submitBtn.prop("disabled" , true).text("Submitting...");  //Prevent multiple submission

        $.ajax({
            url: $(form).attr("action"),  //url is to submit form to submit.php. jQuery to select form action.
            type: "POST",
            data: $(form).serialize(),   //It is use to convert form data properly.
            success: function(response) {
                if(response.trim() == "success"){  //If submit.php return success then this code will execute
                    $("#websiteForm")[0].reset();
                    alert("Form submitted successfully");
                } else {    //If submit.php return error then this code will execute
                    alert("Something went wrong");
                    submitBtn.prop("disabled", false).text("Submit");
                }
            },
            error: function() {    //This is for server errors
                alert("Server error");
                submitBtn.prop("disabled", false).text("Submit");
            }
        });
    }
});