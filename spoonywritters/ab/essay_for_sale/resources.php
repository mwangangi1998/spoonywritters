<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8ab/essay_for_sale/resources.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>essays for sale</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="check">
     
       Theme: <input type="checkbox" name="" id="checkbox" class="checkbox">
        <label for="checkbox" class="label-1">
            <i class="fas fa-moon"></i>
            <div class="fas fa-sun"></div>
            <div class="ball"></div>
        </label>
        <div class="container">
            <div class="logo">
                     <div class="logo_name">spoony<span id="logo">writters</div>
                </div>
    </div>
    <div class="wrapper">
       
            <div class="frm">
                       <form action="uploadscontroller.php" method="POST"  enctype="multipart/form-data" >
                          
                            <h1>Uploads essays for sale</h1>
                                <div class="inpt">
                                 <label for="category">category</label>
                                  <select name="category" id="category" required >
                                      <option value=""></option>
                                      <option value="Essay">Essay</option>
                                      <option value="Research paper">Research paper </option>
                                      <option value="Term paper">Term paper</option>
                                      <option value="course Work">course Work</option>
                                      <option value="Research proposal">Research proposal</option>
                                      <option value="Book Review">Book Review</option>
                                      <option value="Movie Review">Movie Review </option>
                                      <option value="Thesis proposal">Thesis proposal</option>
                                      <option value="Scholary Essay">Scholary Essay</option>
                                      <option value="Admission Essay">Admission Essay</option>
                                      <option value="Resume Writing">Resume Writing</option>
                                      <option value="Powerpoint presentation">Powerpoint presentation </option>
                                      <option value="Personal statement">Personal statement</option>
                                      <option value="Dissertations">Dissertations</option>
                                      <option value="Multiple Choice Exams Questions">Multiple Choice Exams Questions</option>
                                  </select>
                                </div>
                                <div class="inpt">
                                <label for="title">Title</label>
                                    <input type="text" name="title" id="" placeholder="Enter Title of essay" required>
                                </div>
                                <div class="inpt">
                                <label for="Description">Description</label>
                                   <textarea name="Description" id="Description" cols="20" rows="10" required max-length="400"></textarea>
                                </div>
                                <div class="inpt">
                                <label for="Price">Price</label>
                                    <input type="number" name="price" id="price" required >
                                </div>
                                <div class="inpt">
                                <label for="file">file</label>
                                    <input type="file" name="file" id="file">
                                </div>
                                <div class="inpt">
                                     <button id="submit" value="submit">Save</button>
                                </div>

                       </form>
            </div>
        </div>
    </div>
    <script >
    
    const  checkbox =
    document.getElementById('checkbox');
    checkbox.addEventListener('change',() =>{
    document.body.classList.toggle('dark');
    });
        </script>
</html>