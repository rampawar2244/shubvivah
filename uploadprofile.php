<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/upload.css">
    <style>
       
     
      .ibiza  input
{
    display: none;
}
.ibiza
{
    padding-left: 150px;
    padding-right: 20px;
}
table
{
    font-size: 25px;
    font-family:'Times New Roman', Times, serif;
     
    color: #fff;
    text-align: center;
    padding-left: 23%;
}
th, td {
    text-align: left;
    padding: 10px;
  }
h1
{
    text-align: center;
    color:#fff;
    font-size: 30px;
    font-weight: bolder;
}
p
{
    text-align: center;
    font-family: Times;
    font-size: 20px;
    padding-bottom: 0%;
    color: #fff;
}
.content
{
    padding: 0px 10px 
}
*
{
    box-sizing: border-box;
    
}

button {
    width: 20%;
    background-color:rgb(241 153 22);
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
  border-radius: 22px;
  margin-top: 35px;
}
  
  
 button:hover {
    opacity: 1;
  }
  .container img{
    margin-left: 44%;
    margin-top: 51px;
    width: 91px;
    border-radius: 43px;
}
  
  .container input{
    margin-left: 42%;
    margin-top: 30px;
    color: #fff;
  }
  @media screen and (max-width: 600px) {
    body{
      width: 100%;
    }
    form{
      text-align: center;
    }
    .container{
      text-align: center;
    }
    .ibiza  input
    {
        display: none;
    }
    .ibiza
    {
        padding-left: 150px;
        padding-right: 20px;
    }
    table
    {
        font-size: 25px;
        font-family:'Times New Roman', Times, serif;
         
        color: #fff;
        text-align: center;
      padding-left: 0%;
    }
    th, td {
        text-align: left;
        padding: 10px;
      }
     
    
    h1
    {
        text-align: center;
        color:#fff;
        font-size: 30px;
        font-weight: bolder;
    }
    p
    {
        text-align: center;
        font-family: Times;
        font-size: 20px;
        padding-bottom: 0%;
        color: #fff;
    }
    .content
    {
        padding: 0px 0px 
    }
    *
    {
        box-sizing: border-box;
        
    }
    
    button {
        width: 20%;
        background-color:rgb(241 153 22);
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
      border-radius: 22px;
      margin-top: 35px;
    }
      
      
     button:hover {
        opacity: 1;
      }
      .container img{
        margin-left: 44%;
        margin-top: 51px;
        width: 91px;
        border-radius: 43px;
    }
      
      .container input{
        margin-left: 42%;
        margin-top: 30px;
        color: #fff;
      }


  }
    </style>
</head>
<body>
<form action="databasecode.php" method="POST" enctype="multipart/form-data">
  <div class="container">
<img src="icon2.png" alt=""><br>
<input type="file" name="profile" >

    <h1>Upload photo Id</h1>
    <p>Upload any one of the following document to verify your DOB,address,photo</p>
    </div>
    <section class="content">
        
            
            <table>
                <tr>
                 <div class="left1"> <th>Adhar Card</th></div>
                  <th> 
                     
                    <label for="file-input"></label>
                    <input id="file-input" type="file"name="adhar_card"/>
                </div>
                </th>
                  <div class="right1"><th>Front Side</th></div>
            </div>
                </tr>
                 
                <div class="left1"><th>Voter ID</th></div>
                  <th> 
                       
                    <label for="file-input"></label>
                    <input id="file-input" type="file" name="voter_id"/>
                      </div>
                </th>
                  <div class="right1"><th>Front Side</th></div>
                
                </tr>
                   
                <div class="left1"><th>Pan Card</th></div>
                  <th> 
                      
                    <label for="file-input"></label>
                    <input id="file-input" type="file" name="pan_card" />
                </div>
                </th>
                  <div class="right1"><th>Front Side</th></div>
                 
                </tr>
                  
                <div class="left1"><th>Drivers License</th></div>
                <th> 
                     
                  <label for="file-input"></label>
                  <input id="file-input" type="file"name="divers_license" />
                  </div>
              </th>
              <div class="right1"><th>Front Side</th></div>
           
              </tr>
               
              <div class="left1"><th>Passport</th></div>
              <th> 
                <label for="file-input"></label>
                <input id="file-input" type="file" name="passport" />
                  </div>
            </th>
            <div class="right1"><th>Front Side</th></div>
            </tr>

        </table>

        <!-- <h1>Or</h1>
        <p style="color: brown; font-weight: bold;">Send us your photo id via your registered mobile number to +91-7596063972</p> -->

        
           <button type="submit" name="upload_profile_submit" class="btn">SUBMIT</button> 
        </form>
        
        
        </section>
         
        
    

</body>
</html>