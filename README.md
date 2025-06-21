<p align="center">
   <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/NASCAR.svg" width="512" align="center"/>
</p>

<div align="center">
   <a href="https://html.spec.whatwg.org/" target="_blank"><img src="https://img.shields.io/badge/HTML-%23E34F26.svg?logo=html5&logoColor=white" alt="HTML" /></a>
   <a href="https://www.w3.org/Style/CSS/" target="_blank"><img src="https://img.shields.io/badge/CSS-639?logo=css&logoColor=fff" alt="CSS" /></a>
   <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><img src="https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=000" alt="JavaScript" /></a>
    <a href="https://www.php.net/" target="_blank"><img src="https://img.shields.io/badge/dynamic/json?url=https%3A%2F%2Fraw.githubusercontent.com%2FMatiasCarabella%2Fyoutube-search-API%2Fmain%2Fcomposer.json&query=%24.require.php&label=PHP&labelColor=777BB4&color=gray&logo=php&logoColor=white" alt="PHP" /></a>
     <a href="https://www.mysql.com/" target="_blank"><img src="https://img.shields.io/badge/dynamic/xml?url=https%3A%2F%2Fraw.githubusercontent.com%2FMatiasCarabella%2Fformula1-driver-API%2Fmain%2Fpom.xml&query=%2F%2F*%5Blocal-name()%3D'mysql.version'%5D&label=MySQL&labelColor=4479A1&color=gray&logo=mysql&logoColor=white" alt="MySQL" /></a>
    <a href="https://www.docker.com/" target="_blank"><img src="https://img.shields.io/badge/Docker-2496ED?logo=docker&logoColor=fff" alt="Docker" /></a>
</div>

<h1 align="center">NASCAR-website: University Course Final Project</h1>

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

## Setup Instructions

### Prerequisites
- [Docker](https://docs.docker.com/get-started/get-docker/) and [Docker Compose](https://docs.docker.com/compose/)

### Installation
1. Clone the repository:
   ```
   git clone https://github.com/MatiasCarabella/NASCAR-website.git
   cd NASCAR-website
   ```
   
2. Build and start the Docker containers:
   ```
    docker-compose up --build
   ```
   _The `init.sql` script will be automatically executed to create the necessary tables and insert initial data._

3. Access the website on http://localhost:8080.

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

## Usage
- **Homepage**: View and comment on the latest NASCAR news.
- **Race Calendar**: Check the schedule for upcoming races.
- **Championship Standings**: See the current standings.
- **Teams**: Explore information about the different teams grouped by manufacturers.
- **My Profile**: Upload your own profile picture, change your password or log out.
- **Log In**/**Register**: Create an account or log in to access personalized features.

## License
This project is licensed under the [MIT License](LICENSE).

## Acknowledgements
- University Course Instructor and Teaching Assistants
- NASCAR for providing inspiration and data for the project
- Open source libraries and tools used in this project
  
