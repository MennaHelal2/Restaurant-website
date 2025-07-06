# Grill Restaurant Website

A modern and responsive website for a restaurant, featuring user authentication, table reservations, and contact forms.

## Features

- User authentication (login/signup)
- Table reservations
- Contact form
- About page
- Responsive design
- Modern UI with Bootstrap 5
- Font Awesome icons
- Google Maps integration

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- XAMPP/WAMP/MAMP (for local development)

## Installation

1. Clone or download this repository to your web server's root directory (e.g., `htdocs` for XAMPP)

2. Create a new MySQL database named `grill_restaurant`

3. Import the database schema:
   - Open phpMyAdmin
   - Select the `grill_restaurant` database
   - Go to the "Import" tab
   - Choose the `database.sql` file
   - Click "Go" to import the tables

4. Configure the database connection:
   - Open `config/database.php`
   - Update the database credentials if needed:
     ```php
     $host = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'grill_restaurant';
     ```

5. Create an `images` directory in the root folder and add the following images:
   - hero-bg.jpg (for the homepage hero section)
   - restaurant.jpg (for the about page)
   - chef1.jpg, chef2.jpg, chef3.jpg (for the team section)
   - grill1.jpg, grill2.jpg, grill3.jpg (for the featured dishes)

6. Access the website through your web browser:
   - If using XAMPP: `http://localhost/Restaurant`
   - If using WAMP: `http://localhost/Restaurant`
   - If using MAMP: `http://localhost:8888/Restaurant`

## Directory Structure

```
Restaurant/
├── config/
│   └── database.php
├── css/
│   └── style.css
├── images/
│   ├── hero-bg.jpg
│   ├── restaurant.jpg
│   ├── chef1.jpg
│   ├── chef2.jpg
│   ├── chef3.jpg
│   ├── grill1.jpg
│   ├── grill2.jpg
│   └── grill3.jpg
├── index.php
├── about.php
├── contact.php
├── login.php
├── signup.php
├── reservation.php
├── database.sql
└── README.md
```

## Features in Detail

### User Authentication
- Secure login and signup system
- Password hashing for security
- Session management

### Reservation System
- Date and time selection
- Guest count selection
- Special requests
- Confirmation system

### Contact Form
- Name, email, and message fields
- Google Maps integration
- Contact information display

### Responsive Design
- Mobile-friendly layout
- Bootstrap 5 framework
- Custom CSS styling

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details. 
