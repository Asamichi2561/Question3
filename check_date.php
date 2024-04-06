<!DOCTYPE html>
<html>
<body>

<form action = "check_date.php" method="post">
    <p>Enter Start Date:</p>
    <input type="text" name="startdate" placeholder="YYYY-MM-DD">
    <br>
    <p>Enter End Date:</p>
    <input type="text" name="enddate" placeholder="YYYY-MM-DD">
    <br>
    <input type="submit" name="submitbtn" class="button" value="Submit" />
</form>
<br><br>

<?php
$startDate = "";
$endDate = "";
if (isset($_POST['startdate']) && isset($_POST['enddate'])) {
    $startDate = $_POST['startdate'];
    $endDate = $_POST['enddate'];
    function checkDateDays($startDate, $endDate) {
        //Change the format of date
        $sd = new DateTime($startDate);
        $ed = new DateTime($endDate);

        //Calculate the days between 2 date
        $interval = $sd->diff($ed);
        $days = $interval->days;
        //Check the day is even or odd
        $parity = ($days %2 == 0) ? "even" : "odd";
        //Display the result
        echo "<br>" , "Days between " , $startDate , " and " , $endDate , " is " , $days , " days. <br>";
        echo "The day is " , $parity , ".<br>"; 
    }

    checkDateDays($startDate, $endDate);
}
?>

</body>
</html>