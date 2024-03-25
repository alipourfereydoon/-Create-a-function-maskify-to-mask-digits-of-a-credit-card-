<!-- Create a function maskify to mask digits of a credit card number with #.

Requirements:

    Do not mask the first digit and the last four digits
    Do not mask non-digit chars
    Do not mask if the input is less than 6
    Return '' when input is empty

Examples:

    1234-5678-9012 converts to 1###-####-9012
    123456789012 converts to 1#######9012

 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
  <div class="main">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="index.php" method="post" >

        <div class="row">
          <div class="col-50">
            <h3>Password and name encryption program</h3>
            <label for="fname"><i class="fa fa-user"></i> please enter your name :</label>
            <input type="text" id="fname" name="firstname" placeholder="for example ali pourferydoon">
            <label for="email"><i class="fa fa-envelope"></i> please enter your email :</label>
            <input type="text" id="email" name="email" placeholder="ali.pourferydoon1983@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> please enter your address:</label>
            <input type="text" id="adr" name="address" placeholder="iran">
            <label for="city"><i class="fa fa-institution"></i> please inter your city :</label>
            <input type="text" id="city" name="city" placeholder="shiraz">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">please enter your zip code</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="ali pourfereydoon">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder=" for example 1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder=" for example September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" value="Continue to checkout" class="btn" name="submit1" >
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4> you can see the result of encryption of cart number :</h4>
<input type="textbox" style="width: 650px; height:200px;" class="result row" name="result" placeholder="you can see the result of encription:" value=" 
<?php 
if (isset($_POST['submit1'])) {
  $cartnum=$_POST['cardnumber'];
  $length = strlen($cartnum);
  if ($length < 6) {
    echo "your number is less than 6 digit and you must input a number grather than 6 digit";
}
elseif ($length==null) {
  echo "null ";
}
else{
  $cartnum1 = substr($cartnum, 0, 1) . str_repeat('#', $length - 5) . substr($cartnum, -4);
  echo  $cartnum1;
}

} 


?> " >
    </div>
  </div>
</div> 
</div>
</body>
</html>