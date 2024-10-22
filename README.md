
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

- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM/Yarn

Update the .env file with your database credentials:
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

Run database migrations:-> php artisan migrate

Database Seeding

Seed the database with dummy admin login for testing purposes.

Run command :->  php artisan db:seed

username : admin@gmail.com

password: admin@123

1. **Performance:**
   - **Optimize for Core Web Vitals (CWV):** Ensure the app scores well on metrics like First Contentful Paint (FCP), Largest Contentful Paint (LCP), and Cumulative Layout Shift (CLS). ✔
   - **Lazy Loading:** Implement lazy loading of job postings and images to improve initial load time. ✔
   - **Minification and Compression:** Minimize and compress assets (CSS, JS) for better performance. ✔

2. **UI/UX:**
   - **Responsive Design:** Ensure the application is fully responsive across all devices (mobile, tablet, desktop). ✔
   - **User-friendly Filters:** Implement an intuitive filtering UI with clear feedback when users apply filters. ✔
   - **Microinteractions:** Add subtle animations or transitions to improve the user experience without impacting performance. ✔
   - **Accessibility:** Ensure the site is accessible for all users (e.g., keyboard navigation, screen reader support). ✔

3. **Frontend Architecture:**
   - **Reusable Components:** Build reusable components for job cards, filter options, and forms using Blade and Alpine.js. ✔
   - **Separation of Concerns:** Ensure a clean separation between data fetching and UI rendering for scalability. ✔
   - **CSS Architecture:** Use a CSS methodology such as BEM or utility-first CSS for maintainable and scalable styles. ✔
  

Frontend Pages :

<img src="https://github.com/amarpaviall/laravel_full-stack-challenge/blob/main/screenshots/metrics.png" alt="App screenshot">

<img src="https://github.com/amarpaviall/laravel_full-stack-challenge/blob/main/screenshots/home.png" alt="App screenshot">

<img src="https://github.com/amarpaviall/laravel_full-stack-challenge/blob/main/screenshots/company.png" alt="App screenshot">

<img src="https://github.com/amarpaviall/laravel_full-stack-challenge/blob/main/screenshots/job_detail.png" alt="App screenshot">

<img src="https://github.com/amarpaviall/laravel_full-stack-challenge/blob/main/screenshots/view.png" alt="App screenshot">

<img src="https://github.com/amarpaviall/laravel_full-stack-challenge/blob/main/screenshots/list.png" alt="App screenshot">
