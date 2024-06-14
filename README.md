<p align="center">
   <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/NASCAR.svg" width="512" align="center"/>
</p>

<h1 align="center">NASCAR-website: University Course Project</h1>

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
├── docker-compose.yml
├── Dockerfile
├── init.sql
├── inc/
│   ├── conexion.php
│   ├── funciones.php
│   ├── nav.php
│   └── footer.php
├── css/
│   ├── normalize.css
│   └── base.php
├── js/
│   └── video-hover.js
├── img/
│   └── ... (image files)
├── index.php
├── calendario.php
├── posiciones.php
├── equipos.php
├── logIn.php
└── register.php
```

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/MatiasCarabella/NASCAR-website.git
   cd NASCAR-website
   ```
2. Ensure **Docker** is installed and running on your machine.

3. Build and start the Docker containers:
   ```
    docker-compose up --build
   ```
   
4. Initialize the database:
  - The init.sql script will be automatically executed to create the necessary tables and insert initial data.

5. Access the website:
  - Open your browser and navigate to http://localhost:8080.

## Usage
- **Homepage**: View and comment on the latest NASCAR news.
- **Race Calendar**: Check the schedule for upcoming races.
- **Championship Standings**: See the current standings.
- **Teams**: Explore information about different teams grouped by manufacturers.
- **Log In**/**Register**: Create an account or log in to access personalized features.

## License
This project is licensed under the MIT License.

## Acknowledgements
- University Course Instructor and Teaching Assistants
- NASCAR for providing inspiration and data for the project
- Open source libraries and tools used in this project
