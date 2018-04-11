<?php
if(isset($_POST["submit"]))
{
  require_once("connection.php");
  $rguktid = $_POST["id"];
  $first_name = $_POST["FirstName"];
  $middle_name = $_POST["MiddleName"];
  $last_name = $_POST["LastName"];
  $mobile = $_POST["Mobile"];
  $Email = $_POST["email"];
  $skype = $_POST["Skype"];
  $school_name = $_POST["SchoolName"];
  $town = $_POST["Town"];
  $mandal = $_POST["Mandal"];
  $dist = $_POST["SchoolDistrict"];
  $cgpa = $_POST["CGPA"];
  $Father_name = $_POST["FName"];
  $Mother_name = $_POST["MName"];
  $income = $_POST["Income"];
  $subcaste = $_POST["SC"];
  $house_number = $_POST["HNO"];
  $street_name = $_POST["SName"];
  $address_line = $_POST["AL"];
  $c_t_v = $_POST["CTV"];
  $district = $_POST["District"];
  $pincode = $_POST["Pin"];
  $hostelroom_num = $_POST["HRN"];
  $warden_name = $_POST["WN"];
  $homeclass_room = $_POST["HR"];
  $homeroom_teacher = $_POST["HT"];
  $DOB_day= $_POST["DOBday"];
  $DOB_month= $_POST["DOBmonth"];
  $DOB_year= $_POST["DOByear"];
  $Father_education = $_POST["FatherEducation"];
  $Father_occupation = $_POST["FatherOccupation"];
  $Mother_education = $_POST["MotherEducation"];
  $Mother_occupation = $_POST["MotherOccupation"];
  $Graduation_year = $_POST["GraduationDate"];
  $Caste= $_POST["Caste"];
  $gender= $_POST["Radios"];
  $english= $_POST["Edu"];

  $sql1= "INSERT INTO personal_information(RGUKT_Id_Num,first_name,middle_name,last_name,gender,date_of_birth,mobile_number,gmail,skype_id) VALUES ('$rguktid','$first_name','$middle_name','$last_name','$gender','$DOB_year"."/"."$DOB_month"."/"."$DOB_day','$mobile','$Email','$skype')";
  if (mysqli_query($conn,$sql1) === TRUE) {
    // echo "New record created successfully";
 } else {
     
 }
 $sql2= "INSERT INTO Education(RGUKT_Id_Num,School_Name,Town_City,Mandal,District,Date_of_Graduation,GPA,English_Medium) VALUES ('$rguktid','$school_name','$town','$mandal','$dist','$Graduation_year','$cgpa','$english')";
  if (mysqli_query($conn,$sql2) === TRUE) {
     //echo "New record created successfully";
 } else {
     
 }
 $sql3= "INSERT INTO family_information(RGUKT_Id_Num,Father_Name,Father_Education,Father_Occupation,Mother_Name,Mother_Education,Mother_Occupation,Annual_Income,Caste,Sub_Caste) VALUES ('$rguktid','$Father_name','$Father_education','$Father_occupation','$Mother_name','$Mother_education','$Mother_occupation','$income','$Caste','$subcaste')";
  if (mysqli_query($conn,$sql3) === TRUE) {
     //echo "New record created successfully";
 } else {
     
 }
  $sql4= "INSERT INTO address_tbl(RGUKT_Id_Num,House_Number,Street_Name,Address_Line_1,City_Town,District,Pincode) VALUES ('$rguktid','$house_number','$street_name','$address_line','$c_t_v','$district','$pincode')";
  if (mysqli_query($conn,$sql4) === TRUE) {
     //echo "New record created successfully";
 } else {
     
 }
  $sql5= "INSERT INTO additional_details(RGUKT_Id_Num,Hostel_Room_Number,Warden_Name,Homeclass_Room,Homeroom_teacher) VALUES ('$rguktid','$hostelroom_num','$warden_name','$homeclass_room','$homeroom_teacher')";
  if (mysqli_query($conn,$sql5) === TRUE) {
     //echo "New record created successfully";
 } else {

 }

}

?>
<!DOCTYPE HTML>
<head>
  <title>Info</title>
  <style type="text/css">
    label{
      float: left;
      width: 200px;
    }
  </style>
</head>
<body>
<form method="POST">
    <h4>Personal Information</h4>
    <p>
        <label id="lab"  for="RGUKT">RGUKT ID Number</label>
        <input class="space" type="text"  placeholder="RGUKT ID" name="id">
    </p>
    <p>
        <label id="lab" for="Name">Name</label>
        <input type="text"  class="space"  placeholder="First Name" name="FirstName">
        <input type="text"  class="space"  placeholder="Middle Name" name="MiddleName">
        <input type="text"  class="space"  placeholder="Last Name" name="LastName">
    </p>
    <p>
        <label id="lab" for="Radios">Gender</label>
        <input type="radio" id="radios" name="Radios"  value="Male" checked > Male
        <input type="radio" id="radios" name="Radios"  value="Female" > Female
    </p>
    <p>
        <label id="lab"  for="DOB">Date Of Birth</label>
        <select   id="selectDay" style="width:20.6%;margin-right: 2px" name="DOBday">
          <option >Day</option>
        </select>
        <select   id="selectMonth"  style="width:20.6%;margin-right: 2px" name="DOBmonth">
          <option >Month</option>
        </select>
        <select   id="selectYear"  style="width:20.5%;margin-right: 2px" name="DOByear">
          <option >Year</option>
        </select>
    </p>
    <p>
        <label id="lab" for="Contact">Contact Information</label>
        <input type="text"  class="space"  placeholder="Mobile Number" name="Mobile">
        <input type="text"  class="space"  placeholder="w@rgukt.in" name="email">
        <input type="text"  class="space"  placeholder="Skype ID" name="Skype">
    </p>
    <h4>Education</h4>
     <p>
        <label id="lab" for="Name">School Details</label>
        <input type="text"  class="space"   placeholder="School Name" name="SchoolName">
        <input type="text"  class="space"  placeholder="Town/City" name="Town">
        <input type="text"  class="space"  placeholder="Mandal" name="Mandal">
        <input type="text"  class="space"  placeholder="District" name="SchoolDistrict">
    </p>
    <p>
        <label id="lab"  for="DOG">Date Of Graduation</label>
        <select   id="Year"  style="width:20.6%;margin-right: 8px" name="GraduationDate">
          <option >Year</option>
        </select>
    </p>
    <p>
        <label id="lab"  for="RGUKT">Cumulative GPA</label>
        <input class="space" type="text"  placeholder="10.0" name="CGPA">
    </p>
    <p>
        <label id="lab"  for="RGUKT">Did you study in English <br/>Medium?</label>
        <input type="radio" id="edu" name="Edu"  value="Yes" checked> Yes
        <input type="radio" id="edu" name="Edu"  value="No" > No
    </p>
    <h4>Family Information</h4>
    <p>
        <label id="lab"  for="Father">Father</label>
        <input class="space" type="text"  placeholder="Name" name="FName">
        <select     style="width:20.6%;margin-right: 2px" name="FatherEducation">
            <option >Education Level</option>
            <option> Masters</option>
            <option> Bachelors</option>
            <option> Intermediate</option>
            <option> Metriculation</option>
        </select>
        <select     style="width:20.6%;margin-right: 2px" name="FatherOccupation">
            <option >Occupation</option>
            <option> Business</option>
            <option> Software Employee</option>
            <option> Government Employee</option>
        </select>
    </p>
    <p>
        <label id="lab"  for="Mother">Mother</label>
        <input class="space" type="text"  placeholder="Name" name="MName">
        <select     style="width:20.6%;margin-right: 2px" name="MotherEducation">
            <option >Education Level</option>
            <option> Masters</option>
            <option> Bachelors</option>
            <option> Intermediate</option>
            <option> Metriculation</option>
        </select>
        <select     style="width:20.6%;margin-right: 8px" name="MotherOccupation">
            <option >Occupation</option>
            <option> Business</option>
            <option> Software Employee</option>
            <option> Government Employee</option>
            <option> House Wife</option>

        </select>
    </p>
     <p>
        <label id="lab"  for="Income">Annual Family Income</label>
        <input class="space" type="text"  placeholder="Income" name="Income">
    </p>
    <p>
        <label id="lab"  for="Caste">Caste</label>
        <select     style="width:20.6%;margin-right: 2px" name="Caste">
            <option >Caste</option>
            <option >O. C</option>
            <option> B. C</option>
            <option> S. C</option>
            <option> S. T</option>
        </select>
        <input class="space" type="text"  placeholder="Sub Caste" name="SC">
    </p>
    <h4>Address</h4>
    <p>
        <label id="lab"  for="HNO">House Number</label>
        <input class="space" type="text"  placeholder="House Number" name="HNO">
    </p>
    <p>
        <label id="lab"  for="SName">Street Name</label>
        <input class="space" type="text"  placeholder="Street Name" name="SName">
    </p>
    <p>
        <label id="lab"  for="AL">Address Line1</label>
        <input class="space" type="text"  placeholder="Address Line1" name="AL">
    </p>
    <p>
        <label id="lab"  for="CTV">City/Town/Village</label>
        <input class="space" type="text"  placeholder="City" name="CTV">
    </p>
    <p>
        <label id="lab"  for="District">District</label>
        <input class="space" type="text"  placeholder="District" name="District">
    </p>
    <p>
        <label id="lab"  for="Pin">Pin Code</label>
        <input class="space" type="text"  placeholder="PIN Code" name="Pin">
    </p>
    <h4>Additional Details</h4>
    <p>
        <label id="lab"  for="HRN">Hostel Room Number</label>
        <input class="space" type="text"  placeholder="Hostel Room Number" name="HRN">
    </p>
     <p>
        <label id="lab"  for="WN">Warden Name</label>
        <input class="space" type="text"  placeholder="Warden Name" name="WN">
    </p>
    <p>
        <label id="lab"  for="HR">Homeclass room</label>
        <input class="space" type="text"  placeholder="Homeclass room" name="HR">
    </p>
    <p>
        <label id="lab"  for="HT">Homeroom teacher</label>
        <input class="space" type="text"  placeholder="Homeroom teacher" name="HT">
    </p>
    <button type="submit" name="submit" value="submit">Submit</button>
</form>

</html>
<script>

    var min = 01,
    max = 31,
    select = document.getElementById('selectDay');

    for (var i = min; i<=max; i++){
       var opt = document.createElement('option');
       opt.value = i;
       opt.innerHTML = i;
       select.appendChild(opt);
    }

      var min = 01,
    max = 12,
    select = document.getElementById('selectMonth');

    for (var i = min; i<=max; i++){
       var opt = document.createElement('option');
       opt.value = i;
       opt.innerHTML = i;
       select.appendChild(opt);
    }
        var min = 1950,
    max = 2050,
    select = document.getElementById('selectYear');

    for (var i = min; i<=max; i++){
       var opt = document.createElement('option');
       opt.value = i;
       opt.innerHTML = i;
       select.appendChild(opt);

    }
    var min = 1950,
    max = 2050,
    select = document.getElementById('Year');

    for (var i = min; i<=max; i++){
       var opt = document.createElement('option');
       opt.value = i;
       opt.innerHTML = i;
       select.appendChild(opt);
    }
</script>
</body>