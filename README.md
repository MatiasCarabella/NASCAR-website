<p align="center">
   <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/NASCAR.svg" width="512" align="center"/>
</p>

<div align="center">
   <a href="https://html.spec.whatwg.org/" target="_blank"><img src="https://img.shields.io/badge/HTML-%23E34F26.svg?logo=html5&logoColor=white" alt="HTML" /></a>
   <a href="https://www.w3.org/Style/CSS/" target="_blank"><img src="https://img.shields.io/badge/CSS-639?logo=css&logoColor=fff" alt="CSS" /></a>
   <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><img src="https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=000" alt="JavaScript" /></a>
   <a href="https://jquery.com/" target="_blank"><img src="https://img.shields.io/badge/jQuery-0769AD?logo=jquery&logoColor=fff" alt="jQuery" /></a>
   <a href="https://www.php.net/" target="_blank"><img src="https://img.shields.io/badge/PHP-8.4-777BB4?logo=php&logoColor=white" alt="PHP" /></a>
   <a href="https://www.mysql.com/" target="_blank"><img src="https://img.shields.io/badge/MySQL-9.3.0-4479A1?logo=mysql&logoColor=white" alt="MySQL" /></a>
   <a href="https://www.docker.com/" target="_blank"><img src="https://img.shields.io/badge/Docker-2496ED?logo=docker&logoColor=fff" alt="Docker" /></a>
</div>

<h1 align="center">NASCAR-website: University Course Final Project</h1>

This project is a NASCAR-themed website developed for my 2019 'Professional Webmaster' university course. It features a dynamic homepage with news and comments, a race calendar for the year, championship standings, team information categorized by manufacturer, and user authentication with log-in and registration functionalities.

## Features
- **Homepage**: Hero section and latest NASCAR news headlines.
- **News Articles**: See the full version of the articles and comment on them.
- **Race Calendar**: Check the schedule for upcoming races.
- **Championship Standings**: See the current standings.
- **Teams**: Explore information about the different teams grouped by manufacturers.
- **My Profile**: Upload your own profile picture, change your password or log out.
- **Log In**/**Register**: Create an account or log in to access personalized features.

## Screenshots

### Homepage
- Hero section:

  ![image](https://github.com/user-attachments/assets/1a21e452-287f-4779-a519-3324c687eacb)

- News headlines:

   ![image](https://github.com/user-attachments/assets/68747734-d201-43a5-a6a2-5b5ee0b69a3c)

### News Articles
- Complete news articles:

  ![image](https://github.com/user-attachments/assets/22f7069b-4ad4-4498-8eb9-ec6e1d84e2e2)

- Comment section:

  ![image](https://github.com/user-attachments/assets/33edc6ea-4756-408c-b052-4b718120eec7)


### Race Calendar
- Provides a year-long calendar of all NASCAR races:

  ![image](https://github.com/user-attachments/assets/4a5261d1-ee81-48f1-a1ed-f034c77ed1b5)


### Championship Standings
- Shows the current standings in the championship:

  ![image](https://github.com/user-attachments/assets/557f390f-700f-4e87-8b10-49a40f9496ae)


### Team Information
- Lists teams grouped by manufacturer:

  ![image](https://github.com/user-attachments/assets/244cad87-0621-4ea7-9ca6-19c16833e0d7)

- Provides detailed information about each team:

  ![image](https://github.com/user-attachments/assets/720660bf-073b-46cc-aba9-ddcc1ce3c2db)


### Profile/User Settings
- Users can change their profile picture and manage their password:

  ![image](https://github.com/user-attachments/assets/fb3e62b5-a96c-4605-b9d3-b776b2c5733d)


### User Authentication
- Allows users to register and log in to the website:

  ![image](https://github.com/user-attachments/assets/4bc53c3e-940f-48f8-947c-bd94d1aa3d52)

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

## License
This project is licensed under the [MIT License](LICENSE).

## Acknowledgements
- University course professor and teaching assistants
- NASCAR for providing inspiration and data for the project
- Open source libraries and tools used in this project
