<!-- Program to display the digital clock with current time of the server -->

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        h1 {
           position:absolute;
           top:50%;
           left:50%;
           transform:translate(-50%, -50%);
           color:white;
           font-size:90px;
        }
        body {
           background-color:black;
        }
</style>  

<h1>
<?php

// y - year
// m - month
// d - day of the month eg: 1, 2
// l - day of the weak eg: sunday, monday
// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

// date_default_timezone_set("Asia/Calcutta"); to get indian timezone

// echo date('y:m:d:l');   to get current date

 echo date('h:i:sa')       
 
 ?> 
</h1>

</head>
</html>
 </html>
    
    
