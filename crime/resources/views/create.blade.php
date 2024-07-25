<!DOCTYPE html>
<html>
<head>
    <title>Online Registration</title>
</head>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="" content="">
<meta charset="utf-8">

<!--Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
<meta property="og:type" content="website" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="https://ciaa.gov.np/Frontend/images/nationalLogo" />

<title>Online Complaint </title>
<link rel="shortcut icon" href="https://ciaa.gov.np/uploads/images/logo.jpg" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://ciaa.gov.np/Frontend/css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="https://ciaa.gov.np/Frontend/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://ciaa.gov.np/Frontend/css/styles.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>

<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <style>
    body {
            font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

        }

        * {
            box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text], select, textarea {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 13px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Style the container/contact section */
        .formContainer {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 100%;
            margin-top: 10px;
            padding-right: 15px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
        fieldset {
            width: 98%;
            /* padding: 15px 15px 0; */
            margin: auto;
            border: 1px solid #d1d1d1;
            border-radius: 4px;            
        }

        legend {
            width: auto !important;
            font-size: 120% !important;
            margin-left:15px;
            /* padding-left: 5px; */
            /* padding-right: 5px; */
            font-weight: bold;
        }


        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media  screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
                margin-left: 6px;
            }
        }

</style>
<div class="wrapper">
    <a name="top" id="top"></a>        
    <section class="contact-form-area top-pad">
        <div class="container">
            <div class="row">
    <div class="col-md-12">
        </div></div>

                        <div class="row">
                <div class="column">
                    <div style="background-color: #f1f0fc; padding:15px;">
                        <div style="color: #1a1a1a; text-align: center; padding: 10px;">
                             
                                <h2><strong><u>Complaint Form</u></strong></h2>
                                                    </div>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="row">
                            <fieldset style="margin-top:15px;">
                                    <legend>Complainer's Details</legend>

                                    <div id="complainer_details">
                                        
                                    
                                        <div id="nameBlock" style="display:block">

                                    
                                            <div class="col-md-12">

                                                
                                                <div id="groupBlock" style="display: none;">
                                                    <input class="form-control" placeholder="Enter Group/Institution&#039;s Name" name="complaint_institution" type="text">

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12 "  style="margin-top: 10px; margin-bottom: 10px;">
                                        <label> Full Name <label class="text text-danger"> *</label></label> 
                                        <input class="form-control" placeholder="Enter Full Name " name="fullname" type="text">
    
                                        
                                    </div>
                                        <div class="col-md-12 ">
                                            <label>Gender</label>
                                                                                    
                                            

                                            <select class="form-control" name="gender"><option selected="selected" value="">Please Select Gender</option><option value="Male">Male</option><option value="Female">Female</option><option value="Third gender">Third gender</option><option value="Others">Others</option></select>

                                            


                                        </div>
                                        <div class="col-md-12  " style="margin-top: 10px; margin-bottom: 10px;">
                                            <label>Age Group</label> <label class="text text-danger"> *</label>
                                            <input class="form-control" name="age" placeholder="Enter Your Age" type="number">
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <label>Contact Number</label>
                                            <input class="form-control" placeholder="Enter Contact Number" name="contact_number" type="number">
                                            
                                        </div>

                                        <div class="col-md-12 "  style="margin-top: 10px; margin-bottom: 10px;">
                                            <labeL>Email Address of Complainer </labeL>
                                            <input class="form-control" placeholder="Enter Email Address of Complainer " name="email" type="email">

                                            
                                        </div>
                            
                            
                                     <br>
                                    <legend>Complaint Details</legend>
                                    <!-- <div class="col-md-12 " style="margin-top: 10px; margin-bottom: 10px;">
                                        <labeL>Complaint Topic </labeL> <label class="text text-danger"> *</label>
                                        <input class="form-control" placeholder="Enter Complaint Topic" name="complaint_topic" type="text">
    
                                        
                                    </div> -->
                                    <div class="col-md-12 "  style="margin-top: 10px; margin-bottom: 10px;">
                                        <label>A Brief Description of Complaint </label> <label
                                                class="text text-danger"> *</label>
                                        <textarea class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px" placeholder="Enter a Brief Description of Complaint" name="complaint_detail" cols="50" rows="10"></textarea>
    
                                        
                                    </div>
    
                                    <div class="col-md-12 "  style="margin-top: 10px; margin-bottom: 10px;">
                                        <label> Name of Person/institution against whom you want to complain <label class="text text-danger"> *</label></label> 
                                        <input class="form-control" placeholder="Enter Name of Person/institution against whom you want to complain " name="name_of_criminal" type="text">
    
                                        
                                    </div>
    
                                    <!-- <div class="col-md-12">
                                        <labeL>Additional information about complaint</labeL><br>
                                        <input name="corruption_file" type="file">
                                        <p class="text-danger"><strong>Note:</strong> Only jpeg, jpg, png, pdf, doc
                                            files are allowed &nbsp; [Maximum allowed file size: 5MB]</p>
    
                                        
                                    </div>  -->
                                </fieldset>

                                
                        

                            </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>