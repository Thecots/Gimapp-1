DROP DATABASE IF EXISTS workots;
CREATE DATABASE workots;
USE workots;

/* Tabla usuarios */
CREATE TABLE tb_users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15),
    passwd VARCHAR(25),
    user_img VARCHAR(100),
    user_type INT
); 

INSERT INTO tb_users value
(null,"root","root","img/users/root.png",0);

/* Tabla musculos */
CREATE TABLE tb_musculos (
    id_musculo INT PRIMARY KEY AUTO_INCREMENT,
    musculo VARCHAR(100),
    tren INT
);

INSERT INTO tb_musculos value
(1,"Pecho",0),
(2,"Abdominales",0),
(3,"Laterales",0),
(4,"Hombro",0),
(5,"Trapecio",0),
(6,"Bicep",0),
(7,"Tricep",0),
(8,"Antebrazo",0),
(9,"Cuadricep",1),
(10,"Pantorrillas",1),
(11,"tendón de la corva",1),
(12,"Gluteo",1);

/* Tabla musculos imagenes */
CREATE TABLE tb_musculos_img (
    id_musculo_img INT PRIMARY KEY AUTO_INCREMENT,
    id_musculo INT,
    musculo_img LONGTEXT
);

INSERT INTO tb_musculos_img value
(null,1,"img/Musculos/tren_superior/pecho.png"),
(null,2,"img/Musculos/tren_superior/abs.png"),
(null,3,"img/Musculos/tren_superior/laterales.png"),
(null,4,"img/Musculos/tren_superior/hombro.png"),
(null,5,"img/Musculos/tren_superior/trapecio.png"),
(null,6,"img/Musculos/tren_superior/bicep.png"),
(null,7,"img/Musculos/tren_superior/tricep.png"),
(null,8,"img/Musculos/tren_superior/antebrazo.png"),
(null,9,"img/Musculos/tren_inferior/cuadricep.png"),
(null,10,"img/Musculos/tren_inferior/pantorrillas.png"),
(null,11,"img/Musculos/tren_inferior/tendon_de_la_corva.png"),
(null,12,"img/Musculos/tren_inferior/gluteo.png");

/* Tabla serie musuclos */
CREATE TABLE tb_series_musculos (
    id_serie_musculos INT PRIMARY KEY AUTO_INCREMENT,
    id_serie INT,
    id_musculo INT
);

/* Tabla series */
CREATE TABLE tb_series (
    id_serie INT PRIMARY KEY AUTO_INCREMENT,
    serie VARCHAR(100),
    descripcion_serie LONGTEXT
);

/* Tabla series img */
CREATE TABLE tb_series_img (
    id_serie_img INT PRIMARY KEY AUTO_INCREMENT,
    id_serie INT,
    serie_img LONGTEXT
);


/* Tabla series videos */
CREATE TABLE tb_series_videos (
    id_serie_video INT PRIMARY KEY AUTO_INCREMENT,
    id_serie INT,
    serie_video LONGTEXT
);

/* Tabla series repeticiones */
CREATE TABLE tb_repeticiones (
    id_repeticion INT PRIMARY KEY AUTO_INCREMENT,
    id_serie INT,
    series_recomendadas INT,
    repeticiones_recomendadas INT
);

/* Tabla rutinas */
CREATE TABLE tb_rutinas (
    id_rutina INT PRIMARY KEY AUTO_INCREMENT,
    ip_rutina INT,
    rutina VARCHAR(150),
    descripcion_rutina LONGTEXT
);

/* Tabla rutina series */
CREATE TABLE tb_rutinas_series (
    id_rutina_series INT PRIMARY KEY AUTO_INCREMENT,
    id_rutina INT,
    id_serie INT
);

/* Tabla rutina img */
CREATE TABLE tb_rutinas_img (
    id_rutina_img INT PRIMARY KEY AUTO_INCREMENT,
    id_rutina INT,
    rutina_img LONGTEXT
);

/* Tabla rutina videos */
CREATE TABLE tb_rutinas_video (
    id_rutina_video INT PRIMARY KEY AUTO_INCREMENT,
    id_rutina INT,
    rutina_video LONGTEXT
);

/* Tabla  calendario */
CREATE TABLE tb_calendario (
    id_entrenamiento INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    fecha_entrenamiento DATE
);

/* Tabla rutinas entrenamiento dia */
CREATE TABLE tb_ruitnas_entrenamiento_dia (
    id_rutina_entrenamiento_dia INT PRIMARY KEY AUTO_INCREMENT,
    id_entrenamiento_dia INT,
    id_rutina LONGTEXT,
    descripcion_rutina_entrenamiento LONGTEXT
);

