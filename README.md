# Gmail Phishin Page

This project is a simple HTML/CSS/JavaScript clone of the Gmail sign-in page, along with a PHP script for handling form submissions. It provides a basic interface for users to input their email and password and sign in or create an account.

## How to Use

1. Clone the repository to your local machine:

```bash
git clone https://github.com/your-username/gmail-clone.git
```
2. Navigate to the project directory:
```bash
cd gmail-clone
```
3. Open the **index.html** file in your web browser to view the Gmail sign-in page clone.
4. To test the form submission functionality, you'll need a local web server with PHP support (e.g., XAMPP, WAMP, MAMP). Configure the server to point to the project directory.
5. Import the **gmaildb.sql** file into your database to create the necessary table.
6. Modify the **post.php** file with your database credentials:
```php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database_name = "gmaildb";
```
7. Start your local server and access the project through the server's URL.
## Dependencies
* Font Awesome - for icons
* Roboto Font - for typography

```vbnet
You may need to adjust some parts according to your actual setup, such as database credentials and file paths. Feel free to customize it further to suit your nees!
```
## License
This project is licensed under the MIT License - see the LICENSE file for details.

