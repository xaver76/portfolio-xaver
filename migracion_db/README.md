# Migración y normalización de base de datos

## Descripción general
Ejemplo práctico de migración de datos entre dos estructuras MySQL dentro de un proyecto CodeIgniter 3.  
El objetivo principal es preservar la integridad de los registros mientras se moderniza el modelo de datos.

---

## Alcance técnico
- Lectura controlada de la tabla origen (`usuarios_old`).  
- Validación de datos y limpieza de campos antes de la inserción.  
- Estandarización de formato (minúsculas, trim, tipos numéricos).  
- Inserción segura en la tabla destino (`usuarios`).  
- Posibilidad de extender el proceso con logs, respaldos o notificaciones.

---

## Resultados
La migración resultó estable y reproducible.  
Se eliminaron duplicidades y se mejoró la consistencia de la información.  
El nuevo esquema de base de datos cumple con los principios de la **tercera forma normal (3FN)**, reduciendo el riesgo de errores y mejorando la velocidad de las consultas.

---

## Tecnologías utilizadas
- PHP  
- CodeIgniter 3.x  
- MySQL  
- jQuery  
- AJAX

---

## Archivos incluidos
- **script_migracion.php:** ejemplo funcional de la rutina de migración.  
- **README.md:** documentación descriptiva del proceso.

---

## Observaciones
Este ejemplo está orientado a entornos donde se requiere reorganizar datos antiguos o consolidados.  
El enfoque modular permite reutilizar el esquema para futuras migraciones o integraciones entre bases de datos con estructuras diferentes.
