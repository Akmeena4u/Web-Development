//he date is a built-in function of Php used to retrieve the current local time and date. This function returns the date in the form of a string.
//Syntax: date (format, timestamp)
//The timestamp argument is optional. It specifies an integer Unix timestamp. By default, it is the current local time. time().\
//for Different formats of date in Php go to php.net official manual




<?php
echo "Welcome to the world of dates<br>";
// $d = date("dS F Y");
$d = date("dS F Y, g:i A");
echo "Todays date is $d <br>";


// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
 
$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved <br>";

?>




















/*
d-Day of the month, 2 digits with leading zeros

01 to 31

D-A textual representation of a day, three letters  

Mon through Sun

j-Day of the month without leading zeros

1 to 31

l-A full textual representation of the day of the week               

Sunday through Saturday

s-Seconds with leading zeros         

00 through 59

S-English ordinal suffix for the day of the month, 2 characters          

st, nd, rd or th. Works well with j

H-24-hour format of an hour with leading zeros     

00 through 23

i-Minutes with leading zeros         

00 to 59

F-A full textual representation of a month, such as January or March            

January through December

m-Numeric representation of a month, with leading zeros    

01 through 12

M-A short textual representation of a month, three letters  

Jan through Dec

n-Numeric representation of a month, without leading zeros    

1 through 12

t-Number of days in the given month        

28 through 31

G-24-hour format of an hour without leading zeros

0 through 23

h-12-hour format of an hour with leading zeros     

01 through 12

y-A full numeric representation of a year, 4 digits 

Examples: 1999 or 2003

Y-A two-digit representation of a year       

Examples: 99 or 03

a-Lowercase Ante meridiem and Post meridiem    

am or pm

A-Uppercase Ante meridiem and Post meridiem    

AM or PM  */
