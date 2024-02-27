CREATE TABLE university (
    university_id INT PRIMARY KEY,
    name VARCHAR(255),
    location VARCHAR(100),
    founding_year INT,
    motto VARCHAR(255),
    website VARCHAR(255),
    contact_email VARCHAR(100)
);

CREATE TABLE faculty (
    faculty_id INT PRIMARY KEY,
    university_id INT,
    name VARCHAR(255),
    dean_name VARCHAR(255),
    contact_email VARCHAR(100),
    FOREIGN KEY (university_id) REFERENCES university(university_id)
);

CREATE TABLE department (
    department_id INT PRIMARY KEY,
    faculty_id INT,
    name VARCHAR(255),
    head VARCHAR(255),
    contact_email VARCHAR(100),
    FOREIGN KEY (faculty_id) REFERENCES faculty(faculty_id)
);

CREATE TABLE faculty_course (
    faculty_course_id INT PRIMARY KEY,
    faculty_id INT,
    course_id INT,
    FOREIGN KEY (faculty_id) REFERENCES faculty(faculty_id),
    FOREIGN KEY (course_id) REFERENCES course(course_id)
);

CREATE TABLE course (
    course_id INT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    credit_hours INT,
    level VARCHAR(50),
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES department(department_id)
);
