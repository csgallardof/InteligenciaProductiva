SELECT solucions.id, problema_solucion, verbo_solucion, sujeto_solucion, complemento_solucion, coordinador_zonal_solucion, responsable_solucion, 
(select users.name from users inner join actor_solucion on users.id = actor_solucion.user_id where actor_solucion.solucion_id = solucions.id limit 1) as responsable_sistema,
corresponsable_solucion, sistematizador_solucion, lider_mesa_solucion, solucions.tipo_fuente, IF(solucions.tipo_fuente = 1, "Mesas de Competitividad", "CCPT") as Tipo_Mesa, 
ambits.nombre_ambit, eventos.nombre_evento, instrumentos.nombre_instrumento, provincias.nombre_provincia, sectors.nombre_sector, sipocs.nombre_sipoc, 
tipo_empresa.nombre_tipo_empresa, estado_solucion.nombre_estado, supuestos_cumplimientos, riesgos_cumplimiento, plazo_cumplimiento, fecha_cumplimiento,
actividades.comentario, actividades.created_at
FROM inteligencia.solucions
inner join ambits on solucions.ambit_id = ambits.id
inner join eventos on solucions.evento_id = eventos.id
inner join instrumentos on solucions.instrumento_id = instrumentos.id
inner join provincias on solucions.provincia_id = provincias.id
inner join sectors on solucions.sector_id = sectors.id
inner join sipocs on solucions.sipoc_id = sipocs.id
inner join tipo_empresa on solucions.tipo_empresa_id = tipo_empresa.id
inner join estado_solucion on solucions.estado_id = estado_solucion.id
inner join actor_solucion on solucions.id = actor_solucion.solucion_id
inner JOIN actividades on actividades.solucion_id = solucions.id;



