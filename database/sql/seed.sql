INSERT INTO university (university_id, name, location, founding_year, motto, website, contact_email) VALUES
(1, 'Universidad Nacional Autónoma de México', 'Ciudad de México', 1551, 'Por mi raza hablará el espíritu', 'www.unam.mx', 'contacto@unam.mx'),
(2, 'Universidad de Buenos Aires', 'Buenos Aires', 1821, 'Libertad, igualdad, fraternidad', 'www.uba.ar', 'info@uba.ar'),
(3, 'Universidade de São Paulo', 'São Paulo', 1934, 'Scientia Vinces', 'www.usp.br', 'contato@usp.br'),
(4, 'Universidad de Chile', 'Santiago', 1842, 'Fiat Lux', 'www.uchile.cl', 'contacto@uchile.cl'),
(5, 'Universidad Nacional de Colombia', 'Bogotá', 1867, 'Dios, patria, libertad', 'www.unc.edu.co', 'info@unc.edu.co');

INSERT INTO faculty (faculty_id, university_id, name, dean_name, contact_email) VALUES
(1, 1, 'Facultad de Ciencias', 'Dr. José Martínez', 'ciencias@unam.mx'),
(2, 1, 'Facultad de Derecho', 'Dra. Ana López', 'derecho@unam.mx'),
(3, 2, 'Facultad de Medicina', 'Dr. Carlos Gutiérrez', 'medicina@uba.ar'),
(4, 3, 'Faculdade de Engenharia', 'Dr. Paulo Silva', 'engenharia@usp.br'),
(5, 4, 'Facultad de Artes', 'Dra. Gabriela Rodríguez', 'artes@uchile.cl');


INSERT INTO department (department_id, faculty_id, name, head, contact_email) VALUES
(1, 1, 'Departamento de Matemáticas', 'Dr. Luis González', 'matematicas@ciencias.unam.mx'),
(2, 1, 'Departamento de Física', 'Dra. Laura Ramírez', 'fisica@ciencias.unam.mx'),
(3, 2, 'Departamento de Derecho Civil', 'Dr. Juan Pérez', 'civil@derecho.unam.mx'),
(4, 3, 'Departamento de Cirugía', 'Dr. Roberto Fernández', 'cirugia@medicina.uba.ar'),
(5, 4, 'Departamento de Engenharia Civil', 'Dr. Pedro Almeida', 'civil@engenharia.usp.br');

INSERT INTO course (course_id, name, description, credit_hours, level, department_id) VALUES
(1, 'Cálculo I', 'Introducción al cálculo diferencial.', 4, 'Primer Semestre', 1),
(2, 'Álgebra Lineal', 'Teoría y aplicaciones del álgebra lineal.', 3, 'Segundo Semestre', 1),
(3, 'Derecho Constitucional', 'Estudio de los principios constitucionales.', 5, 'Tercer Semestre', 3),
(4, 'Anatomía Humana', 'Estudio de la estructura del cuerpo humano.', 4, 'Primer Semestre', 4),
(5, 'Mecánica de Fluidos', 'Principios fundamentales de la mecánica de fluidos.', 3, 'Segundo Semestre', 5);

INSERT INTO faculty_course (faculty_course_id, faculty_id, course_id) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 4),
(5, 4, 5);
