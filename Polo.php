<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="Polo.js"></script>
  </head>
<body>

<?php 
$connection = mysqli_connect("localhost","root","");
        mysqli_select_db($connection,"polo");
        $result = mysqli_query($connection,"SELECT * FROM customer_info  WHERE Info_No = '1'");

        $rs = mysqli_fetch_array($result);
        $Smoker = $rs['Smoker'];
        $Location = $rs['Travel_Outside_Europe/US'];
        $Age = $rs['Age'];
       
        mysqli_close($connection);
?>

<h1>Quote</h1>
<hr>

Smoker: <div id="Smoker"> <?php echo $Smoker; ?> </div>
Location: <div id="Location"> <?php echo $Location; ?> </div>
Age: <div id="Age"> <?php echo $Age; ?> </div>

<hr>
<h2 id = "total"></h2>

</body>
</html>

