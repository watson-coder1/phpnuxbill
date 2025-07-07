# Glinta Hotspot Billing System

A comprehensive hotspot billing and management system based on [PHPNuxBill](https://github.com/hotspotbilling/phpnuxbill/).

## About

Glinta Hotspot Billing System is a powerful solution for managing internet hotspot businesses, built upon the excellent PHPNuxBill foundation. This system provides comprehensive tools for:

- **Customer Management**: User registration, profiles, and account management
- **Billing & Payments**: Automated billing, payment gateway integration
- **Voucher System**: Generate and manage prepaid vouchers
- **Router Integration**: Mikrotik router management and automation
- **Reporting**: Comprehensive business analytics and reports
- **Multi-Language Support**: Localization for different regions

## Features

✅ **Voucher Generator and Print**  
✅ **Freeradius Integration**  
✅ **Self Registration**  
✅ **User Balance Management**  
✅ **Auto Renewal Packages**  
✅ **Multi Router Mikrotik Support**  
✅ **Hotspot & PPPOE Management**  
✅ **Easy Installation**  
✅ **Multi Language Support**  
✅ **Payment Gateway Integration**  
✅ **SMS Validation**  
✅ **WhatsApp Notifications**  
✅ **Telegram Notifications**

## System Requirements

- **OS**: Linux or Windows
- **PHP**: Version 8.2 or higher
- **Database**: MySQL 4.1.x and above
- **Extensions**: PDO, MySQLi, GD2, CURL, ZIP, Mbstring

## Installation

### Prerequisites
1. **Web Server**: Apache/Nginx with PHP support
2. **Database**: MySQL/MariaDB server
3. **PHP Extensions**: Ensure all required extensions are installed

### Quick Start with XAMPP (Windows)
1. Download and install [XAMPP](https://www.apachefriends.org/)
2. Clone or download this repository to `C:\xampp\htdocs\glinta`
3. Start Apache and MySQL services
4. Navigate to `http://localhost/glinta/install/`
5. Follow the installation wizard

### Manual Installation
1. Clone this repository to your web directory
2. Configure your web server to point to the project directory
3. Create a MySQL database
4. Import the database schema from `install/phpnuxbill.sql`
5. Copy `config.sample.php` to `config.php` and update database settings
6. Access the application through your web browser

## Default Login Credentials

After installation, use these credentials to access the admin panel:

- **Username**: `admin`
- **Password**: `admin`

**⚠️ Important**: Change the default password immediately after first login!

## Configuration

### Database Configuration
Edit `config.php` with your database settings:

```php
$db_host = "localhost";     // Database Host
$db_user = "your_username"; // Database Username  
$db_pass = "your_password"; // Database Password
$db_name = "your_database"; // Database Name
```

### Router Configuration
1. Access Admin Panel → Settings → Routers
2. Add your Mikrotik router details
3. Configure API access credentials
4. Test the connection

## Usage

### For Administrators
- **Dashboard**: Overview of business metrics
- **Customer Management**: Add, edit, and manage customers
- **Plan Management**: Create internet packages and pricing
- **Voucher Generation**: Create prepaid vouchers for customers
- **Reports**: View detailed business analytics
- **Settings**: Configure system preferences

### For Customers
- **Self Registration**: Customers can create their own accounts
- **Plan Purchase**: Buy internet packages online
- **Balance Management**: Check balance and transaction history
- **Profile Management**: Update personal information

## Payment Gateways

Supports various payment methods:
- Manual payments
- Bank transfers
- Online payment gateways (configurable)

## Support & Documentation

- **Original PHPNuxBill**: [Documentation](https://github.com/hotspotbilling/phpnuxbill/wiki)
- **Community**: [Telegram Group](https://t.me/phpmixbill)
- **Issues**: Report bugs or request features in this repository's Issues section

## Contributing

1. Fork this repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Attribution

This project is based on [PHPNuxBill](https://github.com/hotspotbilling/phpnuxbill/) by the PHPNuxBill team. We extend our gratitude to the original developers for creating such an excellent foundation.

Original PHPNuxBill:
- **Repository**: https://github.com/hotspotbilling/phpnuxbill/
- **Author**: ibnux
- **License**: MIT License

## Screenshots

<!-- Add screenshots of your customized version here -->

## Changelog

### Version 1.0.0 (Based on PHPNuxBill)
- Initial release of Glinta Hotspot Billing System
- Based on PHPNuxBill with custom modifications
- Enhanced user interface and experience
- Additional features and improvements

---

**Made with ❤️ by the Glinta Team**
