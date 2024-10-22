
# Job Portal - Full Stack Laravel Application

This is a Laravel-based job portal application that allows users to search for jobs, filter results, and view job postings. 
Admin users can manage Companies, Jobs Posting.

## Features

Job Listings & Search: Users can browse, search, and filter job listings based on location, company, salary, and job type.
Admin Panel: Admin users can manage job posts, companies, and their profiles with a dropdown feature. Role middleware checks if the authenticated user has the correct role. If not, it returns a 403 unauthorized response
Lazy Loading & Transitions: Images are lazy-loaded to improve page load speed and smooth transitions are applied for a better user experience.
Reusable Components: Built-in reusable job cards, filters, and form components using Blade and Alpine.js.
Responsive & Mobile-Friendly: Designed with mobile-first principles, ensuring a great user experience across all devices.
Accessibility: Enhanced accessibility support with keyboard navigation and screen reader compatibility.

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Blade, Alpine.js, Bootstrap 
- **Database**: MySQL
- **Version Control**: Git

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL
- Node.js & NPM/Yarn

Update the .env file with your database credentials:
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

Run database migrations: php artisan migrate

Database Seeding
You can seed the database with dummy admin login for testing purposes.
php artisan db:seed

username : admin@gmail.com
password: admin@123

Performance Considerations
Lazy Loading: Images in the job listings are lazy-loaded for better performance, especially on slower connections.
Efficient Filtering: Job filters are optimized for speed by reducing unnecessary database queries.
Caching: Consider implementing Laravel's caching mechanisms to cache frequently accessed data like job listings and company names.

Accessibility Considerations
Keyboard Navigation: Ensure that all form inputs and interactive elements are keyboard navigable.
Screen Reader Support: Provide appropriate labels for buttons, inputs, and images to enhance compatibility with screen readers.
Color Contrast: All text and buttons follow WCAG guidelines for color contrast, ensuring readability for all users.
