
<!DOCTYPE html>
<html lang="en">
<head>
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
                        <form action="{{ route ('store')}}" method="post"
                            enctype="multipart/form-data" autocomplete="off">
                            <input type="hidden" name="_token" value="XBjNiqc2V1cx8hAZforE5vCXxtBN5GW224UAACqV">
                            <div class="row">
                            <fieldset style="margin-top:15px;">
                                    <legend>Complainer's Details</legend>

                                    <div id="complainer_details">
                                        
                                        <div class="col-md-12" style="margin-top:0">
                                            
                                            <label for="chkName">
                                                <input type="checkbox" id="chkName" value="notdisclosename"/>
                                                Complain Anonymously
                                            </label>
                                        </div>
                                        <div id="nameBlock" style="display:block">

                                            <div class="col-md-12">

                                                <input type="radio" name='radio1' checked onclick="status1();">
                                                <label style="font-weight:normal"> Individual</label>

                                                <input type="radio" name='radio1' onclick="status2();">
                                                <label style="font-weight:normal"> Group/Institution</label>

                                                <div id="individualBlock" style="display: block;">
                                                    <input class="form-control" placeholder="Enter Your Name" name="complaint_institution" type="text">
                                                </div>


                                            </div>
                                            <div class="col-md-12">

                                                
                                                <div id="groupBlock" style="display: none;">
                                                    <input class="form-control" placeholder="Enter Group/Institution&#039;s Name" name="complaint_institution" type="text">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <label>Gender</label>
                                                                                    
                                            

                                            <select class="form-control" name="gender"><option selected="selected" value="">Please Select Gender</option><option value="Male">Male</option><option value="Female">Female</option><option value="Third gender">Third gender</option><option value="Others">Others</option></select>

                                            


                                        </div>
                                        <div class="col-md-12  " style="margin-top: 10px; margin-bottom: 10px;">
                                            <label>Age Group</label> <label class="text text-danger"> *</label>
                                            <select class="form-control" name="age_group"><option selected="selected" value="">Please Select Age Group</option><option value="Below 16">Below 16</option><option value="16-39">16-39</option><option value="40-59">40-59</option><option value="60 Above">60 Above</option></select>
                                            
                                            
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
                                    <!-- <div class="col-md-12 "  style="margin-top: 10px; margin-bottom: 10px;">
                                        
                                        <div>
                                            <input name="corruption_type" type="radio" value="भ्रष्टाचार">
                                            Corruption 
                                            <br>
                                            <input name="corruption_type" type="radio" value="गैर कानूनी सम्पत्ति आर्जन"> 
                                            Acquisition of Illegal Property
                                        </div>
                                    
                                        
                                    </div> -->
                                    <div class="col-md-12 " style="margin-top: 10px; margin-bottom: 10px;">
                                        <labeL>Complaint Topic </labeL> <label class="text text-danger"> *</label>
                                        <input class="form-control" placeholder="Enter Complaint Topic" name="subject" type="text">
    
                                        
                                    </div>
                                    <div class="col-md-12 "  style="margin-top: 10px; margin-bottom: 10px;">
                                        <label>A Brief Description of Complaint </label> <label
                                                class="text text-danger"> *</label>
                                        <textarea class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px" placeholder="Enter a Brief Description of Complaint" name="corruption_details" cols="50" rows="10"></textarea>
    
                                        
                                    </div>
    
                                    <div class="col-md-12 "  style="margin-top: 10px; margin-bottom: 10px;">
                                        <label> Name of Person/institution against whom you want to complain <label class="text text-danger"> *</label></label> 
                                        <input class="form-control" placeholder="Enter Name of Person/institution against whom you want to complain " name="corruption_against_name" type="text">
    
                                        
                                    </div>
    
                                    <div class="col-md-12">
                                        <labeL>Additional information about complaint</labeL><br>
                                        <input name="corruption_file" type="file">
                                        <p class="text-danger"><strong>Note:</strong> Only jpeg, jpg, png, pdf, doc
                                            files are allowed &nbsp; [Maximum allowed file size: 5MB]</p>
    
                                        
                                    </div>
                                </fieldset>

                                
                        

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <hr>

                                    <button type="Submit" name="Submit" value="Submit" class="btn btn-primary"
                                            style="margin-bottom: 5px;">पेश गर्नुहोस् । / Submit
                                    </button>
                                </div>
                                <div class="col-md-12">

                                    <div class=" col-md-12 text-left text-bold"
                                        style="padding: 1px; color: black">
                                        <p>
                                                                                        <span class="text-danger"> *</span> Indicates Compulsary Fields 
                                                                                    </p>
                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>

                </div>

               

            </div>

        </div>
    </section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous" defer>
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" defer>
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ciaa.gov.np/Frontend/js/jquery.main.js"></script>
<script src="https://ciaa.gov.np/Frontend/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

    <script type="text/javascript">
        $(function () {
            $("#chkName").click(function () {
                if ($(this).is(":checked")) {
                    $("#nameBlock").hide();
                } else {
                    $("#nameBlock").show();
                }
            });
        });
    </script>
    <script>
        function status1() {
            //alert('hello');
            document.getElementById('individualBlock').style.display = 'block';
            document.getElementById('groupBlock').style.display = 'none';


        }

        function status2() {
            document.getElementById('groupBlock').style.display = 'block';
            document.getElementById('individualBlock').style.display = 'none';


        }
    </script>

</div> <!--wrapper close-->
</body> <!--body close-->
</html>

