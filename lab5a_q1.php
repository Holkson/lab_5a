<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>
 <?php  
        $name = "Holkson Lee Jun Leong"; 
        $matric_number = "AI220169";
        $course = "Web technology";
        $year_of_study = "3BIW";
        $address = "No.20, Jalan Kluang, Parit Raja, Batu Pahat, Johor";
    ?> 
 <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>  
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>