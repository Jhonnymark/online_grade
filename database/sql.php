CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('dean', 'teacher', 'student') NOT NULL
);

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_id INT,
    teacher_id INT,
    schedule VARCHAR(100),
    FOREIGN KEY (course_id) REFERENCES courses(id),
    FOREIGN KEY (teacher_id) REFERENCES users(id)
);

CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    section_id INT,
    student_id INT,
    FOREIGN KEY (section_id) REFERENCES sections(id),
    FOREIGN KEY (student_id) REFERENCES users(id)
);

CREATE TABLE grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    enrollment_id INT,
    prelim CHAR(2),
    midterm CHAR(2),
    final CHAR(2),
    viewable_date DATE,
    FOREIGN KEY (enrollment_id) REFERENCES enrollments(id)
);
