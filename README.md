# Project Title
Avenue Lock & Safe Website

# Description
This project is the official website for Avenue Lock & Safe, a locksmith and security company based in Ottawa, Canada. The website provides information about the company, its services, and allows users to request quotes and contact the company. It has been serving the Ottawa area since 1969.

# Features
- Responsive design for optimal viewing on all devices.
- Detailed information about services offered:
    - Locksmith Division (master keying, deadbolts, etc.)
    - Electronics Division (burglar alarms, CCTV, card access)
    - Detection & Monitoring (carbon monoxide, gas, fire, flood, temperature sensors with 24/7 monitoring)
- Gallery section showcasing the company's work and store.
- Contact form for inquiries.
- Request a free quote form.
- Information about the company's history and expertise.

# Technologies Used
- **Frontend:**
    - HTML5
    - CSS3
    - JavaScript
    - Bootstrap (version 5)
    - jQuery
    - Animate.css
    - Owl Carousel
    - Lightbox
    - Font Awesome
    - Google Fonts
- **Backend:**
    - PHP (for form submissions)
- **Development:**
    - Composer (for PHP package management)
    - PHPMailer (for sending emails via PHP)

# Setup and Installation
1.  **Clone the repository:**
    ```bash
    git clone <repository_url>
    ```
2.  **Navigate to the project directory:**
    ```bash
    cd <project_directory>
    ```
3.  **Install PHP dependencies using Composer:**
    ```bash
    composer install
    ```
4.  **Web Server Configuration:**
    - Ensure you have a web server (like Apache or Nginx) set up with PHP support.
    - Point your web server's document root to the project directory.
    - The contact and quote forms (`send_contact.php` and `send_quote.php`) require a configured PHP environment to send emails. You might need to configure SMTP settings within these files or your PHP environment (e.g., `php.ini`) for email functionality to work correctly. Specifically, PHPMailer is used and may require SMTP authentication details.

# Usage
- Open the website in your web browser by navigating to the project's URL (e.g., `http://localhost/` if running locally).
- Browse through the different pages (Home, About, Services, Gallery, Contact) to learn about the company and its offerings.
- Use the "Request a Free Quote" form on the homepage or the "Contact Us" form on the contact page for inquiries.

# Contributing
Contributions are welcome! If you'd like to contribute to the project, please follow these steps:
1.  Fork the repository.
2.  Create a new branch (`git checkout -b feature/your-feature-name`).
3.  Make your changes and commit them (`git commit -m 'Add some feature'`).
4.  Push to the branch (`git push origin feature/your-feature-name`).
5.  Open a Pull Request.

Please ensure your code adheres to the existing coding style and includes relevant tests if applicable.

# License
This project is licensed under the MIT License. See the `LICENSE` file for details. (Note: A LICENSE file will need to be created if one doesn't exist).
