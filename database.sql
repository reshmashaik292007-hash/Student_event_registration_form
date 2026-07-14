

CREATE TABLE registrations(

id INT AUTO_INCREMENT PRIMARY KEY,

full_name VARCHAR(100),

email VARCHAR(100),

phone VARCHAR(15),

college VARCHAR(150),

department VARCHAR(100),

branch VARCHAR(100),

gender VARCHAR(20),

event_name VARCHAR(100),

registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);