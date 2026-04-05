# wax

simple calculator for candle making. allows you to get measurements for wax/scent liquid proportions. desired liquid percentage based on wax weight. Vanilla JavaScript with Bootstrap 3 theme.

## Containerization

This application is fully containerized using Docker and Nginx.

### Quick Start with Docker Compose

```bash
# Build and run the application
docker-compose up --build

# Or run in background
docker-compose up -d --build
```

The application will be available at `http://localhost:8080`

### Manual Docker Build

```bash
# Build the image
docker build -t wax-app .

# Run the container
docker run -p 8080:80 wax-app
```

### Docker Configuration

- **Base Image**: `nginx:alpine` for minimal size
- **Port**: 80 (mapped to 8080 on host)
- **Health Check**: Built-in health monitoring
- **Optimization**: Gzip compression, caching headers, security headers

### Files

- `Dockerfile`: Multi-stage build configuration
- `docker-compose.yml`: Development and deployment orchestration
- `nginx.conf`: Optimized nginx configuration
- `.dockerignore`: Excludes unnecessary files from build context

## Development

Open `index.html` in your browser to test locally.