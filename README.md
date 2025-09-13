# -Website---Product-Discount-Calculator


Product Discount Calculator
A simple PHP web app that calculates a product’s discount amount and discounted price from a given list price and discount percent.
Built using PHP, HTML, and CSS.

# Features:

- User-friendly form for inputting:
  Product Description
  List Price
  Discount Percent

- PHP backend calculates:
  Discount Amount
  Final Price after discount
  
Clean CSS styling for layout and readability
Works locally on XAMPP/MAMP/WAMP

# Requirements:

PHP-enabled server (e.g., XAMPP, MAMP, WAMP)
PHP 7.4+ recommended
A web browser

# Setup Instructions

Step 1 – Install XAMPP (or equivalent)
Download from apachefriends.org
Start Apache server from XAMPP Control Panel

Step 2 – Place Project Files
Copy this project folder into the server root directory:
Windows (XAMPP):
C:\xampp\htdocs\discount-calculator
macOS/Linux (XAMPP):
/Applications/XAMPP/htdocs/discount-calculator

Step 3 – Run the Project
Open your browser and visit:
http://localhost/discount-calculator/
index.html → main input form 
daeaa303-81da-41f2-8921-d5411f0…
Form submits to display_discount.php which handles calculations
Results page shows product description, list price, discount amount, and final price

# Project Structure
discount-calculator/
├─ index.html              # Main page: product discount form :contentReference[oaicite:1]{index=1}
├─ display_discount.php    # PHP script: processes input & shows results
├─ main.css                # Stylesheet: form layout and styling :contentReference[oaicite:2]{index=2}
└─ README.md               # Documentation

How It Works

User enters product description, list price, and discount percent.
index.html sends the form data via POST to display_discount.php.
PHP script calculates:
$discount_amount = $list_price * ($discount_percent / 100);
$discount_price  = $list_price - $discount_amount;
Results are displayed neatly on the page.

# Troubleshooting

PHP code shows as plain text → Make sure to use http://localhost/... instead of opening the file directly.
404 error → Ensure the folder is inside htdocs and the URL path matches the folder name.
Blank results → Verify your PHP syntax and enable error reporting:
error_reporting(E_ALL);
ini_set('display_errors', 1);

# License
This project is licensed under the MIT License.
You’re free to use, modify, and distribute with proper attribution.
