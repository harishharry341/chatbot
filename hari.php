
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
    <link href="cl.css" rel="stylesheet">
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "sc");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        @$Name =  $_REQUEST['Name'];
        @$Gender = $_REQUEST['Gender'];
        @$Email = $_REQUEST['Email'];
        @$Phone = $_REQUEST['Phone'];
        @$Address = $_REQUEST['Address'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO rd VALUES ('$Name', '$Gender',
            '$Email','$Phone', '$Address')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Registration Sucessfully Completed...<br>
            ALERT: Data stored in database.</br></h3>";
 
            echo nl2br("\n$Name \n$Gender\n "
                . "$Email\n $Phone\n $Address");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <div class="cl">
    <a href="index.html" >ok</a>
    </div>
     
</body>
 
</html>