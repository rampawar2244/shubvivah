<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title></title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
          width: 100%;
         
        }
        .search {
          margin-top: -15%;
    margin-bottom: 100px;
  }
  .search .form-section{
    background: rgba(0,0,0,0.6);
    border-radius: 5px;
    padding: 75px;
    padding-top: 0px;
  }
  .serchtile{
    color:#fff;
  }
 
@media screen  and  (max-width: 600px){
  .search {
    margin-top: -120px;
  }
  .search .form-section{
    
    
    border-radius: 5px;
    padding: 10px;
    }
    .row5{
      margin: 0px 0px;
    margin-left: 20px;
    padding: 1px;
    }
}
    </style>
</head>
<body>
<div class="search">
         
         <div class="row5">
           <div class="col-md-10 col-md-offset-1">
             <div class="form-section">
               <div class="row5">
                   <form role="form">
                     <div class="col-md-4">
                       <div class="form-group">
                            <div class="serchtile">I'm Looking</div>
                         <label class="sr-only" for="looking">I'm looking</label>
               <select id="selectbasic" name="selectbasic" class="form-control">
     <option value="1">Groom</option>
     <option value="2">Bride</option>
   </select>
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                            <div class="serchtile">Age</div>
                         <label class="sr-only" for="age">Age</label>
                         <div class="input-group">
                           <select id="age" name="age" class="form-control">
     <option value="18">18</option>
     <option value="19">19</option>
     <option value="20">20</option>
     <option value="21">21</option>
     <option value="22">22</option>
     <option value="23">23</option>
     <option value="24">24</option>
     <option value="25">25</option>
     <option value="26">26</option>
     <option value="27">27</option>
     <option value="28">28</option>
     <option value="29">29</option>
     <option value="30">30</option>
     <option value="31">31</option>
     <option value="32">32</option>
     <option value="33">33</option>
     <option value="34">34</option>
     <option value="35">35</option>
     <option value="36">36</option>
     <option value="37">37</option>
     <option value="38">38</option>
     <option value="39">39</option>
     <option value="40">40</option>
     <option value="41">41</option>
     <option value="42">42</option>
     <option value="43">43</option>
     <option value="44">44</option>
     <option value="45">45</option>
     <option value="46">46</option>
     <option value="47">47</option>
     <option value="48">48</option>
     <option value="49">49</option>
     <option value="50">50</option>
     <option value="51">51</option>
     <option value="52">52</option>
     <option value="53">53</option>
     <option value="54">54</option>
     <option value="55">55</option>
     <option value="56">56</option>
     <option value="57">57</option>
     <option value="58">58</option>
     <option value="59">59</option>
     <option value="60">60</option>
     
   </select>  </div>
                       </div>
                     </div>
                         
                     <div class="col-md-2">
                      
                       <div class="form-group">
                               <div class="serchtile">To</div>
                         <label class="sr-only" for="toage">To</label>
                         <div class="input-group">
                           <select id="age" name="toage" class="form-control">
     <option value="18">18</option>
     <option value="19">19</option>
     <option value="20">20</option>
     <option value="21">21</option>
     <option value="22">22</option>
     <option value="23">23</option>
     <option value="24">24</option>
     <option value="25">25</option>
     <option value="26">26</option>
     <option value="27">27</option>
     <option value="28">28</option>
     <option value="29">29</option>
     <option value="30">30</option>
     <option value="31">31</option>
     <option value="32">32</option>
     <option value="33">33</option>
     <option value="34">34</option>
     <option value="35">35</option>
     <option value="36">36</option>
     <option value="37">37</option>
     <option value="38">38</option>
     <option value="39">39</option>
     <option value="40">40</option>
     <option value="41">41</option>
     <option value="42">42</option>
     <option value="43">43</option>
     <option value="44">44</option>
     <option value="45">45</option>
     <option value="46">46</option>
     <option value="47">47</option>
     <option value="48">48</option>
     <option value="49">49</option>
     <option value="50">50</option>
     <option value="51">51</option>
     <option value="52">52</option>
     <option value="53">53</option>
     <option value="54">54</option>
     <option value="55">55</option>
     <option value="56">56</option>
     <option value="57">57</option>
     <option value="58">58</option>
     <option value="59">59</option>
     <option value="60">60</option>
 
   </select>  </div>
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                           <div class="serchtile">Religion</div>
                         <label class="sr-only" for="religion">Religion</label>
                          <select id="religion" name="religion" class="form-control">
     <option value="buddhist">Marathi</option>
     <option value="buddhist">Hindu</option>
   </select>
                       </div>
                     </div>
                     <div class="col-md-2">
                         <br>
                       <button type="submit" name="search-groom" class="btn btn-default btn-primary">Search</button>
                  
                     </div>
                   </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
</div>
</div>
<div>
</div>
    </section><br><br><br>
</body>
</html>