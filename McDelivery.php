<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>McDonald's Delivery</title>
    <link rel="icon" href="Images/Logo/McDonald's_Golden_Arches.png">

    <link rel="stylesheet" href="General.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="Banner.css">
    <link rel="stylesheet" href="Meals.css">
    <link rel="stylesheet" href="modals.css">

    <script src="locationSearchScript.js" defer></script>
    <script src="LoginSignupScript.js" defer></script>
    <script src="myBag.js" defer></script>
</head>
    <div class="header">
        <div class="left-section">
            <div class="home-icon-container">
                <img src="Images/Logo/McDonald's_Home_Icon.svg" alt="McDonald's Home Icon">
            </div>
            <p>McDelivery</p>
        </div>

        <div class="right-section">
            <button class="sign-up-button">Sign Up</button>
            <button class="login-button">Login</button>
            <button class="sample-cart">Sample Cart</button>
        </div>
    </div>
    <div class="banner-background-container">
        <div class="banner-grid-container">
            <div class="column-one">
                <div class="banner-tagline">
                    <p>It's the food you love, delivered</p>
                </div>
                <div class="location-input-container">
                    <input type="text" placeholder="Type your location" id="location-input">
                    <div class="location-input-suggestions"></div>
                    <button>
                        <img src="Images/Icons/clear-locate-input.svg" alt="Clear Icon">
                    </button>
                </div>
                <div class="ordering-branch-container">
                    <div class="ordering-branch-address-container">
                        <p><span style="color: #f8b200; margin-right: 6px; font-weight:600;">Ordering from:</span>Morning Breeze, Caloocan, Metro Manila</p>
                    </div>
                    <div class="ordering-branch-button-container">
                        <button>Change</button>
                    </div>
                </div>
            </div>
            <div class="column-two">
                <img src="Images/Backgrounds/column-two.png" alt="McDonald's Delivery">
            </div>
        </div>
    </div>

    <div class="meals-header-container">
        <div class="sulit-busog-meals-container">
            <p>Sulit Busog Meals</p>
        </div>
        <div class="sulit-family-bundles-container">
            <p>Sulit Family Bundles</p>
        </div>
        <div class="group-meals-container">
            <p>Group Meals</p>
        </div>
        <div class="chicken-container">
            <p>Chicken</p>
        </div>
        <div class="burgers-container">
            <p>Burgers</p>
        </div>
        <div class="mcspaghetti-container">
            <p>McSpaghetti</p>
        </div>
        <div class="rice-bowls-container">
            <p>Rice Bowls</p>
        </div>
        <div class="desserts-and-drinks-container">
            <p>Desserts & Drinks</p>
        </div>
        <div class="mccafe-container">
            <p>McCafe</p>
        </div>
        <div class="fries-and-extras-container">
            <p>Fries & Extras</p>
        </div>
        <div class="happy-meal-container">
            <p>Happy Meal</p>
        </div>
    </div>

    <div class="meals-body-container">
        <div class="meals-category-container">
            <div class="meals-category-title-container">
                <p>
                    Sulit Busog Meals
                </p>
            </div>
            <div class="meals-encouragement-container">
                <p>
                    Say <span style="color: #da9c00; font-size: 16px;">“YES”</span> to your craving and tap to order now!
                </p>
            </div>
            <div class="meals-grid-container">
                <div class="meal-container">
                    <div class="meal-background-container">
                        <img src="Images/Meals/Sulit Busog Meals/1-pc. Mushroom Pepper Steak & Fries Meal.jpeg"alt="1-pc Mushroom Pepper Steak and Fries Meal">
                    </div>
                    <div class="meal-description-container">
                        <p>1-pc. Mushroom Pepper Steak & Fries Meal</p>
                    </div>
                    <div class="meal-price">
                        <p>₱99.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- login signup section -->
    <div class="login-modal-container">
        <div class="login-container">
            <div class="close-icon-container">
                <img src="Images/Icons/close-icon.svg" alt="Close Icon">
            </div>
            <div class="email-background-container">
                <img src="Images/Icons/login-icon.svg" alt="Email Icon">
            </div>
            <div class="login-details-container">
                <div class="login-title">
                    <p>
                        What's your email?
                    </p>
                </div>
                <div class="login-description">
                    <p>
                        We'll check if you have an account
                    </p>
                </div>
            </div>
            <div class="login-form-container">
                <form action="" method="">
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <button type="submit" id="login-button-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="signup-modal-container">
        <div class="signup-container">
            <div class="close-icon-container">
                <img src="Images/Icons/close-icon.svg" alt="Close Icon">
            </div>
            <div class="email-background-container">
                <img src="Images/Icons/sign-up-icon.svg" alt="Email Icon">
            </div>
            <div class="signup-details-container">
                <div class="signup-title">
                    <p>
                        What's your email?
                    </p>
                </div>
                <div class="signup-description">
                    <p>
                        We'll add your account
                    </p>
                </div>
            </div>
            <div class="signup-form-container">
                <form action="" method="">
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <button type="submit" id="login-button-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
<!-- end of login signup section -->
    
<!--Start of Bag Modal-->
    <div class="mybag-modal-container">
        <div class="mybag-container">
            <div class="mybag-header">
                <div class="mybag-header-row-one">
                    <div class="mybag-header-row-one-title">
                        <p style="margin: 0px;">My Bag</p>
                    </div>
                    <div class="mybag-close-icon-container">
                        <img src="Images/Icons/close-icon.svg" alt="Close">
                    </div>
                </div>
                <div class="mybag-header-column-two">
                    <p style="margin: 0px;">Delivery time: 40min (1.7km away)</p>
                </div>
            </div>
            <div class="mybag-branch-location">
                    <p style="margin: 0px;"><span style="color: #b00021">Branch: </span>McDonald's - Mac Arthur Malabon</p>
                </div>
            <div class="mybag-items-container">
                <div class="mybag-item-container">
                    <div class="mybag-item-add">
                        <img src="Images/Icons/add-icon.svg" alt="Add Quantity">
                    </div>      
                    <div class="mybag-item-quantity">
                        <p style="margin: 0px;">22</p>
                    </div>
                    <div class="mybag-item-reduce">
                        <img src="Images/Icons/minus-icon.svg" alt="Reduce Quantity">
                    </div>
                    <div class="mybag-item-picture">
                        <img src="Images/Meals/Chicken/1-pc. Chicken McDo & Fries Meal.jpeg" alt="">
                    </div>
                    <div class="mybag-item-description-container">
                        <div class="mybag-item-title">
                            <p style="margin: 4px;">1pc chicken 1pc chicken 1pc chicken 1pc chicken 1pc chicken </p>
                        </div>
                        <div class="mybag-item-sides">
                            <p style="margin: 0px 4px;">Apple pie</p>
                            <p style="margin: 0px 4px;">Banana pie</p>
                        </div>
                    </div>
                    <div class="mybag-item-price">
                        <p style="margin: 0px;">₱2,790.00</p>
                    </div>
                </div>
                <div class="mybag-item-container">
                    <div class="mybag-item-add">
                        <img src="Images/Icons/add-icon.svg" alt="Add Quantity">
                    </div>      
                    <div class="mybag-item-quantity">
                        <p style="margin: 0px;">22</p>
                    </div>
                    <div class="mybag-item-reduce">
                        <img src="Images/Icons/minus-icon.svg" alt="Reduce Quantity">
                    </div>
                    <div class="mybag-item-picture">
                        <img src="Images/Meals/Chicken/1-pc. Chicken McDo & Fries Meal.jpeg" alt="">
                    </div>
                    <div class="mybag-item-description-container">
                        <div class="mybag-item-title">
                            <p style="margin: 4px;">1pc chicken 1pc chicken 1pc chicken 1pc chicken 1pc chicken </p>
                        </div>
                        <div class="mybag-item-sides">
                            <p style="margin: 0px 4px;">Apple pie</p>
                            <p style="margin: 0px 4px;">Banana pie</p>
                        </div>
                    </div>
                    <div class="mybag-item-price">
                        <p style="margin: 0px;">₱2,790.00</p>
                    </div>
                </div>
                <div class="mybag-item-container">
                    <div class="mybag-item-add">
                        <img src="Images/Icons/add-icon.svg" alt="Add Quantity">
                    </div>      
                    <div class="mybag-item-quantity">
                        <p style="margin: 0px;">22</p>
                    </div>
                    <div class="mybag-item-reduce">
                        <img src="Images/Icons/minus-icon.svg" alt="Reduce Quantity">
                    </div>
                    <div class="mybag-item-picture">
                        <img src="Images/Meals/Chicken/1-pc. Chicken McDo & Fries Meal.jpeg" alt="">
                    </div>
                    <div class="mybag-item-description-container">
                        <div class="mybag-item-title">
                            <p style="margin: 4px;">1pc chicken 1pc chicken 1pc chicken 1pc chicken 1pc chicken </p>
                        </div>
                        <div class="mybag-item-sides">
                            <p style="margin: 0px 4px;">Apple pie</p>
                            <p style="margin: 0px 4px;">Banana pie</p>
                        </div>
                    </div>
                    <div class="mybag-item-price">
                        <p style="margin: 0px;">₱2,790.00</p>
                    </div>
                </div>
                <div class="mybag-item-container">
                    <div class="mybag-item-add">
                        <img src="Images/Icons/add-icon.svg" alt="Add Quantity">
                    </div>      
                    <div class="mybag-item-quantity">
                        <p style="margin: 0px;">22</p>
                    </div>
                    <div class="mybag-item-reduce">
                        <img src="Images/Icons/minus-icon.svg" alt="Reduce Quantity">
                    </div>
                    <div class="mybag-item-picture">
                        <img src="Images/Meals/Chicken/1-pc. Chicken McDo & Fries Meal.jpeg" alt="">
                    </div>
                    <div class="mybag-item-description-container">
                        <div class="mybag-item-title">
                            <p style="margin: 4px;">1pc chicken 1pc chicken 1pc chicken 1pc chicken 1pc chicken </p>
                        </div>
                        <div class="mybag-item-sides">
                            <p style="margin: 0px 4px;">Apple pie</p>
                            <p style="margin: 0px 4px;">Banana pie</p>
                        </div>
                    </div>
                    <div class="mybag-item-price">
                        <p style="margin: 0px;">₱2,790.00</p>
                    </div>
                </div>
            </div>
            <div class="mybag-charges-container">
                <div class="mybag-subtotal-container">
                    <div class="mybag-subtotal-title">
                        <p style="margin: 0px;">Subtotal</p>
                    </div>
                    <div class="mybag-subtotal-ammount">
                        <p style="margin: 0px;">₱9,584.00</p>
                    </div>
                </div>
                <div class="mybag-delivery-fee-container">
                    <div class="mybag-delivery-fee-title">
                        <p style="margin: 0px;">Delivery fee</p>
                    </div>
                    <div class="mybag-delivery-fee-ammount">
                        <p style="margin: 0px;">₱49.00</p>
                    </div>
                </div>
                <div class="mybag-total-container">
                    <div class="mybag-total-title">
                        <p style="margin: 0px;"><strong>Total</strong></p>
                    </div>
                    <div class="mybag-total-ammount">
                        <p style="margin: 0px;">₱5,981.98</p>
                    </div>
                </div>
                <div class="mybag-checkout-button">
                    <p style="margin: 0px; margin-top: 4px;">Proceed to Checkout</p>
                </div>
            </div>
        </div>
    </div>
<!--End of Bag Modal-->
</body>
</html>