# CV Web App - DevOps 2026

Aplicación web de CV online desarrollada con frontend en React y backend en PHP desplegado en Raspberry Pi.

El proyecto implementa una arquitectura CI/CD completa usando Jenkins, GitHub Actions, Cloudflare e ImageKit.

---

# Tecnologías utilizadas

## Frontend
- React
- Vercel

## Backend
- PHP
- Apache
- Raspberry Pi

## DevOps / Infraestructura
- Jenkins
- Docker
- GitHub Actions
- Cloudflare CDN
- ImageKit

---

# Arquitectura del proyecto

```text
git push
   │
   ├── GitHub Actions ──► Vercel (Frontend React)
   │
   └── Webhook ──► Jenkins ──► Apache/PHP (Backend)
                           │
                           └── Cloudflare CDN
```

---

# Requisitos previos

Antes de ejecutar el proyecto necesitas tener instalado:

- Git
- Docker
- Docker Compose
- Apache2
- PHP
- Node.js
- Cuenta GitHub
- Cuenta Cloudflare
- Cuenta ImageKit

---

# Instalación local

## Clonar el repositorio

```bash
git clone https://github.com/TU_USUARIO/TU_REPO.git
```

```bash
cd TU_REPO
```

---

# Configuración Jenkins

## Levantar Jenkins con Docker

```bash
docker compose up -d
```

## Acceder a Jenkins

```text
http://IP_RASPBERRY:8080
```

---

# Variables de entorno

## Frontend

```env
REACT_APP_API_URL=https://api.tudominio.com
```

---

# CI/CD Pipeline

El pipeline automatiza:

1. Descarga del código desde GitHub
2. Validación de archivos PHP
3. Despliegue automático en Apache
4. Reinicio del servidor web

Cada `git push` dispara automáticamente Jenkins mediante Webhook.

---

# Cloudflare

Cloudflare se utiliza para:

- HTTPS automático
- CDN global
- Caché de archivos estáticos
- Protección DDoS

---

# ImageKit

ImageKit optimiza las imágenes del proyecto:

- Conversión automática a WebP
- Compresión
- Redimensionado dinámico

---

# Despliegue

## Frontend
Desplegado automáticamente en Vercel mediante GitHub Actions.

## Backend
Desplegado automáticamente en Raspberry Pi mediante Jenkins.

---

# Autor

Maria Andreo
