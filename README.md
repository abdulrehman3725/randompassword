# Random Password Generator

This PHP script generates random passwords of specified length. It can be useful for developers or users who need to create secure passwords for various purposes.

## How to Use

1. **Download or Clone the Repository**: You can download the repository as a ZIP file or clone it using Git.

    ```bash
    git clone https://github.com/yourusername/your-repository.git
    ```

2. **Include the Script**: Include the `generate_password.php` file in your PHP project.

    ```php
    include 'generate_password.php';
    ```

3. **Generate a Password**: Call the `generateRandomPassword()` function to generate a random password.

    ```php
    $password = generateRandomPassword();
    echo "Random Password: $password";
    ```

    You can also specify the length of the password by passing an integer argument to the function.

    ```php
    $password = generateRandomPassword(16); // Generates a 16-character password
    ```

## Customization

You can customize the characters used to generate the password by modifying the `$chars` variable in the script. By default, it includes lowercase and uppercase letters, numbers, and common special characters.

```php
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
