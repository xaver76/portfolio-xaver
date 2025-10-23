# Generación automatizada de reportes

## Descripción general
Ejemplo de módulo desarrollado en CodeIgniter 3 para la creación automática de reportes a partir de datos almacenados en una base MySQL.  
El sistema permite exportar resultados en formato Excel o PDF, integrando herramientas externas de generación de documentos.

---

## Alcance técnico
- Generación de reportes PDF mediante **TCPDF**.  
- Exportación a Excel utilizando **PHPExcel**.  
- Filtrado dinámico por fecha, usuario y estado.  
- Control de errores, registro en logs y separación de capas.  
- Posibilidad de ejecución manual o automática mediante cronjob.  
- Código preparado para ampliarse con nuevas columnas o plantillas de diseño.

---

## Resultados
Tras la optimización del flujo de consultas SQL y la reducción de carga innecesaria,  
el tiempo total de generación pasó de aproximadamente **120 segundos a menos de 5 segundos**.  
El sistema resultante puede integrarse en entornos administrativos, operativos o de control diario.

---

## Tecnologías utilizadas
- PHP  
- CodeIgniter 3.x  
- MySQL  
- TCPDF  
- PHPExcel  
- jQuery  
- AJAX

---

## Archivos incluidos
- **generador_excel_pdf.php:** ejemplo funcional del módulo.  
- **README.md:** documentación técnica del proceso.

---

## Observaciones
Este ejemplo se basa en una estructura modular utilizada en entornos productivos reales.  
Puede adaptarse fácilmente a cualquier proyecto que requiera generación recurrente de reportes con datos en MySQL.
