SHOW DATABASES;
CREATE DATABASE internshala;
use internshala;
CREATE TABLE students(
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone_no VARCHAR(15),
    PRIMARY KEY(id)
);

CREATE TABLE employers(
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone_no VARCHAR(15), 
    PRIMARY KEY(id)
);

CREATE TABLE internships(
    id INT NOT NULL AUTO_INCREMENT,
    employer_fk INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    duration VARCHAR(255) NOT NULL,
    start_date VARCHAR(255) NOT NULL,
    stipend VARCHAR(255) NOT NULL,
    posted_on VARCHAR(255) NOT NULL,
    apply_by VARCHAR(255) NOT NULL,
    student_fk INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(employer_fk) REFERENCES employers(id), 
    FOREIGN KEY(student_fk) REFERENCES students(id) 
);

CREATE TABLE apply_interns(
    id INT NOT NULL AUTO_INCREMENT,
    student_fk INT NOT NULL,
    internship_fk INT NOT NULL,
    why VARCHAR(255) NOT NULL,
    avail VARCHAR(255) NOT NULL,
    experience VARCHAR(255) NOT NULL,
    project VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    pincode VARCHAR(255) NOT NULL,    
    PRIMARY KEY(id),
    FOREIGN KEY(student_fk) REFERENCES students(id),
    FOREIGN KEY(internship_fk) REFERENCES internships(id)
);