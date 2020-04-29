CREATE TABLE "estados" (
"codigoestado" int4 NOT NULL,
"descripcion" varchar COLLATE "default",
CONSTRAINT "estado_pkey" PRIMARY KEY ("codigoestado") 
)
WITHOUT OIDS;
ALTER TABLE "estados" OWNER TO "postgres";

CREATE TABLE "items" (
"codigoitem" int4 NOT NULL,
"descripcion" varchar COLLATE "default",
CONSTRAINT "item_pkey" PRIMARY KEY ("codigoitem") 
)
WITHOUT OIDS;
ALTER TABLE "items" OWNER TO "postgres";

CREATE TABLE "productos" (
"codigoproducto" int4 NOT NULL,
"descripcion" varchar(50) COLLATE "default",
"tipo_vehiculo" int4,
"duracion" date,
"estado" int4,
"codigoitem" int4,
CONSTRAINT "productos_pkey" PRIMARY KEY ("codigoproducto") 
)
WITHOUT OIDS;
ALTER TABLE "productos" OWNER TO "postgres";

CREATE TABLE "servicios" (
"codigoservicio" int4 NOT NULL,
"codigousuario" int4,
"codigoproducto" int4,
"codigovehiculo" int4,
"nombre" varchar COLLATE "default",
"apellido" varchar COLLATE "default",
"placa" varchar COLLATE "default",
"estado" int4,
CONSTRAINT "servicios_pkey" PRIMARY KEY ("codigoservicio") 
)
WITHOUT OIDS;
ALTER TABLE "servicios" OWNER TO "postgres";

CREATE TABLE "usuarios" (
"codigousuario" int4 NOT NULL,
"nombre" varchar COLLATE "default",
"apellido" varchar COLLATE "default",
"login" varchar COLLATE "default",
"clave" varchar COLLATE "default",
"tipo_usuario" int4,
"estado" int4,
CONSTRAINT "usuarios_pkey" PRIMARY KEY ("codigousuario") 
)
WITHOUT OIDS;
ALTER TABLE "usuarios" OWNER TO "postgres";

CREATE TABLE "vehiculos" (
"codigo_tipo_vehiculo" int4 NOT NULL,
"descripcion" varchar COLLATE "default",
CONSTRAINT "vehiculo_pkey" PRIMARY KEY ("codigo_tipo_vehiculo") 
)
WITHOUT OIDS;
ALTER TABLE "vehiculos" OWNER TO "postgres";


ALTER TABLE "productos" ADD CONSTRAINT "fk_estados_productos" FOREIGN KEY ("estado") REFERENCES "estados" ("codigoestado") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;
ALTER TABLE "productos" ADD CONSTRAINT "fk_items_productos" FOREIGN KEY ("codigoitem") REFERENCES "items" ("codigoitem") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;
ALTER TABLE "productos" ADD CONSTRAINT "fk_tipovehiculo_productos" FOREIGN KEY ("tipo_vehiculo") REFERENCES "vehiculos" ("codigo_tipo_vehiculo") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;
ALTER TABLE "servicios" ADD CONSTRAINT "fk_codigoproducto" FOREIGN KEY ("codigoproducto") REFERENCES "productos" ("codigoproducto") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;
ALTER TABLE "servicios" ADD CONSTRAINT "fk_codigousuario" FOREIGN KEY ("codigousuario") REFERENCES "usuarios" ("codigousuario") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;
ALTER TABLE "servicios" ADD CONSTRAINT "fk_estados" FOREIGN KEY ("estado") REFERENCES "estados" ("codigoestado") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;
ALTER TABLE "servicios" ADD CONSTRAINT "fk_tipovehiculo" FOREIGN KEY ("codigovehiculo") REFERENCES "vehiculos" ("codigo_tipo_vehiculo") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;
ALTER TABLE "usuarios" ADD CONSTRAINT "fk_estados_usuarios" FOREIGN KEY ("estado") REFERENCES "estados" ("codigoestado") MATCH FULL ON DELETE NO ACTION ON UPDATE NO ACTION DEFERRABLE INITIALLY DEFERRED;

