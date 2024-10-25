# BloodBank Plus

BloodBank Plus is a web application built to streamline blood donation processes and facilitate communication between donors, administrators, and patients. It is developed using the CodeIgniter framework following the MVC (Model-View-Controller) architecture, with Bootstrap for responsive design, JavaScript for interactivity, and MySQL for database management. The application is designed to run on a WAMP (Windows, Apache, MySQL, PHP) server environment.

## General Info

This project is aimed at enhancing the blood donation process by providing a platform for efficient communication and coordination among donors, administrators, and patients. The application offers various features tailored to each user role, including donor registration, donation tracking, news updates.

## Key Features

- **User Roles**: Donor, Admin, and Patient roles allow for tailored experiences and functionalities.
- **News & Updates**: Dedicated section for publishing news, articles, and announcements related to blood donation campaigns and health tips.
- **Interactive Interface**: Responsive design ensures accessibility across various devices.
- **Real-time Communication**: Messaging functionalities enable quick responses and coordination between users.
- **Database Management**: MySQL database ensures robust data storage and retrieval, with secure encryption and authentication mechanisms.

## Technologies

A list of technologies used within the project:

- ![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.1.11-blue)
- ![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6.0-blueviolet)
- ![MySQL](https://img.shields.io/badge/MySQL-8.0.23-blue)
- ![PHPMyAdmin](https://img.shields.io/badge/PHPMyAdmin-5.1.0-green)
- ![WampServer](https://img.shields.io/badge/WampServer-3.2.5-orange)

## Installation

To set up the BloodBank Plus application on your local environment, follow these steps:

1. **Install WampServer**:
   - Download and install WampServer from the [official website](https://www.wampserver.com/en/).
   - Follow the installation instructions provided on the website.

2. **Install PHPMyAdmin**:
   - PHPMyAdmin comes pre-installed with WampServer. Ensure that it is accessible by navigating to `http://localhost/phpmyadmin` in your web browser.

3. **Database Configuration**:
   - Create a new MySQL database for the application.
   - Import the provided SQL dump file (`bloodbank.sql`) to set up the database schema.

4. **CodeIgniter Configuration**:
   - Clone or download the repository to your local machine.
   - Configure database settings in `application/config/database.php`.
   - Set the base URL in `application/config/config.php`.

5. **Virtual Host Configuration**:
   - Configure a virtual host (vhost) in the WampServer to point to the application directory.

6. **Run the Application**:
   - Access the application through the configured virtual host in your web browser.


## Collaboration

We welcome contributions from the community to enhance the features and functionality of BloodBank Plus. If you're interested in collaborating, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and commit them with descriptive commit messages.
4. Push your changes to your fork.
5. Submit a pull request, explaining the changes you've made and their rationale.

> "Alone, we can do so little; together, we can do so much." - Helen Keller

## FAQs

### How do I register as a donor?

To register as a donor, navigate to the registration page and provide the required information, including your name, contact details, and blood type.

### Can I request blood donations for specific patients?

Donors have the ability to submit requests for blood donations. However, these requests are subject to approval by the administrator. The administrator will review each request and decide whether to accept, deny, or put it on hold. This process ensures that donation requests are managed effectively and in accordance with the needs and resources of the blood bank.

### Is there a mobile app available for BloodBank Plus?

Currently, there is no mobile app available for BloodBank Plus.
