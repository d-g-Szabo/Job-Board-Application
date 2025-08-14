# Job-Board-Application

Project: Build a job board web app using Laravel, Vue, PHP

# Requirements:

🎯 Authentication, Register/login/logout.

🎯 User Roles, Job Seeker and Employers.

🏹 Job Listings, View job list and job detail pages

🏹 Job Application System, Cover letter, Optional resume/CV (PDF)

🏹 File Upload, uploaded CVs

🏹 Job Expiration, job expire based on the expires_at field.

🏹 Search & Filtering, Search/filter by keyword, type, location

🏹 Employer Dashboard

I did not manage to finish all the requirements.

# User Stories:

    🐿️ As a user, I want to register, log in, and log out so that I can access role-specific features
    🐿️ As a user, I want to see a list of all active job listings so that I can browse opportunities.
    🐿️ As a user, I want to open a job detail page so that I can read the full description and requirements.
    🐿️ As a job seeker, I want to apply to a job with a cover letter and an optional CV upload so that I can present my candidacy.
    🐿️ As a employer, I want to post a new job with title, company name, location, job type, description, optional salary range, tags, and an expiration date so that candidates have all key information
    🐿️ As a employer, I want to edit or delete my own job posts so that I can keep listings accurate.
    🐿️ As a employer, I want expired jobs to remain visible in my dashboard (but hidden from the public) so that I can decide to extend or repost them
    🐿️ As a job seeker, I want to view a list of jobs I’ve applied to so that I can track my submissions
    🐿️ As a employer, I want to view each job’s applicants (name, email, message/cover letter, optional CV) so that I can evaluate candidates

Stretch Stories:

    🐿️ As a admin, I want to moderate job listings and manage users so that I can remove spam and maintain quality
    🐿️ As a user, I want email notifications (application received/updated, new applicant, job expiring soon) so that I stay informed without logging in
    🐿️ As a job seeker, I want to track my application status (received, reviewed, shortlisted, rejected) so that I know where I stand
    🐿️ As a user, I want OAuth sign-in (Google/GitHub) and optional 2FA so that authentication is convenient and secure

<!-- # Wireframe: -->

# Database schema:

![](https://github.com/d-g-Szabo/Job-Board-Application/blob/434c58a6f939b105e7a92fe3be0999eb1df8bb51/public/job_listing_webapp_db_schema.png)

# Trello project planning:

![](https://github.com/d-g-Szabo/Job-Board-Application/blob/b70dc74f018ef8ad1ad152a0f0f68cfa8de5e82a/public/trello.png)

# Stretch Goals:

🏹 OAuth sign-in

🏹 Application status

🏹 Notification system

🏹 Admin user with deshboard

<!-- # Reflections:

- What went really well, and what could have gone better?

- Useful external sources that helped me complete the assignment (e.g Youtube tutorials).

- Errors or bugs I encountered while completing your assignment. -->

# Setup instructions:

1.  Fork the repository (check "copy the main branch only") and clone your fork to your local machine

2.  Make sure that your local machine has PHP 8.4.1, Composer 2.8.3, and the Laravel installer 5.14.0 installed (Laravel version 12.22.1)

3.  In addition, you should install Node (24.5.0) and NPM (11.5.1) (https://laravel.com/docs/12.x/installation#creating-a-laravel-project)

    For linux to install PHP, Composer, and the Laravel installer, use this command:

          /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

4.  Restart your terminal session (close and re-open), to update PHP, Composer, and the Laravel installer, just re-run the above command

5.  Navigate to the app directory in the terminal

        cd to/the/dir/of/the/Job-Board-Application

    Install packages and make a build

        npm install && npm run build
        composer install

6.  Create a new .env file from the .env.example and set up your DB

    I used Supabase PostreSQL: https://supabase.com/docs/guides/getting-started/quickstarts/laravel

    (Make sure the APP_KEY is correct in the .env!)

    Start the development server

        composer run dev

7.  Open http://localhost:8000 and http://localhost:5173/
