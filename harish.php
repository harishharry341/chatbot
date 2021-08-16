<!DOCTYPE html>
<html>

<head>
    <title>Table with database</title>
    <style type="text/css">
        table {

            margin: 0 auto;

            font-size: large;

            border: 1px solid black;

        }



        h1 {

            text-align: center;

            color: #006600;

            font-size: xx-large;

            font-family: 'Gill Sans', 'Gill Sans MT',

                ' Calibri', 'Trebuchet MS', 'sans-serif';

        }

        td {

            background-color: #E4F5D4;

            border: 1px solid black;

        }



        th,

        td {

            font-weight: bold;

            border: 1px solid black;

            padding: 10px;

            text-align: center;

        }



        td {

            font-weight: lighter;

         }

            {
            border-collapse: collapse;
            width: 85%;
            color: #d96459;
            font-family: monospace;
            font-size: 16px;
            text-align: left;
            }

        th {
            background-color: #588c7e;
            color: white
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>


        <link href="cl.css">
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "sc");
        if ($conn->connect_error) {
            die("connection failed:" . $conn->connect_error);
        }
        $sql = "SELECT name, gender, email, phone, address from rd";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["email"] .
                    "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }
        $conn->close();
        ?>
    </table>
    
</body>
<div class="cl">
  <a href="index.html" style="position: fixed;">home</a>
</div>
</html>