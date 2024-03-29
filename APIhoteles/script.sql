SET @username = 'Cecilia';
SET @password = 'Cecilia';

DROP TABLE IF EXISTS hoteles;

CREATE TABLE hoteles (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Categoria VARCHAR(10) NOT NULL,
    Habitaciones INT NOT NULL,
    Poblacion VARCHAR(255) NOT NULL,
    Direccion VARCHAR(255) NOT NULL,
    UNIQUE(ID)
);

INSERT INTO hoteles (Nombre, Categoria, Habitaciones, Poblacion, Direccion)
VALUES 
  ('Abashiri (NH)', '3*', 168, '46013 Valencia', 'Avenida Ausias March; 59'),
  ('Abba Acteon (Abba Hoteles)', '4*', 189, '46023 Valencia', 'Escultor Vicente Bertrán Grimal; 2'),
  ('Acta Atarazanas', '4*', 42, '46011 Valencia', 'Plaza Tribunal de las Aguas; 4'),
  ('Acta del Carmen', '3*', 25, '46003 Valencia', 'Blanquerías; 11'),
  ('AC Valencia (AC Hotels)', '4*', 183, '46023 Valencia', 'Avenida de Francia; 67'),
  ('Ad Hoc Monumental Valencia', '3*', 28, '46003 Valencia', 'Boix; 4'),
  ('Alkazar', '1*', 18, '46002 Valencia', 'Mosén Femades; 11');


