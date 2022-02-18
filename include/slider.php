<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            
        }

        .slider {
            text-align: center;
            background-color: antiquewhite;
           
            border-radius: 2px;
            padding: 25px;
        }

        .slider1 {

            margin-top: 75px;
            text-align: center;
            color: #000;
            margin-bottom: 30px;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 23%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .slider-row {
            margin: 0px 0px;
    margin-left: 100px;
    padding: 1px;

        }

        /* Clear floats after the columns */
        .slider-row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
            .slider-row{
                margin: 0px 0px;
    margin-left: 10px;
    padding: 1px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
 
        <div class="slider">
            <h1>Your Trusted Match Maker</h1>
            <div class="slider-row">
                <div class="column">
                    <div class="card">

                        <i class="fa fa-handshake-o fa-4x"></i>  
                        <p>Only Real Profiles</p>
                        <p>We allow only ID Matched <br>
                            profiles to connect with you
                        </p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <i class="fa fa-handshake-o fa-4x"></i>
                        <p>Relevant Matches </p>
                        <p>We handpick the right matches <br>
                             
                        </p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <i class="fa fa-lock fa-4x"></i>
                        <p>शुभ-विवाह Security</p>
                        <p>We Promise to keep your data safe</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <i class="fa fa-hand-peace-o fa-4x"></i>
                        <p>शुभ-विवाह</p>
                        <p>We Promise to keep your data safe</p>
                    </div>
                </div>
            </div>
        </div>
   
</body>

</html>