<?php
include_once('style.php');
include_once('js.php');


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Exersices</title>
   
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Register</h1>
                <form action="action.php" method="post">
                    <div class="form-group">
                        <label for="">Name</label><br>
                        <input type="text" name="name" placeholder="Enter your name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label><br>
                        <input type="email" name="email" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label><br>
                        <input type="number" name="phone" placeholder="Enter your Phone Number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label><br>
                        <input type="radio" id="male" name="gender" value="male" >
                        <label for="html">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female" >
                        <label for="css">Female</label><br>
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                    <select name="nationality" id="nationality">
                        <option value="palestinian">Palestinian</option>
                        <option value="syrian">Syrian</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="kuwaiti">Kuwaiti</option>
                      </select>
                      </div>
                      <button class="btn btn-primary">Signup</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>