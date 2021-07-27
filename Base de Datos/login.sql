create database login;
use login;

create table ropa (
id int primary key,
titulo varchar(50) ,
precio float(50),
genero varchar(50),
descripcion varchar(500),
cantidad int,
foto varchar(50)
);

create table carrito(
id int primary key,
titulo varchar(50) ,
precio float(50),
cantidad int,
foto varchar(50)
);

create table copias( 
id int primary key,
cantidad int );


create table usuarios (
usuario varchar(50),
contrasena varchar(50),
nombre varchar(50) ,
direccion varchar(50)
);

create table mensaje (
correo varchar(50),
nombre varchar(50),
apellido varchar(50),
telefono varchar(50),
direccion varchar(50),
observacion varchar(50)
);

create table admins(
usuario varchar(50),
contrasena varchar(50)
);


INSERT INTO  ropa VALUES ('1', 'Blusa negra con estmpado de flores', '138.00', 'mujer', 'Es corta con estampado de flores especial para fiestas , esta tela viene delgada', '5','../imagenes/imagen1.jpg');
INSERT INTO ropa VALUES ('3','Blusa blanca con negro holgada','208.00','mujer','Viene con tela tipo poliester, se puede usar para eventos formales o casuales','6','../imagenes/imagen2.jpg');  
INSERT INTO ropa VALUES ('5','lusa blanca con flores rosas','212.00','mujer','Es una blusa frescaexcelente para cualquier temporada','10','../imagenes/imagen3.jpg'); 
INSERT INTO ropa VALUES ('7','Blusa negra de manga larga','168.00','mujer','Blusa fresca de tela estilo gabardina','9','../imagenes/imagen4.jpg'); 
INSERT INTO ropa VALUES ('9','Blusa negra con mangas transparentes','166.00','mujer','Blusa suave mangas un poco justas tiene forma de corazon en el escote','9','../imagenes/imagen5.jpg');  
INSERT INTO ropa VALUES ('11','Blusa de rayas verticales','178.00','mujer','Esta blusa viene para usarla en climas calurosos el material es algodon','4','../imagenes/imagen6.jpg');  
INSERT INTO ropa VALUES ('13','Sueter blanco','483.00','mujer','La talla se ajusta a cualquier tipo de cuerpo y las mangas son largas','97','../imagenes/imagen7.jpg');  
INSERT INTO ropa VALUES ('15','Blusa corta color vino','269.00','mujer','Se ajusta al cuerpo pueder ser en ocasiones calurosa la tela','87','../imagenes/imagen8.jpg');  
INSERT INTO ropa VALUES ('17','blusa negra con rayas','138.00','mujer','esta blusa tipo buchon elegante o formal','5','../imagenes/imagen9.jpg');  
INSERT INTO ropa VALUES ('19','Blusa negra con transparencias','192.00','mujer','Esta tela viene delgada en la parte de atras la misma tela en las mangas de buena calidad','9','../imagenes/imagen10.jpg');  
INSERT INTO ropa VALUES('21','blusa amarilla con flores','270.00','mujer','blusa de ceda color amarillo excelente para cualquier temporada','5','../imagenes/imagen11.jpg');  
INSERT INTO ropa VALUES('23','Camisa corta','149.00','mujer','Camisa coqueta se puede hacer ejercicio excelente para cualquier tipo de clima','78','../imagenes/imagen12.jpg');  
INSERT INTO ropa VALUES('25','Blusa manga 3/4','270.00','mujer','Busa de tela gruesa recomendable para el frio diseño de hexagono','5','../imagenes/imagen13.jpg');  
INSERT INTO ropa VALUES('27','2 Blusas en 1','400.00','mujer','Hecha de materiaal muy comodo que va bien con todo','46','../imagenes/imagen14.jpg');  
INSERT INTO ropa VALUES('29','Bluson negro','470.00','mujer','Cierra de lazo material poliester tela no elastica transpirable, manga corta cuello en v','87','../imagenes/imagen15.jpg');  
INSERT INTO ropa VALUES('31','Blusa de encajes','479.00','mujer','Blusa de manga larga tela ligera puede usarse para eventos formales o casuales','10','../imagenes/imagen16.jpg');  
INSERT INTO ropa VALUES('33','Blusa ajustada','138.00','mujer','Hace una fgura estilizada se recomienda usar una talla menos y se ajusta en la cintura','11','../imagenes/imagen17.jpg');  
INSERT INTO ropa VALUES('35','Blusa elegante','120.00','mujer','Blusa color blanco con negro holgada para temporada de calor ecxelente para reuniones','43','../imagenes/imagen18.jpg');  
INSERT INTO ropa VALUES('37','Blusa azul marino','138.00','mujer','Blusa azul marino con toques blancos y tambien se recomienda usar en ocasiones formales','87','../imagenes/imagen19.jpg');  
INSERT INTO ropa VALUES('39','Blusa de mezclilla ','100.00','mujer','Es corta de mezclila, vinene un poco mas amplia, cintas ajustables','9','../imagenes/imagen20.jpg');  
INSERT INTO ropa VALUES('41','Blusa roja al hombro','345.00','mujer','Blusa de manga larga de tela ligera, para usarse en eventos casuales contiene detalles de encajes','12','../imagenes/imagen21.jpg');  
INSERT INTO ropa VALUES('43','Blusa ombliguera','234.00','mujer','Blusa de manga larga tela ligera estampado en la tela','87','../imagenes/imagen22.jpg');  
INSERT INTO ropa VALUES('45','Blusa blanca','212.00','mujer','Blusa de manga larga tela ligera detalles con encajes y un liston para ajustarla','98','../imagenes/imagen23.jpg');  
INSERT INTO ropa VALUES('47','Blusa con nudo','212.00','mujer','Se puede usar una talla menos para mejor ajuste en la cinura','56','../imagenes/imagen24.jpg');  
INSERT INTO ropa VALUES('49','Blusa con cinturon de tela','231.00','mujer','Hace una figura estilizada es coqueta','34','../imagenes/imagen25.jpg');  
INSERT INTO ropa VALUES('51','Blusa blanca con piñas','434.00','mujer','Blusa de manga larga tela ligera detalles en los botonoes de las mangas, estampado de piñas','78','../imagenes/imagen26.jpg');  
INSERT INTO ropa VALUES('53','Blusa roja formal','321.00','mujer','Blusa de manga larga tela ligera contiene detalles en os hombrs, mangas de 3/4','89','../imagenes/imagen27.jpg');  
INSERT INTO ropa VALUES('55','Blusa negra con resorte en escote','242.00','mujer','Blusa de manga larga de tela ligera contiene detelles en resortes','50','../imagenes/imagen28.jpg');  
INSERT INTO ropa VALUES('57','Blusa blanca con puntos rojos','212.00','mujer','Blusa de tela ligera para eventos casuales y formales detalles ne las mangas','5','../imagenes/imagen29.jpg');  
INSERT INTO ropa VALUES('59','Camisa roja','67.00','mujer','Se suele usar en eventos con amigos va perfeto con unos jeans, es tela fresca sencilla','3','../imagenes/imagen30.jpg');  
INSERT INTO ropa VALUES('61','Blusa roja semiformal','324.00','mujer','Se suele usar en eventos formales, tela fresca ligera','58','../imagenes/imagen31.jpg');  
INSERT INTO ropa VALUES('63','Blusa azul marino de tirantes','432.00','mujer','Lusa de manga larga tela ligera estampado de flores','100','../imagenes/imagen32.jpg');  
INSERT INTO ropa VALUES('65','Blusa con hombros descubiertos','321.00','mujer','Blusa de manga larga blanca con puntitos negros, contiene detalles en el cuello','6','../imagenes/imagen33.jpg');  
INSERT INTO ropa VALUES('67','Bluson azul','323.00','mujer','Podriaa usarse en eventos formales o casuales, contiene detalles de holanes en las mangas','7','../imagenes/imagen34.jpg');  
INSERT INTO ropa VALUES('69','Blusa rosa','222.00','mujer','Blusa de manga lrga, detalles de un moo con liston en el cuello','9','../imagenes/imagen35.jpg');  
INSERT INTO ropa VALUES('71','Blusa verde','144.00','mujer','Blusa de manga 3/4 tela ligera, contine estampado de mariposas','89','../imagenes/imagen36.jpg');  
INSERT INTO ropa VALUES('73','Blusa de tirantes','144.00','mujer','Tela ligera contienen detalles de tirantes color vino con botones','20','../imagenes/imagen37.jpg');  
INSERT INTO ropa VALUES('75','Bluson blanco','212.00','mujer','Blusa de manga 2/4 podria usarse en eventos casuales o formales contiene detalles de olanes','30','../imagenes/imagen38.jpg');  
INSERT INTO ropa VALUES('77','Blusa multicolores','244.00','mujer','Blusa de manga corta, tela ligera, contiene detalles de triangulos','10','../imagenes/imagen39.jpg');  
INSERT INTO ropa VALUES('79','Blusa beige','87.00','mujer','Blusa demanga corta, contiene detalles de tirantes','10','../imagenes/imagen40.jpg');  
INSERT INTO ropa VALUES('81','Blusa amarilla','212.00','mujer','Blusa sin mangas podria usarse en eventos casuales y formaes, contiene detalles de encajes','5','../imagenes/imagen41.jpg');  
INSERT INTO ropa VALUES('83','Blusa azul','123.00','mujer','Blusa de manga corta, detalles de estampado y botonoes','8','../imagenes/imagen42.jpg');  
INSERT INTO ropa VALUES('85','Blusa naranja','89.00','mujer','Blusa naranja corta tela ligera, encaje en la cintura','56','../imagenes/imagen43.jpg');  
INSERT INTO ropa VALUES('87','Blusa roja','223.00','mujer','Blusa de manga corta tela ligera, detalles de piedreria en el cuello','9','../imagenes/imagen44.jpg');  
INSERT INTO ropa VALUES('89','Blusa melon','211.00','mujer','Blusa de manga corta para cualquier tipo de evento','67','../imagenes/imagen45.jpg');  
INSERT INTO ropa VALUES('91','Blusa azul marino','242.00','mujer','Blusa de manga corta, contiene detalles con piedred¿ria de metal','8','../imagenes/imagen46.jpg');  
INSERT INTO ropa VALUES('93','Blusa de vaca','65.00','mujer','Hace una figura estelizada, es de tipo ombliguera, recomendable para adolescentes','69','../imagenes/imagen47.jpg');  
INSERT INTO ropa VALUES('95','Blusa corta','68.00','mujer','Hace una figura estelizada, tipo ombliguera, coqueta para adolescentes','5','../imagenes/imagen48.jpg');  
INSERT INTO ropa VALUES('97','Blusa bpurpura','65.00','mujer','Figura estilizada, se recomienda usar una talla menos, se ajusta a la cintura','9','../imagenes/imagen49.jpg');  
INSERT INTO ropa VALUES('99','Blusa blanca corta','80.00','mujer','Blusa de tipo ombliguera ajustable en la cintura','4','../imagenes/imagen50.jpg');  

INSERT INTO ropa VALUES('2','Playera negra','100.00','hombre','Viene con tela tipo poliester y algodon','8','../imagenes/imagen51.jpg');  
INSERT INTO ropa VALUES('4','Sueter gris manga larga','208.00','hombre','Sueter gris con frnjas de lana','68','../imagenes/imagen52.jpg');  
INSERT INTO ropa VALUES('6','Playera','158.00','hombre','Player estilo polo viene con tela tipo algodon','45','../imagenes/imagen53.jpg');  
INSERT INTO ropa VALUES('8','Playera negra gym','182.00','hombre','playera para hacer ejercicio viene con tela tipo poliester','9','../imagenes/imagen54.jpg'); 
INSERT INTO ropa VALUES('10','Playera gris oxford','88.00','hombre','Playera casua gris para estar comodo','98','../imagenes/imagen55.jpg');  
INSERT INTO ropa VALUES('12','Playera blanca','125.00','hombre','Playera blanca casual viene con tela tipo poliester','23','../imagenes/imagen56.jpg'); 
INSERT INTO ropa VALUES('14','Playera gris con guinda','208.00','hombre','Playera gris con mangas guinda viene con tela tipo algodon','34','../imagenes/imagen57.jpg');  
INSERT INTO ropa VALUES('16','Playera blanco con rojo','98.00','hombre','Playera blanca con mangas rojas viene con tela tipo algodon','76','../imagenes/imagen58.jpg');  
INSERT INTO ropa VALUES('18','Playera gris','208.00','hombre','Player gris estilo polo con franja gris oscuro','78','../imagenes/imagen59.jpg');  
INSERT INTO ropa VALUES('20','Playera superman','128.00','hombre','Playera azul con logo de superman viene con tela tipo algodon','23','../imagenes/imagen60.jpg');  
INSERT INTO ropa VALUES('22','Pantalon de mezclilla para dama','308.00','hombre','Viene con tela tipo mezclilla ajustado con tirantes ','98','../imagenes/imagen61.jpg');  
INSERT INTO ropa VALUES('24','Pantalon beige','208.00','hombre','Pantalon de vestir para eventos formales','98','../imagenes/imagen62.jpg');  
INSERT INTO ropa VALUES('26','Pantalon azul de mezclilla','408.00','hombre','Pantalon de mezclilla casual','10','../imagenes/imagen63.jpg');  
INSERT INTO ropa VALUES('28','Pantalon de dama azul','308.00','hombre','Pantalon de mezclilla viene tipo acampanado','5','../imagenes/imagen64.jpg');  
INSERT INTO ropa VALUES('30','Pantalon casual hombre','311.00','hombre','Viene estilo casual negro de mezclilla','33','../imagenes/imagen65.jpg');  
INSERT INTO ropa VALUES('32','Pantalon azul de mezclilla ','311.00','hombre','Pantalon estilo vaquero de mezclilla','23','../imagenes/imagen66.jpg');  
INSERT INTO ropa VALUES('34','Pantalos de mezclilla','321.00','hombre','Pantalon estilo vaquero de mezclilla','67','../imagenes/imagen67.jpg');  
INSERT INTO ropa VALUES('36','Pantalon de mezclilla','401.00','hombre','Pantalon de mezclila para dama tipo entubado','87','../imagenes/imagen68.jpg');  
INSERT INTO ropa VALUES('38','Pans negro','398.00','hombre','Pants deportivo de tela de algodon con bolsas laterales','12','../imagenes/imagen69.jpg');  
INSERT INTO ropa VALUES('40','Pantalon gris','385.00','hombre','Viene ajustado para eventos formales','23','../imagenes/imagen70.jpg');  
INSERT INTO ropa VALUES('42','Gorra azul marino','200.00','hombre','Gorra ajustable unisex','98','../imagenes/imagen71.jpg');  
INSERT INTO ropa VALUES('44','Gorra adidas negra','300.00','hombre','Gorra deportiva estandar pico de pato','12','../imagenes/imagen72.jpg');  
INSERT INTO ropa VALUES('46','Gorra LA','208.00','hombre','Gorra conmemorativa de equipo de futbol','67','../imagenes/imagen73.jpg');  
INSERT INTO ropa VALUES('48','Gorra negra','221.00','hombre','Gorra tipo sk8','5','../imagenes/imagen74.jpg');  
INSERT INTO ropa VALUES('50','Gorra negra','223.00','hombre','Gorra sk8 volcom tipo pico de pato','8','../imagenes/imagen75.jpg');  
INSERT INTO ropa VALUES('52','Gorra azul marino','208.00','hombre','Gorra con pico de pato','23','../imagenes/imagen76.jpg');  
INSERT INTO ropa VALUES('54','Gorra gris','212.00','hombre','Gorra gris logo de nasa','34','../imagenes/imagen77.jpg');  
INSERT INTO ropa VALUES('56','Gorra azul cielo','210.00','hombre','Gorra azul con logotipo de NY','10','../imagenes/imagen78.jpg');  
INSERT INTO ropa VALUES('58','Gorra nike','251.00','hombre','Gorrapico de pato con logotipo de nike','15','../imagenes/imagen79.jpg');  
INSERT INTO ropa VALUES('60','Gorra gris con negro','205.00','hombre','Gorra pico de patocon logotipo de starbucks','11','../imagenes/imagen80.jpg');  
INSERT INTO ropa VALUES('62','Mascada con estampado','70.00','hombre','Mascada con estampado de flores excelente para el frio','35','../imagenes/imagen81.jpg');  
INSERT INTO ropa VALUES('64','Mascada rosa','80.00','hombre','Mascada sencilla de tela de algodon','65','../imagenes/imagen82.jpg');  
INSERT INTO ropa VALUES('66','Pashmina negra','90.00','hombre','Tela de algodon estilo formal','23','../imagenes/imagen83.jpg');  
INSERT INTO ropa VALUES('68','Pashmina blanca','100.00','hombre','Estampado de hojas en color otoño','76','../imagenes/imagen84.jpg');  
INSERT INTO ropa VALUES('70','Pashmina amarilla','208.00','hombre','Tela tipo algodon','10','../imagenes/imagen85.jpg');  
INSERT INTO ropa VALUES('72','Bufanda rosa','66.00','hombre','Bufanda de algodon','8','../imagenes/imagen86.jpg');  
INSERT INTO ropa VALUES('74','Mascada','208.00','hombre','Mascada de seda','9','../imagenes/imagen87.jpg');  
INSERT INTO ropa VALUES('76','Bufanda beige','55.00','hombre','Con olanes de tipo formal','98','../imagenes/imagen88.jpg');  
INSERT INTO ropa VALUES('78','Mascada punteada','208.00','hombre','Tela de ceda con estampado de flores','10','../imagenes/imagen89.jpg');  
INSERT INTO ropa VALUES('80','Pashmina azul cielo','138.00','hombre','Tela de algodon abrigadora','11','../imagenes/imagen90.jpg');  
INSERT INTO ropa VALUES('82','Pantalon de vestir negro','300.00','hombre','Pantalo mezclilla formal para la oficina','12','../imagenes/imagen91.jpg');  
INSERT INTO ropa VALUES('84','Pantalon de vestir','400.00','hombre','Pantalon de vestir gris platino ajustado','14','../imagenes/imagen92.jpg');  
INSERT INTO ropa VALUES('86','Pantalon de vestir','401.00','hombre','Pantalon de vestir gris plateado','54','../imagenes/imagen93.jpg');  
INSERT INTO ropa VALUES('88','Pantalon de vestir de dama','333.00','hombre','Pantalon de vestir formal holgado','23','../imagenes/imagen94.jpg');  
INSERT INTO ropa VALUES('90','Pantalon gris obscuro','444.00','hombre','Viene con tela tipo strech','5.00','../imagenes/imagen95.jpg');  
INSERT INTO ropa VALUES('92','Pantalon de estampado','567.00','hombre','Pantalon tipo formal con estampado de cuadros para la oficina','98','../imagenes/imagen96.jpg');  
INSERT INTO ropa VALUES('94','Pantalon formal','300.00','hombre','Pantalon negro formal para eventos de oficina','23','../imagenes/imagen97.jpg');  
INSERT INTO ropa VALUES('96','Pantalon gris','321.00','hombre','Pantalon gris formal','45','../imagenes/imagen98.jpg');  
INSERT INTO ropa VALUES('98','Pantalon negro','208.00','hombre','Pantalon negro formal para reuniones','51','../imagenes/imagen99.jpg');  
INSERT INTO ropa VALUES('100','Pantalon de rayas','268.00','hombre','Pantalon entubado formal','10','../imagenes/imagen100.jpg'); 




