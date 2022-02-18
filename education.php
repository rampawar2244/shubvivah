<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/education.css">
    <style>
        form{
            text-align: center;
        }
      
        section
 {
     padding-top: 2%;
     box-sizing: border-box;
     display:block;
     align-items:center;
      padding-left: 15%; 
 } 
  
 label
 {
    padding: 12px 13px 11px 91px;
    display: inline-block;
    margin-top: 6px;
    font-size: 25px;
    font-weight: bolder;
    color: #fff;

 }
 .list_1
 {
     width:max-content;
     
  width: 45%;
  margin-top: 4px;
  padding:12px;
  display:inline-block;
  padding-left: 15%;


 }
 .small{
    width: 45%;
    margin-top: 4px;
    padding: 12px;
    display: inline-block;
    padding-left: 15%;
}
 
 .list_2
 {
    width:max-content;
    
 width: 40%;
 margin-top: 4px;
  
 display:inline-block;
 padding-left:2%;
 }
 select
 {
     width:100%;
     border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  height:50px;
  padding:12px;
 }
 input
 {
     width:100%;
     border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  height:50px;
  padding:12px;
 }
 .profession
 {
     padding-top: 0%;
 }
 .education
 {
     padding-bottom: 0%;
 }

 button {
    width: 20%;
  background-color: rgb(241 153 22);
  color: rgb(236, 229, 229);
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  display:flex;
  justify-content: center;
  align-items:center;
  margin-left:40%;
  font-weight: bolder;
  font-size:20px;
  border-radius:10px ;
   
  cursor: pointer;
   
  }
  
 button:hover {
    opacity: 1;
  }
  @media screen and (max-width: 600px) {
      form{
        padding: 10px;
    position: relative;
    right: 16px;
      }
    section
    {
        padding-top: 2%;
        box-sizing: border-box;
        display:block;
        align-items:center;
         padding-left: 15%; 
    } 
    label
    {
        padding: 12px 0px 11px 10px;
    display: inline-block;
    margin-top: 6px;
    font-size: 25px;
    font-weight: bolder;
    color: #fff;
   
    }
    .list_1
    {
        width: 100%;
    margin-top: 4px;
    padding: 0px;
    display: inline-block;
    padding-left: 10%;
    }
    .list_2{
     
        width: 100%;
    margin-top: 4px;
    display: inline-block;
    padding-left: 10%;
}
    }
    select
    {
        width:100%;
        border: 1px solid #ccc;
     border-radius: 4px;
     resize: vertical;
     height:50px;
     padding:12px;
    }
    input
    {
        width:100%;
        border: 1px solid #ccc;
     border-radius: 4px;
     resize: vertical;
     height:50px;
     padding:12px;
    }
    .profession
    {
        padding-top: 0%;
    }
    .education
    {
        padding-bottom: 0%;
    }
    button {
        width: 40%;
    background-color: rgb(241 153 22);
    color: rgb(236, 229, 229);
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    margin-left: 35%;
    font-weight: bolder;
    font-size: 20px;
    border-radius: 10px;
    cursor: pointer;
       
      }
  



    </style>
</head>

<body>
        <form action="databasecode.php" method="POST" enctype="multipart/form-data" >
            <label>EDUCATION</label>
            <br>
            <div class="list_1">
                <label for="highesteducation"></label>
                <select name="highesteducation">
                    <option value="highesteducation">Highest Education</option>
                    <option value="Graduate">Graduate</option>
                    <option value="post graduate">Post Graduate</option>
                    <option value="Engineer">Engineer</option>
                    <option value="doctor">Doctor</option>
                    <option value="Phd">Phd</option>
                </select>
            </div>
            <div class="list_2"><input type="text" name="college" placeholder="Name of College/University/Institute"></div>

            <div class="list_1">
                <label for="specialization"></label>
                <select name="specialization">
                    <option value="specialization">Specialization</option>
                    <option value="Medical">Medical</option>
                    <option value="computer science">Computer Science</option>
                    <option value="MBA">MBA</option>
                    <option value="Arts">Arts</option>
                    <option value="chatered accountant">Chatered Accountant</option>
                </select>
            </div>
            <div class="list_2"><input type="text" name="other" placeholder="Other (Specialization)"></div>
  
    <br>


            <label for="profession">PROFESSION</label><br>
            <div class="list_1">
                <select name="occupation">
                    <option value="occupation">Occupation</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Bank employee">Bank Employee</option>
                    <option value="IT and CS employee">IT and CS Employee</option>
                    <option value="Bussinessman">Buissnessman</option>
                    <option value="Government employee">Goverment Employee</option>
                </select>
            </div>
            <div class="list_2">
                <select name="inudstry">
                    <option value="industry">Industry</option>
                    <option value="Medical">Medical</option>
                    <option value="computer science">Computer Science</option>
                    <option value="MBA">MBA</option>
                    <option value="Arts">Arts</option>
                    <option value="chatered accountant">Chatered Accountant</option>
                </select>
            </div>
            <br>
            <div class="list_1">
                <select name="designation">
                    <option value="designation">Designation</option>
                    <option value="Medical">Medical</option>
                    <option value="computer science">Computer Science</option>
                    <option value="MBA">MBA</option>
                    <option value="Arts">Arts</option>
                    <option value="chatered accountant">Chatered Accountant</option>
                </select>
            </div>
            </div>
            <div class="list_2"><input type="text" name="companyname" placeholder="Enter Company Name"></div>
            <br>
            <div class="list_1">
                <select name="annualincome">
                    <option value="annualincome">Annual Income</option>
                    <option value="1 lakh">1 lakh</option>
                    <option value="1 lakh">2 lakh</option>
                    <option value="1 lakh">3 lakh</option>
                    <option value="1 lakh">4 lakh</option>
                    <option value="1 lakh">Above 5 lakh</option>
                </select>
            </div>
            <div class="list_2">
                <select name="familyincome">
                    <option value="familyincome">Family Annual Income</option>
                    <option value="5 lakh"> less than 5 Lakh</option>
                    <option value="10 lakh">More than 5 lakh</option>
                    <option value="10 lakh">10 lakh</option>
                    <option value="20">More than 10 lakh</option>
                    <option value="20 lakh">More than 20 lakh</option>
                </select>
            </div>
            <!-- ***************************** -->

            <!-- ***************************** -->


    
    
  
        
            
          
            <label for="profession">Astrological </label><br>
            <div class="list_1">
            <label for="profession">Manglik</label><br>
                <select name="occupation">
                
                    <option value="occupation">Yes</option>
                    <option value="Doctor">No</option>
                   
                </select>
            </div>
            
            <div class="list_2">
            <label for="profession">Gotra</label><br>
                <input type="text" name="gotra">
            </div>
        
    <br>
        
            <label for="profession">Personal</label><br>
            
            <div class="list_1">
            <label for="profession">Heaight</label><br>
                <select name="feet" id="">
                    <option >Feet</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
</div>
<div class="list_2">
                <select name="inches">
                    <option>Inches</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
            </div>
            <br>
            <div class="list_1">
                <select name="body_type">
                    <option value="">Body Type</option>
                    <option value="slim">Slim</option>
                    <option value="fat">Fat</option>
                    <option value="skiny">Skiny</option>
                    <option value="average">Average</option>
                </select>
            </div>
            </div>
            <div class="list_2">
                <select name="smoking">
                    <option >SMOKING</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <br>
            <div class="list_1">
                <select name="drinking">
                    <option >DRINKING</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="list_2">
                                    <select name="food_habits">
                                        <option >FOOD HABITS</option>
                                        <option value="Veg">Veg</option>
                                            <option value="semiveg">Semiveg</option>
                                    </select>
            </div>
           <button type="submit" name="education_submit" class="btn">NEXT</button>
        </form>



</body>

</html>