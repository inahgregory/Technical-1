# Basic POS System

This is a CodeIgniter 4 laboratory activity with four pages:

- `/` - Landing page
- `/about` - About page
- `/customers` - Customer Accounts page
- `/users` - User Accounts page

The Customer Accounts and User Accounts pages use static PHP arrays in their controllers as the temporary data source. No database connection is used yet.

## Local Run Command

This XAMPP PHP install has the `intl` extension available but not enabled globally. Run the app with:

```bash
php -d extension=D:\xampp\php\ext\php_intl.dll -S 127.0.0.1:8081 -t public vendor\codeigniter4\framework\system\rewrite.php
```

Then open:

```text
http://127.0.0.1:8081/
```

## Files Added for the Lab

- `app/Controllers/Pages.php`
- `app/Controllers/Customers.php`
- `app/Controllers/Users.php`
- `app/Views/pages/home.php`
- `app/Views/pages/about.php`
- `app/Views/customers/index.php`
- `app/Views/users/index.php`
- `app/Views/templates/header.php`
- `app/Views/templates/footer.php`
- `database_export.sql`
