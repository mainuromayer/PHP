<?php 

/* CREATE TABLE registration_form
(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL,
    title varchar(50) NOT NULL,
    contact varchar(15) NOT NULL,
    email varchar(150) NOT NULL UNIQUE KEY,
    password varchar(100) NOT NULL,
	qualification varchar(50) NOT NULL,
    address text NOT NULL,
    dob date NOT NULL,
    gender enum("M", "F", "O") NOT NULL,
    status boolean
); 

ALTER TABLE registration_form DROP COLUMN 

*/



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up Form</title>

    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="header_content">
                <div class="header_title">
                    <img src=".//assets//img/logo.png" alt="">
                    <h1>Sign Up</h1>
                </div>
                <form action="controller.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name='form' value='registration'>

                    <div class="form_content">

                        <div class="input_image">
                            <label for="inputTag">
                                Select Profile Picture <br/>
                              <img src=".//assets//img/camera_icon.png" alt="">
                              <input name="profile_picture" id="inputTag" type="file" accept="image/png, image/jpg, image/gif, image/jpeg"/>
                              <br/>
                              <span id="imageName"> </span>
                            </label>
                          </div>
    <!-- ================================================= -->
                    <script>
                        let input = document.getElementById("inputTag");
                        let imageName = document.getElementById("imageName")
                
                        input.addEventListener("change", ()=>{
                            let inputImage = document.querySelector("input[type=file]").files[0];
                
                            imageName.innerText = inputImage.name;
                        })
                    </script>
    <!-- ============================================== -->
                        

                        <input type="text" name="name" id="name" placeholder="Full Name"> <br>
                        <input type="text" name="title" id="title" placeholder="Title"> <br>
                        <input type="numeric" name="number" id="number" placeholder="Number"> <br>
                        <input type="email" name="email" id="email" placeholder="Email"> <br>
                        <input type="password" name="password" id="password" placeholder="Password">
                        <input type="text" name="qualification" id="qualificaton" placeholder="Qualification">
                        <textarea name="address" placeholder="Address ..." id="address"></textarea>
                    </div>

                    <div class="date_content">
                        <label for="">Date of Birth</label><br>
                        <span>
                            <select name="d_o_b" id="select_one">
                                <option>Day</option>
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
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
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
                            </select>
                            <select name="d_o_b" id="select_two">
                                <option>Month</option>
                                <option value="January">Jan</option>
                                <option value="Febuary">Feb</option>
                                <option value="March">Mar</option>
                                <option value="April">Apr</option>
                                <option value="May">May</option>
                                <option value="June">Jun</option>
                                <option value="July">Jul</option>
                                <option value="August">Aug</option>
                                <option value="September">Sep</option>
                                <option value="October">Oct</option>
                                <option value="November">Nov</option>
                                <option value="December">Dec</option>
                            </select>
                            <select name="d_o_b" id="">
                                <option>Year</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                            </select>
                        </span>
                    </div>
    
                    <div class="gender_content">
                        <label for="">Gender</label><br>

                        <div class="gender_content-item">
                            <span class="gender_span-one">
                                <label for="male">
                                    <span class="male">Male</span>
                                    <input type="radio" value="Male" name="gender" id="male">
                                </label>
                                
                            </span>
                            <span class="gender_span-two">
                                <label for="female">
                                    <span class="female">Female</span>
                                    <input type="radio" value="Female" name="gender" id="female">
                                </label>
                                
                            </span>
                            <span class="gender_span-three">
                                <label for="custom">
                                    <span class="custom">Custom</span>
                                    <input type="radio" value="Custom" name="gender" id="custom">
                                </label>
                                
                            </span>
                        </div>
                    </div>
    
                        
                    <button type="submit" class="sign_up">
                        <a href="controller.php">Sign Up</a>
                    </button>
                </form>
            </div>
        </header>
    </div>





    
</body>
</html>