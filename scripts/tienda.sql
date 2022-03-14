use iaw_db;

create table clientes(
dni varchar(12) primary key,
nombre varchar(16),
apellidos varchar(34),
movil varchar(14),
direccion varchar(64)
);

create table productos(
codigo integer primary key,
descripcion varchar(64),
rebajas integer,
estarebajas integer,
precio decimal
);

create table proveedor(
nombre varchar(16),
cif varchar(18) primary key,
direccion varchar(64),
email varchar(32),
telefono varchar(14)
);
