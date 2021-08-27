<?session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" ></script>
    <title>Document</title>
</head>
<style>
    body{
        transition:0.0012ms;
        margin: 0px;
        background-color:teal;
        opacity:0.9;
        padding: 0px;
    }
    .mainpage{
        background-color: dimgray;
    }
    .logo{
        color:white;
        font-size: 30px !important;
    }
    .logo  span{
    color: blue;
    }
    
   label{
       font-size:20px;
    }
    
    .headtag{
        margin: 30px;
       
    }

    .frm{
        padding:30px;
        margin-left: 60px;
        color: blueviolet;
    }
    fieldset{
        background-color:purple ;
        opacity: 0.7;
        margin-right:220px;
        color:#fff;

    }
    .headtag p{
     font: size 18px;
    }
    .headtag p span{
        color: lightgreen;
        font-weight: 70px;
        font-size: 20px;
    }
    
    #totalPrice{
    text-align:center;
    color:blue;
    margin:12px;
    padding:10px;
    display:none;
    font-weight:bold;
    background-color:#ff3;
}
#paypal-payment-button{
    padding:3px 2px ;
}
    .footer{
        background-color:darkgray;
    }
   
    .btn1{
 
  color:green;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
    }

    
</style><span class="error"><?php echo $textareaError?></span>
<body hideTotal()>
    <div class="mainpage">
        <label  class="logo">Spoony<span>Writers</span></label> 
       
    </div>
        <div class="headtag">
           
            <h1>Order 100% custom writing!</h1>
            <p>Our Writers will write you a 100% plagiarism free paper based on your instructions !<br>
                <span>free revisions within 30 days</span> .Avarange grade is "A" , Customer support !Direct conduct with writer.</p>
           </div>
           <div class="msg">
           </div>
           <div class="frm">
         <form action="orderpre.php" method="POST" enctype="multipart/form-data" 
         onsubmit="return true" id="form" name="form" >
            <fieldset>
                Enter enter your email.
              <input type="email" required name="email" id="email"/>
               <br><span class="error"><?php echo $emailError ;?></span></br>
               <label for="lavel"> select level of academic.</label>
                 <select name="level" required id="level" onchange="calculateTotal()">
           
                        <option value="" ></option>
                        <option>High school</option>
                        <option >College</option>
                        <option>University</option>
                        <option>Masters</option>
                        <option>PHD</option>
                        

             </select><br>
             </br>
               <label for="format"> SELECT  FORMAT:</label>
                  <select name="fmart" required id="fmart" >
                        <option  value=" "> </option>
                        <option>APA</option>
                        <option>CHICAGO</option>
                        <option>HARVARD</option>
                        <option>MLA</option>
                        <option>Other</option>
                </select><br><br>
               
               <label for="subject">Subject</label >
                     <select name="subject"  required id="subject"  onchange="calculateTotal()">
                        <option value="" ></option>
                        <option>Mathematics and Economics</option>
                        <option>Literature and Language</option>
                        <option >Creative Writing</option>
                        <option>Kiswahili</option>
                        <option>IT & Computer Science</option>
                        <option>Law</option>
                        <option>History</option>
                        <option >Accounting, Finance, $ SPSS</option>
                        <option>Chemistry</option>
                        <option >Technology</option>
                        <option >Engineering</option>
                        <option>Nursing</option>
                        <option >Biological Sciences</option>
                        <option >Psychology</option>
                        <option >Management</option>
                        <option >Health and Medicine</option>
                        <option >Business and Marketing</option>
                        <option>Religion &Theology</option>
                        <option></option>
                 </select><br></br>
                 <label for="pages">Number of pages </label>
            <input type="number" placeholder="1 page is appoximate 250 word"  
            name="npage" required id="npage"  oninput="getPages()" onchange="getPages()" min="1" /><br></br>
              <label >Date on which the paper should be submitted.</label>
              <select name="ordertime" required id="ordertime"  onchange=" calculateTotal()">
              <option value=""> </option>
              <option value="2hours"> within 2 hours</option>
              <option value="3hours">within 3  hours</option>
              <option value="4hours"> within 4 hours</option>
              <option value="5hours">within 5 hours</option>
              <option value="5_7">within 5- 7 hours</option>
              <option value="7_9"> within 7 -9 hours</option>
              <option value="10hours">within  10 hours</option>
              <option value="11_15">within 11 - 15  hours</option>
              <option value="1day">within  1 day</option>
              <option value="2days">within 2 days time</option>
              <option value="3days">within 3 days time</option>
              <option value="4days">within 4 days time</option>
              <option value="5days">within 5 days time </option>
              <option value="6days">within  6 days</option> 
              <option value="1wk">within  1 week time </option>
              <option value="2wks">within  2 weeks time </option>
              <option value="others"> others  </option>
              
              </select><br></br>
             
        
                <div class="instructions">
                    <label for="instructions">Enter Topic of the task. </label> 
                        <textarea maxlength="300 "   rows="5"   
                                cols="30" id="txtarea"  reqired name="txtarea" >
                                
                        </textarea>
                        <br><span class="error"><?php echo $textareaError?></span>
                </div>
               
                <div>
                    <p>Do u have any file document to upload to writer ?</p>
                    <input type="file" id="docpic" accept=".doc, .docx, .pdf , .jpg , .png" name="attach" >
                    <span class="error"><?php echo $attachError?></span>                 
                </div>
                <div id="totalPrice" name="totalPrice">
                    
                <!--<input type="hidden" name="totalPrice" id="totalPrice"/>-->
            </div>
           
                
                 
                <input type="submit" value="submit" name="submit" id="submit"  >
            
         
        </fieldset>
     </form>
     
 </div>
    
<hr>

   
   
   <div class="footer " name="">
   
    <div class="btn1">
    <i class="fa fa-arrow-left" > <a href="/spoonywritters/signup/home.php">previous</a></i>
  
    </div>
    </div>
</body>
</html>