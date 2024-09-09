<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    
    
    <style type='text/css'>


		
		#f1
		{
			float:left;
			padding: 12px; 
			margin: 2px;
                	width:45%;
			border: 1px solid black;
                	height:566px;
		}
		#f2
		{	
			float:right;
			padding: 12px;
			margin: 2px;
                	width:50%;
                	height:236px;
			border: 1px solid black;
		}
		#f3
		{	
			float:right;
			padding: 12px;
			margin: 2px;
                	width:50%;
                	height:300px;
			border: 1px solid black;
		}	
		#notes
		{
			height:100px;
		}
		#b1
		{
  		background-color: #008CBA; 
  		border: none;
  		color: white;
  		padding: 15px 32px;
  		text-align: right;
  		text-decoration: none;
  		display: inline-block;
  		font-size: 16px;
		border-radius: 20px;
		}




		input[type=email],input[type=password],input[type=text]{

		width: 80%;
		height: 30px;
		box-sizing: border-box;
		margin: 10px;
		display: inline-block;
		outline: none;
		padding: 10px 20px;
		border: 1px solid #ccc;
		border-radius: 4px;
		}
	
		input[type=submit]{
 		 width: 30%;
  		background-color: #00a6e7;
  		color: white;
  		padding: 14px 20px;
 	 	margin: 8px 0;
  		border: none;
  		border-radius: 4px;
  		cursor: pointer;
		}


		input[type=submit]:hover{
		background-color: #EE2A34;
		}
	</style>
</head>

<body>
    <header>
        <div class="main_header_wrapper">
            <div class="center_wrapper">
                <div class="left_wrapper">
                    <div class="main_logo">
                        <a href="">
                            <img src="img/logo 2.png" width="400" alt="">
                        </a>
                    </div>
                    <div class="tagline">
                        Laura Fashion
                    </div>
                </div>
                <div class="rigth_wrapper">
                    <div class="search_form">
                        <form action="" method="post">
                            <div class="wrapper_input">
                                <div class="icon"><img src="img/loupe.png"></div>
                                <input type="text" placeholder="Quick search...">
                            </div>
                        </form>
                    </div>
                    <div class="user_cart">
                        <div class="icn">
                            <a href="#"><img src="img/shopping-cart .png"></a>
                            <a href="#"><img src="img/user.png"></a>
                        </div>

                        <div class="button">
                            <ul>
                                <li><a href="">Sign in</a></li>
                                <li><a href="">Sign up</a></li>
                            </ul>
                            <!--<form action="" method="">
                                <button type="submit">sign in</button>
                                <button type="submit">sign up</button>
                            </form>-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="nav_bar">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Men</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">Kids</a></li>
                    <li><a href="">Accessories</a></li>
                    <li><a href="">New Arrivals</a></li>
                </ul>
            </div>
            <!--<center>
                <div class="bar">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                    <a href="">Men</a>
                    <a href="">Women</a>
                    <a href="">Kids</a>
                    <a href="">Accessories</a>
                    <a href="">New Arrivals</a>
                </div>
            </center>-->
        </div>
    </header>

    
<form method ="POST" action="addbillingdetails_.php">


    <div id="f1">
    
        <h3> Billing Details <h3> <br> 
        <input type="text" name="fname" placeholder="First Name" size="40">
        <input type="text" name="lname" placeholder="Last Name" size="40"> 
        <input type="text" name="street" placeholder="Street Address" size="82">
        <input type="text" name="Apt" placeholder="Apartment, suite, unit, etc.(optional)" size="82"> 
        <input type="text" name="district" placeholder="District" size="82">
        <input type="text" name="phone" placeholder="Telephone Number" maxlength="10" size="40"> 
        <input type="text" name="email" placeholder="E-mail" size="40"> 
        <input type="text" name="notes" placeholder="Order Notes (Optional)" size="82">
        <button>Submit</button>
    
    </div>
    
    
    </form>
    
    <div id="f2">
        <h3>   Your Order </h3> <br>
        <table style="width:100%">
            <tr> 	<th style="width:60%"> Product </td>
                <th style="width:40%"> Total </td>
            </tr>
            <tr> 	<td style="width:60%"> Ladies Side Bag x 1 </td>
                <td style="width:40%"> Rs.4999.99 </td>
            </tr>
            <tr> 	<td style="width:60%"> Shipping cost </td>
                <td style="width:40%"> Rs.100 </td>
            </tr>
            <tr> 	<td style="width:60%"> <b> Sub Total  </b> </td>
                <td style="width:40%"> <b> Rs.5099.99 </b> </td>
            </tr>
        </table>
            
    </div>
    
    <div id="f3">
        <h3>   Your Order </h3> <br>
        <img src="C:/Users/Oshan Wanasekara/Desktop/IWT Project orginal/SRC/img/pay.png"
        align="right"
        width="300" 
             height="120">
        <input type="radio" id="COD" name="delivery" value="Cash on Delivery">
      	<lable>Cash on Delivery</lable><br>
        <input type="radio" id="frimi" name="delivery" value="Frimi">
      	<lable>Frimi</lable><br>
        <input type="radio" id="card" name="delivery" value="CreditCard">
      	<lable>Credit Card </lable><br><br>
        
        <center>
    
            <input type="submit" name="submit"  value="Checkout">
        <!-- <button type="button" id="b1">
        <img src="src/img/shopping-cart .png" height ="20" width="20" align="left"/>
        PLACE THE ORDER
        </button> -->
        </center>
        
    </div>



</body>

</html>