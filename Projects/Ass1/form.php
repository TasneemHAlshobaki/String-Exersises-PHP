<?php
include_once('style.php');
include_once('js.php');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    
    
</head>
<body>
    <div class = "container" >
        <div class="row">
            <div class="col-12">
                <form method="POST" action="action.php">
                    <div class="form-group">
                        <label for="">Number "1"</label>
                        <input type="number" name="num1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Number "2"</label>
                        <input type="number" name="num2" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cars">Choose the calculation : </label>
                        <select name="Operation" id="cal" class="form-control">
                          <option value="+">+</option>
                          <option value="-">-</option>
                          <option value="*">*</option>
                          <option value="/">/</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Result</button>

                    
			
                </form>

            </div>

        </div>
    </div>

    
</body>



</html>