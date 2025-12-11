# Despliegue con Docker Compose - Proxy Inverso + Servicios PHP

Este proyecto implementa un despliegue con Docker Compose que incluye:
- Un proxy inverso Nginx que balancea carga entre servicios
- Un servicio de encuesta replicado 3 veces con balanceo ponderado
- Un servicio de chistes informáticos aleatorios

## Requisitos Previos

- Docker instalado
- Docker Compose instalado
- Permisos para modificar el archivo `/etc/hosts`

## Configuración Local

Para probar los dominios localmente, agregar estas líneas al archivo `C:\Windows\System32\drivers\etc\hosts`:
