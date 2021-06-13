INSERT INTO categoria_empleado (id_categoria_empleado, nombre_categoria_empleado, descripcion_categoria_empleado, salario_empleado) VALUES
(1, 'Chef', 'Supervisa la preparación y la cocción de alimentos y comidas', 300),
(2, 'Mesero', 'Se encarga de procesar pedidos y servirlos en la mesa, administrar quejas y cumplidos, procesar pagos y facturación', 200),
(3, 'Asistente de cocina', 'Limpia, pela y corta las verduras, mezcla los ingredientes', 250),
(4, 'Decoradores', 'Pplanifica la distribución de espacios interiores junto a los clientes', 271),
(5, 'Edecan', 'refuerzan de manera significativa la comunicación entre consumidor y marca', 250);


INSERT INTO servicio (id_servicio, nombre_servicio, descripcion_servicio) VALUES
(1, 'Decoración', 'Decoración con globos, telas, velas y más'),
(2, 'Banquetes y catering', 'Desayunos, refrigerios, almuerzos'),
(3, 'Pateles', 'Elaboración de pasteles, galletas, pies, brownies y más'),
(4, 'Mesa de postres', 'Servicio de fuente de chocolate, boquitas, candy bar'),
(5, 'Juegos inflables', 'Alquiler de variedad de inflables: saltarines, deslizaderos, pelotas y más'),
(6, 'Arreglos florales', 'Elaboración de arreglos florales para toda ocasión'),
(7, 'Tarimas', ' Renta de pistas de baile, mesas, muebles, pantallas'),
(8, 'Edecanes y meseros', 'Se cuenta con el personal de edecanes y meseros'),
(9, 'Equipo de sonido y luces', 'Alquiler de proyectores,  computadoras, sistemas de audio y más'),
(10, 'Locales para evento', 'Salones para bodas, graduaciones y eventos empresariales con capacidad para 500 personas'),
(11, 'Hoteles para eventos', 'Se mantiene un lazo de cooperación con hoteles que permiten realizar cumpleaños, graduaciones, bautizos, aniversarios y más');


INSERT INTO categoria_evento (id_categoria_evento, nombre_categoria_evento, descripcion_categoria_evento) VALUES
(1, 'Boda', 'Incluye comida, bebida, mantelería, cubiertos, servicio de cocineros, meseros'),
(2, 'Graduación', 'Sonido estacionario, bebidas, menu de comida, postres'),
(3, 'Bautizo', 'Mesas para los bocadillos, postres, mesa de dulces'),
(4, 'Cumpleaños', 'Decoración de la fiesta, platos, vasos, servilletas, manteles, disfraces, bebidas, postres'),
(5, 'Recepción', 'Envio de empleados para instalar los platos de buffet, los tazones y platos de comida, rellenar los platos y servir la comida a los asistentes'),
(6, 'Funeral', 'Incluye postres, decoración'),
(7, 'Aniversario', 'Decoración de la fiesta, personal que sirve los platos, cocinero'),
(8, 'Servicio empresarial', 'Sonido estacionario, edecanes, pantallas para desarrollar el evento');


INSERT INTO cliente (id_cliente, nombres_cliente, apellidos_cliente, telefono_cliente, direccion_cliente, correo_cliente) VALUES
(1, 'Julia María', 'Rivas Chavéz', '7940-9724', 'Col Palmira Cl El Roble No 9-A', 'juliarivas@gmail.com'),
(2, 'Isaac Antonio', 'González Sánchez', '6194-3846', 'Crío San Juan De Arena Cl Ppal', 'isaacgonzalez@gmail.com'),
(3, 'Leticia Jazmín', 'Fernández Castro', '7871-3152', 'Urb Lomas De Altamira Cl El Talapo No 139', 'leticiafernandez@gmail.com'),
(4, 'Pedro Javier', 'Cruz Flores', '7623-3840', 'Col. Palmira Cl. El Roble No 9-A', 'pedrocruz@gmail.com'),
(5, 'Cecilia Fabiola', 'Rivera Morales', '7321-8714', 'Col. Escalón 3 Cl. Pte. No 35', 'ceciliarivera@gmail.com');


INSERT INTO empleado (id_empleado, id_categoria_empleado, nombres_empleado, apellidos_empleado, dui_empleado, telefono_empleado, direccion_empleado, correo_empleado) VALUES
(1, 1, 'Juan Francisco', 'Escobar Figueroa', '01273456-1', '6125-3876', 'Col. Sta. Rosa I Cl. Ppal. Fnl. No 22', 'fraciscofigueroa@gmail.com'),
(2, 2, 'Angelica Sofía', 'Hernández Arévalo', '01227656-4', '7693-005', 'Col. Morazán I Av. Guatemala No 1', 'angelicahernandez@gmail.com'),
(3, 3, 'Lorena Patricia', 'Acosta Beltrán', '01567622-6', '7182-2403', 'Bo. Concepción 2 Cl. Pte.', 'lorenaacosta@gmail.com'),
(4, 4, 'José Ernesto', 'López Ramírez', '01356719-3', '7987-3464', 'Bo. Distrito Comercial Central 6 Cl. Pte. No 922', 'joselopez@gmail.com'),
(5, 5, 'Katherine Gabriela', 'Cativo Castaneda', '01456897-2', '7709-1682', 'Col. Vista Hermosa Av. Los Helechos No 386', 'gabrielacastaneda@gmail.com');


INSERT INTO solicitud (id_solicitud, id_categoria_evento, id_cliente, descripcion_solicitud, fecha_solicitud, fecha_evento, lugar_evento, hora_evento, cantidad_personas, estado) VALUES
(1, 1, 1, 'Se solicita todos los servicios de decoración, banquete y catering, pastel y mesa de postres', '2021-05-06', '2021-12-19', 'Hotel los girasoles', '16:00:00', 200, 'Iniciado'),
(2, 4, 5, 'Se solicita los servicios de decoración, juegos inflables, pastel y mesa de postres', '2021-08-15', '2021-10-11', 'Cachito Mountain ', '15:30:00', 100, 'Pendiente'),
(3, 7, 4, 'Se solicita todos los servicios de fiesta y personal para un evento grande', '2021-07-30', '2021-10-24', 'Hoter Princess', '19:00:00', 75, 'Pendiente'),
(4, 2, 2, 'Se solicitan los servicios básicos para una pequeña recepción', '2021-07-15', '2021-08-01', 'Restaurante Pueblo Viejo', '17:00:00', 50, 'Iniciado'),
(5, 6, 3, 'Se solicita urgentemente todos los servicios funebres necesarios', '2021-06-16', '2021-06-18', 'Funerarias Auxiliadora', '16:00:00', 100, 'Iniciado');


INSERT INTO contrato (id_contrato, id_solicitud, costo_empleado, costo_servicios, costo_total, ingreso_total) VALUES
(1, 1, 350.10, 2150.10, 3615.95, 4000.00),
(2, 2, 350.10, 850.75, 1500.50, 1800.00),
(3, 3, 350.10, 1230.10, 2150.95, 3000.00),
(4, 4, 350.10, 425.80, 900.30, 1100.00),
(5, 5, 350.10, 450, 780.60, 950.00);