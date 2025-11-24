<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
	    <title>Home | COMP1002 The HTML Pizza Company</title>
	    <meta name="author" content="Charlie Sirois-Morin"/>
	    <meta name="description" content="COMP1002 Assignment 1 - The HTML Pizza Company">
	    <link rel="shortcut icon" href="assignment-1/images/pizzaicon.png" type="image/x-icon" cite="https://freesvg.org/lunik-pizza-slice-trozo-de-pizza"/>
	    <link rel="stylesheet" href="assignment-1/css/styles.css"/>
    </head>
    <!-- Page-level body content -->
    <body>
        <header>
			<h1 style="color:#b43535"><img src="assignment-1/images/pizzaicon.png" alt="HTML Pizza Company Logo" height="75" width="75" cite="https://freesvg.org/lunik-pizza-slice-trozo-de-pizza" />Welcome to the HTML Pizza Company</h1>
			<h3 style="color:#afaf3b">The perfect place to order a pizza just the way you like it!</h3>
        </header>
        <!-- Page-level main content -->
        <main>
            <h1 style="color:#b43535"> Build Your Pizza</h1>
            <p><em style="color:#afaf3b">Please fill out the form below to create your pizza order:</em></p>
        <!-- Pizza Customization & Ordering Form -->
            <form action="assignment-1/orderconfirmation.php" method="post">
                <fieldset>
                    <!-- Pizza Order Details -->
                    <legend><h3>Pizza Order</h3></legend>

                    <!-- Contact Information -->
                    <strong style="color:#b43535">Contact Information</strong>

                    <br>
                    <!-- Name, Email, Phone Number inputs -->
                    <label for="name" style="color:#afaf3b"><strong>Full Name:</strong></label>
                    <input type="text" name="name" id="name" required>
                
                    <br>

                    <label for="emailAddress" style="color:#afaf3b"><strong>Email:</strong></label>
                    <input type="email" name="emailAddress" id="emailAddress" required>
                    <br>

                    <label for="phoneNumber" style="color:#afaf3b"><strong>Phone Number:</strong></label>
                    <input type="tel" name="phoneNumber" id="phoneNumber" required>
                
                    <br>
                    <br>
                    <!-- Pizza Details -->
                    <strong style="color:#b43535">Pizza Details</strong>
                    <br>
                    <label for="quantity" style="color:#afaf3b"><strong>Number of Pizzas:</strong></label>
                    <input type="number" name="quantity" id="quantity" min="1" max="10" value="1" required>

                    <br>
                    <!-- Drop-down list for pizza size -->
                    <label for="size" style="color:#afaf3b"><strong>Size:</strong></label>
                    <select name="size" id="size">
                        <optgroup label="Size">
                            <option value="small">Small (6 Slices)</option>
                            <option value="medium">Medium (8 Slices)</option>
                            <option value="large">Large (10 Slices)</option>
                            <option value="extraLarge">Extra-Large (12 Slices)</option>
                        </optgroup>
                    </select>

                    <br>
                    <!-- Pizza shape options -->
                    <label for="shape" style="color: #afaf3b;"><strong>Shape:</strong></label>
                    <input type="radio" name="shape" id="round" value="round" required>
                    <label for="round">Round</label>
                    <input type="radio" name="shape" id="square" value="square">
                    <label for="square">Square</label>

                    <br>
                    <!-- Pizza crust options -->
                    <label for="crustType" style="color: #afaf3b;"><strong>Crust Type:</strong></label>
                    <input type="radio" name="crust" id="original" value="original" required>
                    <label for="original">Original Crust</label>
                    <input type="radio" name="crust" id="thin" value="thin">
                    <label for="thin">Thin Crust</label>
                    <input type="radio" name="crust" id="stuffedCrust" value="stuffedCrust">
                    <label for="stuffedCrust">Stuffed Crust</label>
                    <input type="radio" name="crust" id="glutenFree" value="glutenFree">
                    <label for="glutenFree">Gluten-Free Crust</label>

                    <br>
                    <br>
                    <!-- Pizza toppings options, seperated into meats, veggies, and others -->
                    <label style="color:#b43535"><strong>Toppings (Select all you would like):</strong></label>
                    <br>
                    <!-- Meat toppings options -->
                    <strong style="color:#afaf3b">Meats:</strong>
                    <br>
                    <input type="checkbox" name="toppings[]" id="pepperoni" value="pepperoni">
                    <label for="pepperoni">Pepperoni</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="sausage" value="sausage">
                    <label for="sausage">Sausage</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="chicken" value="chicken">
                    <label for="chicken">Chicken</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="ham" value="ham">
                    <label for="ham">Ham</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="beefCrumble" value="beefCrumble">
                    <label for="beefCrumble">Beef Crumble</label>
                    <br>
                    <!-- Veggie toppings options -->
                    <strong style="color:#afaf3b">Veggies:</strong>
                    <br>
                    <input type="checkbox" name="toppings[]" id="onion" value="onion">
                    <label for="onion">Onion</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="mushroom" value="mushroom">
                    <label for="mushroom">Mushroom</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="olives" value="olives">
                    <label for="olives">Olives</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="greenPepper" value="greenPepper">
                    <label for="greenPepper">Green Pepper</label>
                    <br>
                    <!-- Additional toppings options -->
                    <strong style="color:#afaf3b">Other:</strong>
                    <br>
                    <input type="checkbox" name="toppings[]" id="extraCheese" value="extraCheese">
                    <label for="extraCheese">Extra Cheese</label>
                    <br>
                    <input type="checkbox" name="toppings[]" id="extraSauce" value="extraSauce">
                    <label for="extraSauce">Extra Sauce</label>
                    <br>
                    <!-- Special instructions -->
                    <label for="specialInstructions" style="color:#afaf3b"><strong>Special Instructions:</strong></label>
                    <br>
                    <textarea type="text" name="specialInstructions" id="specialInstructions" rows="4" cols="50"></textarea>
                    <br>
                    <!-- Order type options -->
                    <label for="orderType" style="color:#afaf3b"><strong>Order Type:</strong></label>
                    <select>
                        <optgroup label="Dining Options">
                            <option value="carryout">Carryout</option>
                            <option value="delivery">Delivery</option>
                        </optgroup>
                    </select>
                    <br>
                    <!-- Form buttons -->
                    <input type="submit" value="Place Order">
                    <input type="reset" value="Reset">
                </fieldset>
        </main>
        <!-- Page-level main content -->
        <footer>
		    <p><small style="color:#b43535">© HTML Pizza Company Inc.</small></p>
	    </footer>
    </body>
</html>