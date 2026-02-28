<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Requirement Gathering Form</title>

    <!-- Custom css -->
    <link rel="stylesheet" href="forms.css">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

</head>
<body class="body">
    <form action="submit.php" method="POST" id="websiteForm">
    
    <!-- Requirement gathering card -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="form-header rounded-top"><!-- Purple line --></div>
    <div class="card-body p-4">
        <h2 class="fw-semibold">Website Requirement Gathering Form</h2>
        <p class="text-muted">Please provide details of your business or profile</p>
        <hr>
        <div class="text-danger">* Indicates required question</div>
    </div>
    </div>
    </div>

    <!-- Email -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <p class="fw-semibold">Email <span class="text-danger">*</span></p>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="checkDefault">
        <label class="form-check-label" for="checkDefault">Record example@gmail.com as the email to be included with my response</label>
        </div>
    </div>
    </div>
    </div>

    <!-- Name -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="fullname" class="form-label fw-semibold">
            Your Name <span class="text-danger">*</span>
        </label>
        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Your answer" required>
    </div>
    </div>
    </div>

    <!-- Organisation Name -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="orgname" class="form-label fw-semibold">
            Organisation Name <span class="text-danger">*</span>
        </label>
        <input type="text" name="orgname" id="orgname" class="form-control" placeholder="Your answer" required>
    </div>
    </div>
    </div>

    <!-- Logo -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <p class="fw-semibold">Is logo of your organisation available? <span class="text-danger">*</span></p>
        <p>If your business logo is available then please send it to info@aaradhyawebsolutions@gmail.com</p>
        <div class="form-check">
        <input class="form-check-input" type="radio" id="radioDefault" name="logo" value="Yes">
        <label class="form-check-label" for="radioDefault">Yes</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" id="radioDefault" name="logo" value="No">
        <label class="form-check-label" for="radioDefault">No</label>
        </div>
    </div>
    </div>
    </div>

    <!-- Business Description -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="description" class="form-label fw-semibold">
            Business Description <span class="text-danger">*</span>
        </label>
        <textarea class="form-control" placeholder="Your answer" id="description" name="bdesc"></textarea>
    </div>
    </div>
    </div>

    <!-- Business Address -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="address" class="form-label fw-semibold">
            Business Addresses <span class="text-danger">*</span>
        </label>
        <p>If there are multiple addresses then seperate them with new lines</p>
        <textarea class="form-control" placeholder="Your answer" id="address" name="baddress"></textarea>
    </div>
    </div>
    </div>

    <!-- Business Phone Number -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="phone" class="form-label fw-semibold">
            Business Phone Numbers <span class="text-danger">*</span>
        </label>
        <p>If there are multiple phone numbers then seperate them with coma (,)</p>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your answer" required>
    </div>
    </div>
    </div>

    <!-- Business Email Address -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="email" class="form-label fw-semibold">
            Business Email Address <span class="text-danger">*</span>
        </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Your answer" required>
    </div>
    </div>
    </div>

    <!-- Facebook link -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="fb" class="form-label fw-semibold">Facebook Link</label>
        <input type="text" name="fb" id="fb" class="form-control" placeholder="Your answer">
    </div>
    </div>
    </div>

    <!-- Instagram link -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="ig" class="form-label fw-semibold">Instagram Link</label>
        <input type="text" name="ig" id="ig" class="form-control" placeholder="Your answer">
    </div>
    </div>
    </div>

    <!-- Youtube link -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="yt" class="form-label fw-semibold">Youtube Link</label>
        <input type="text" name="yt" id="yt" class="form-control" placeholder="Your answer">
    </div>
    </div>
    </div>

    <!-- Product and Services Information -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="info" class="form-label fw-semibold">
            Product and Services Information <span class="text-danger">*</span>
        </label>
        <textarea class="form-control" placeholder="Your answer" id="info" name="PSinfo"></textarea>
    </div>
    </div>
    </div>

    <!-- Certifications -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="certificate" class="form-label fw-semibold">Any Certifications to mention</label>
        <textarea class="form-control" placeholder="Your answer" id="certificate" name="certificate"></textarea>
    </div>
    </div>
    </div>

    <!-- Team Information -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="team" class="form-label fw-semibold">Team Information</label>
        <textarea class="form-control" placeholder="Your answer" id="team" name="team"></textarea>
    </div>
    </div>
    </div>

    <!-- Competitors website -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="comp" class="form-label fw-semibold">Mention any competitors or their websites</label>
        <textarea class="form-control" placeholder="Your answer" id="comp" name="comp"></textarea>
    </div>
    </div>
    </div>    

    <!-- Products and Service Pricing -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="price" class="form-label fw-semibold">Products and Service Pricing</label>
        <input type="text" name="price" id="price" class="form-control" placeholder="Your answer">
    </div>
    </div>
    </div>

    <!-- Color Preferences -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="color" class="form-label fw-semibold">
            Color Preferences <span class="text-danger">*</span>
        </label>
        <input type="text" name="color" id="color" class="form-control" placeholder="Your answer" required>
    </div>
    </div>
    </div>

    <!-- Font Preferences -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="font" class="form-label fw-semibold">Font Preferences</label>
        <input type="text" name="font" id="font" class="form-control" placeholder="Your answer">
    </div>
    </div>
    </div>

    <!-- Business Keywords -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <label for="bword" class="form-label fw-semibold">Business Keywords</label>
        <p>These keywords will be used for SEO purpose</p>
        <textarea class="form-control" placeholder="Your answer" id="bword" name="bword"></textarea>
    </div>
    </div>
    </div>

    <!-- Product or Service photos -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <p class="fw-semibold">By when can you provide product or service photos? <span class="text-danger">*</span></p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="photos" id="radioDefault1" value="Within a week">
        <label class="form-check-label" for="radioDefault1">Within a week</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="photos" id="radioDefault2" value="Within a month">
        <label class="form-check-label" for="radioDefault2">Within a month</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="photos" id="radioDefault3" value="No photos">
        <label class="form-check-label" for="radioDefault3">I will not be able to provide photos. I fine with free images from internet.</label>
        </div>
    </div>
    </div>
    </div>

    <!-- Clients Testimonies -->
    <div class="container py-2">
    <div class="card shadow">
    <div class="card-body p-4">
        <p class="fw-semibold">Can you provide testimonies from your clients? <span class="text-danger">*</span></p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="test" id="radioDefault1" value="Yes">
        <label class="form-check-label" for="radioDefault1">Yes</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="test" id="radioDefault2" value="No">
        <label class="form-check-label" for="radioDefault2">No</label>
        </div>
    </div>
    </div>
    </div>

    <!-- Switch checkbox - Copy of response -->
    <div class="container py-2">
        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault">
            <label class="form-check-label" for="switchCheckDefault">Send me copy of my response</label>
        </div>

        <!-- Page 1 of 1 -->
        <!-- <label for="range1" class="form-label">Page 1 of 1</label>
        <input type="range" class="form-range" id="range1" min="0" max="100" value="100"> -->   
        <div class="d-flex justify-content-center">
            <p class="page rounded"></p>
            <p>&nbsp; &nbsp; Page 1 of 1</p> 
        </div>
    </div>

    <!-- Submit and clear button -->
    <div class="container py-2 mb-4 d-flex justify-content-between">
        <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
        <button class="btn btn-outline-primary" type="reset">Clear form</button>
    </div>

    </form>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <!-- jQuery validation CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
    <!-- Js file -->
    <script src="validation.js"></script>
</body>
</html>