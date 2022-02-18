<?php
session_start();           
    include("./config/config.php");




if($_SESSION["user"]== true){
  echo "welcome"."". $_SESSION['user'];
  }
  else{
      header('location: login.php');
  }
  
  $user=$_SESSION["user"];
$sql="SELECT * FROM `login` WHERE `username`='$user'";
$sql_run = mysqli_query($con,$sql);

$row = mysqli_fetch_array($sql_run);
$id=$row["id"];

 echo $id;





if(isset($_POST['register-btn'])){
    $profile_created_by = $_POST['profile_created_by'];
    $firstName = $_POST['firstName'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $date_of_birth = $_POST['date_of_birth'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $religion = $_POST['religion'];
    $mother_tounge = $_POST['mother_tounge'];
    $caste = $_POST['caste'];
    $mobile_no = $_POST['mobile_no'];

    
    $register_data = json_encode(
        array('profile_created_by' => $profile_created_by,
        'firstName' => $firstName,
        'gender' => $gender,
        'marital_status' => $marital_status,
        'date_of_birth' => $date_of_birth,
        'country' => $country,
        'state' => $state,
        'city' => $city,
        'religion' => $religion,
        'mother_tounge' => $mother_tounge,
        'caste' => $caste,
        'mobile_no' => $mobile_no,
      ),  JSON_FORCE_OBJECT);

     
      $sql="SELECT user_id FROM user WHERE user_id='$id' &&  user_data_type='register' ";
      $result=mysqli_query($con,$sql);

      if(mysqli_num_rows($result) ==1){
    
echo "<script>alert('profile already exists') <script>";
header("location: home.php");
        }
    
    
        else{
            
        $sql= "INSERT INTO `user`(`user_id`,`user_data`, `user_data_type`)
        VALUES ('$id','$register_data','register')";     
$sql_run =  mysqli_query($con,$sql);
if($sql_run){
    header("location: education.php");
}
        }
    }


if(isset($_POST['education_submit'])){

    $highesteducation = $_POST['highesteducation'];
    $specialization = $_POST['specialization'];
    $other = $_POST['other'];
    $occupation = $_POST['occupation'];
    $inudstry = $_POST['inudstry'];
    $designation = $_POST['designation'];
    $annualincome = $_POST['annualincome'];
    $familyincome = $_POST['familyincome'];
    $manglik = $_POST['manglik'];
    $gotra = $_POST['gotra'];
    $feet = $_POST['feet'];
    $inches = $_POST['inches'];
    $body_type = $_POST['body_type'];
    $smoking = $_POST['smoking'];
    $drinking = $_POST['drinking'];
    $food_habits = $_POST['food_habits'];

    $education_profession_data = json_encode(
        array('highesteducation' => $highesteducation,
        'specialization' => $specialization,
        'other' => $other,
        'occupation' => $occupation,
        'inudstry' => $inudstry,
        'designation' => $designation,
        'annualincome' => $annualincome,
        'familyincome' => $familyincome,
        'manglik' => $manglik,
        'gotra' => $gotra,
        'feet' => $feet,
        'inches' => $inches,
        'body_type' => $body_type,
        'smoking' => $smoking,
        'drinking' => $drinking,
        'food_habits' => $food_habits,
      ),  JSON_FORCE_OBJECT);

      $sql= "INSERT INTO `user`(`user_id`,`user_data`, `user_data_type`)
      VALUES ('$id','$education_profession_data','education_profession')";

     $sql_run = mysqli_query($con,$sql);

     if($sql_run){
         header("location: uploadprofile.php");
     }
     else{
         echo "error";
     }
}


if(isset($_POST['upload_profile_submit'])){

    $profile_loc = $_FILES['profile']['tmp_name'];
    $profile_name = $_FILES['profile']['name'];
    $profile_desc = $profile_name;
    move_uploaded_file($profile_loc,'profile/'.$profile_name);

    $adhar_card_loc = $_FILES['adhar_card']['tmp_name'];
    $adhar_card_name = $_FILES['adhar_card']['name'];
    $adhar_card_desc = $adhar_card_name;
    move_uploaded_file($adhar_card_loc,'adhar_card/'.$adhar_card_name);

    $voter_id_loc = $_FILES['voter_id']['tmp_name'];
    $voter_id_name = $_FILES['voter_id']['name'];
    $voter_id_desc = $profile_name;
    move_uploaded_file($voter_id_loc,'voter_id/'.$voter_id_name);

    $pan_card_loc = $_FILES['pan_card']['tmp_name'];
    $pan_card_name = $_FILES['pan_card']['name'];
    $pan_card_desc = $pan_card_name;
    move_uploaded_file($pan_card_loc,'pan_card/'.$pan_card_name);

    $passport_loc = $_FILES['passport']['tmp_name'];
    $passport_name = $_FILES['passport']['name'];
    $passport_desc = $passport_name;
    move_uploaded_file($passport_loc,'passport/'.$passport_name);

    $divers_license_loc = $_FILES['divers_license']['tmp_name'];
    $divers_license_name = $_FILES['divers_license']['name'];
    $divers_license_desc = $divers_license_name;
    move_uploaded_file($divers_license_loc,'divers_license/'.$divers_license_name);


    $upload_data = json_encode(
        array('profile' => $profile_desc,
        'adhar_card' => $adhar_card_desc,       
        'voter_id' => $voter_id_desc,
        'pan_card' => $pan_card_desc,
        'passport' => $passport_desc,
        'divers_license' => $divers_license_desc,
      ),  JSON_FORCE_OBJECT);

      $sql= "INSERT INTO `user`(`user_id`,`user_data`, `user_data_type`)
      VALUES ('$id','$upload_data','upload')";
$sql_run = mysqli_query($con, $sql);
if($sql_run){
    echo "<script>aler('data upload successfully') </script>";
    header("location: profile.php");
}
}


?>