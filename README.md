<p align="center">
   <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/NASCAR.svg" width="512" align="center"/>
</p>

<h1 align="center">NASCAR-website: University Course Final Project</h1>

## Project Description

This project is a NASCAR-themed website developed for my 2019 'Professional Webmaster' university course. It features a dynamic homepage with news and comments, a race calendar for the year, championship standings, team information categorized by manufacturer, and user authentication with log-in and registration functionalities.

## Features

### Homepage
- Displays the latest news articles.
- Users can comment on news articles.

### Race Calendar
- Provides a year-long calendar of all NASCAR races.

### Championship Standings
- Shows the current standings in the championship.

### Team Information
- Lists teams grouped by manufacturer.
- Provides detailed information about each team.

### Profile/User Settings
- Users can change their profile picture and manage their passwords.

### User Authentication
- Allows users to register and log in to the website.
- Manages user sessions and restricts access to certain features.

## Technologies Used
- Frontend: HTML, CSS, JavaScript, jQuery
- Backend: PHP
- Database: MySQL
- Containerization: Docker

## Project Structure
```
/NASCAR-website
│
├── Dockerfile
├── init.sql
├── docker-compose.yml
├── inc/
│   ├── navbar.php
│   └── footer.php
├── index.php
├── article.php
├── schedule.php
├── standings.php
├── teams.php
├── profile.php
├── log-in.php
├── register.php
├── css/
│   ├── normalize.css
│   └── styles.php
├── js/
│   └── ... (js scripts)
├── utils/
│   └── ... (php scripts)
├── img/
│   └── ... (image files)
└── video/
    └── ... (video files)
```

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/MatiasCarabella/NASCAR-website.git
   cd NASCAR-website
   ```
   
2. Build and start the Docker containers:
   ```
    docker-compose up --build
   ```
   The `init.sql` script will be automatically executed to create the necessary tables and insert initial data.

3. Access the website:
  - Open your browser and navigate to http://localhost:8080.

## Usage
- **Homepage**: View and comment on the latest NASCAR news.
- **Race Calendar**: Check the schedule for upcoming races.
- **Championship Standings**: See the current standings.
- **Teams**: Explore information about the different teams grouped by manufacturers.
- **My Profile**: Upload your own profile picture, change your password or log out.
- **Log In**/**Register**: Create an account or log in to access personalized features.

## License
This project is licensed under the MIT License.

## Acknowledgements
- University Course Instructor and Teaching Assistants
- NASCAR for providing inspiration and data for the project
- Open source libraries and tools used in this project
