

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
        
echo 'Hello World <br>';
echo "9*9<br>";
echo '8+9<br>';

 $name= 'Abid';
 $food = 'Cake';
echo "Hello {$name}<br>";
echo "Do you wanna have {$food}?<br>";


$age=25;
$user =3;
$quantity=4;


$gpa=2.5;
$price=4.99;
$tax_rate= 5.1;

$eat= true;
$online= false;
$for_sale=true;

echo"You are only {$age} years old<br>";
echo "There are {$user} online<br>";
echo"You want to buy {$quantity} items<br>";
echo"Your GPA is: {$gpa}<br> ";

echo"Your cake is \${$price}<br>";
echo"Your tax rate is: {$tax_rate}%<br>";

echo"You have eaten: {$eat}<br>";
echo"You are online: {$online}<br>";
echo"For Sale: {$for_sale}<br>";




 ?>
 
 <br>
<button>Order Cake</button>
</body>
</html>