<?php 
include('header.php');

?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<?php     
include_once("connect.php");
$fname=$mname=$lname=$national=$cv=$gender=$dob=$status=$email=$mobile=$cnty=$cty=$street=$address=$reasons=$gender_pref=$age_pref="";

if ($_SERVER["REQUEST_METHOD"]=="POST") {

	$fname=$_POST['first_name'];
	$mname=$_POST['middle_name'];
	$lname=$_POST['last_name'];
	$national=$_POST['national'];
  $cv=$_POST['cv'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$status=$_POST['status'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$cnty=$_POST['cnty'];
	$cty=$_POST['cty'];
	$street=$_POST['street'];
	$address=$_POST['address'];
	$reasons=$_POST['reasons'];
  $gender_pref= $_POST['gender_pref'];
  $age_pref=$_POST['age_pref'];


$sql="INSERT INTO tbl_apply(first_name, middle_name, last_name, national_id,cv, gender, dob, maritial_status, email_address, mobile_phone, county, city, street_address, postal_address, reason,gender_pref,age_pref) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmtinsert=$db->prepare($sql);
$result=$stmtinsert->execute([$fname,$mname,$lname,$national,$cv,$gender,$dob,$status,$email,$mobile,$cnty,$cty,$street,$address,$reasons,
  $gender_pref,$age_pref]);
if ($result) {
echo "<script>alert('Application successfully. Our Team will review your application and gives you feedback through email or phone within working business days.');</script>";
}else{
echo "<script>window.location.href ='apply.php'</script>";

}
}

	?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/IMG-20201013-WA0010.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Adoption</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

 <h1> Adoption Application Form</h1>

  <!-- End Page Header --> 
<div>
<br><br>
  <form action="apply.php"  method="post">
  <div class="container"> 
  <div class="row"> 
  <div class="col-sm-6">
  <label for="first_name">First Name</label>
  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required="">
  <label for="last_name">Middle Name</label>
  <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Middle Name" required="">
  <label for="last_name">Last Name</label>
  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required="">
  <label for="national">National ID</label>
  <input type="text" name="national" id="national" class="form-control" placeholder="National ID" required="">
  <div class="custom-file">
  <label class="custom-file-label" for="cv">Upload your  National ID</label>
  <input type="file" class="custom-file-input" name="cv" id="ValidatedCustomFile"  required="">
  </div><br>
  <label for="gender">Gender</label><br>
  <select class="form-control" name="gender" required="">
  <option value="Male" >Male</option>
  <option value="Female" >Female</option>  <br><br>
  </select>
  <label for="dob">Age</label><br>
 <input type='number' class="form-control" name='dob' id="card" min="22" max="80"  placeholder="Your age should be from 22 to 80">
  <label for="status">Maritial Status</label>
  <select class="form-control" name="status"   required="">
  <option value="Married" >Married</option>
  <option value="Single" >Single</option>
  <option value="Divorced" >Divorced</option>
  <option value="Windowed" >Windowed</option >
  <option value="Engaged" >Engaged</option>
  </select>
  <label for="email">Email*</label>
  <input type="email"   class="form-control" name="email" id="email" placeholder="Email Address" required>
  </div>
  <div class="col-sm-6">
  <label for="mobile">Mobile*</label>
  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
  <label for="cnty">County</label>
  <input type="text" name="cnty"   id="cnty" class="form-control" placeholder="County" required>
  <label for="cty">City/Town</label>
  <input type="text" name="cty"   id="cty" class="form-control" placeholder="City/Town" required>
  <label for="street">Street Address</label>
  <input type="text" name="street"   id="street" class="form-control" placeholder="Street" required>
  <label for="address"> Postal Address</label>
  <textarea  class="form-control" name="address" placeholder="Communication Address" required=""></textarea>
  </div>
  
  <div class="col-sm-6">
  <label for="reasons"> Reason For Adoption</label>
  <textarea  class="form-control" name="reasons" placeholder="give breif reasons" required=""></textarea>
  <label for="gender_pref">Choose Preffered Chld's gender</label>
  <select class="form-control" name="gender_pref" required="">
  <option value="Male" >Male</option>
  <option value="female" >Female</option>
  </select>
  <label for="age_pref">Choose Preffered Chld's Age</label>
  <select class="form-control" name="age_pref" required="">
  <option value="1-4" >1-4 Years</option>
  <option value="5-7" >5-7 Years</option>
  <option value="8-10" >8-10 Years</option >
  <option value="11-13" >11-13 Years</option>
  <option value="14-15" >14-15 Years</option>
  </select>

  <input type="submit"  id="register" name="submit" class="btn btn-primary" value="Submit" />
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">

  </script>

  </body>
  </html>

  
<br>
<?php include('footer.php');?> 