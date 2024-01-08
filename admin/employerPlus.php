<?php
  include('connection/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body {
      font-family: 'Helvetica Neue', sans-serif;
      font-size: 18px;
      line-height: 1.6;
      color: #333;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
    }

    * {
      box-sizing: border-box;
    }

    .h2 {
      display: flex;
      align-items: center;
      text-align: center;
      color: #333;
      padding: 20px;
      background-color: #04AA6D;
      margin: 0;
    }

    #back{
      margin-left:10px;
      color:black;
      text-decoration: none;
    }

    h2 {
      margin-left: auto;
      margin-right: auto;
    }


    .row {
      display: flex;
      justify-content: center;
    }

    .col-75 {
      flex: 1;
      max-width: 800px;
      background-color: #fff;
      border: 1px solid lightgrey;
      border-radius: 5px;
      padding: 30px; /* Increased padding for a more luxurious feel */
      margin: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Enhanced box shadow */
    }

    .container {
      padding: 0;
    }

    input[type=text],[type=number] {
      width: calc(100% - 24px); /* Adjusted width and added padding for space between fields */
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px; /* Rounded corners for a more refined look */
    }

    label {
      margin-bottom: 15px; /* Increased margin for a more spacious appearance */
      display: block;
      font-weight: bold; /* Added bold font for emphasis */
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 15px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other */
    @media (max-width: 800px) {
      .row {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

<div class="row h2">
  <a style="cursor:pointer;" onclick="goBack()" id="back">Back</a>
  <h2>CHECKOUT</h2>
</div>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="./employerPlus.php" method="post">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Kandy" required>
            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Central" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="number" id="zip" name="zip" placeholder="20000" required>
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
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="number" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="number" id="expyear" name="expyear" placeholder="2028" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Pay Now" class="btn" name="submit">
      </form>
    </div>
  </div>
</div>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['firstname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $card_name = $_POST['cardname'];
  $card_number = $_POST['cardnumber'];
  $exp_month = $_POST['expmonth'];
  $exp_year = $_POST['expyear'];
  $cvv = $_POST['cvv'];

  $query = "INSERT INTO plus_card_details(name, email, address, city, state, zip, card_name, card_num, exp_month, exp_year, cvv) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip', '$card_name', '$card_number', '$exp_month', '$exp_year', '$cvv')";

  if(mysqli_query($conn, $query)){
    // echo "<script>alert('Payment Successful! \\n We will get back to you soon')</script>";
    echo "<script>window.location.href = 'empPlusAfterPayment.php';</script>";
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
