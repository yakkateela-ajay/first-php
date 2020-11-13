<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Document</title>


    <link rel="stylesheet" type="text/css" media="screen" href="jquery-ui.css" />
    <script src="jquery.js"></script>
    <script src="jquery-ui.js"></script>
    <script type = "text/javascript">
        $(document).ready(function () {
            var age = "";
            $('#dob').datepicker({
                onSelect: function (value, ui) {
                    var today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                },
                changeMonth: true,
                changeYear: true
            })
        })
    </script>

</head>
<body>

    <?php require_once 'process.php';?>

    <?php 

    $mysqli = new mysqli('localhost', 'root', '', 'elite') or die(mqsqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM details") or die($mysqli->error);
   // pre_r($result);
    //pre_r($result->fetch_assoc());

    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }


    ?>

    <div class="container mt-5 col-7">
        <form action="process.php" method="POST" >
            <div class="row">
                <div class="form-group col-md-6">
                    <label >Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label >Phone No</label>
                    <input type="text" name="phone" class="form-control"  placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" name="email" class="form-control"  placeholder="Email">
             </div>
             <div class="row">
                <div class="form-group col-md-6">
                    <label >Date Of Birth</label>
                    <input type="text" class="form-control" name="dob"  id = "dob"  placeholder="Date Of Birth">
                </div>
                <div class="form-group col-md-6">
                    <label >Age</label>
                    <input type="text" class="form-control" name="age" id = "age" readonly  placeholder="Age">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="save">Submit</button>      
          </form>
    </div>

</body>
</html>
