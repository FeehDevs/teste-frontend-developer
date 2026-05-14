# Projeto Frontend Developer

## Descrição

Este projeto usa Docker para rodar a aplicação PHP + Apache e um banco de dados MySQL. A pasta `public/` contém a página principal que deve ser acessada pelo navegador.

## Requisitos

- Docker instalado
- Docker Compose instalado (ou Docker Desktop com suporte a `docker compose`)
- Estar na pasta raiz do projeto

## Como subir os containers

1. Abra o terminal no diretório do projeto:

   ```powershell
   cd (caminho do projeto)
   ```

2. Inicie os containers em modo destacado:

   ```powershell
   docker compose up -d
   ```

3. Verifique se os containers estão rodando:

   ```powershell
   docker compose ps
   ```

## Variáveis de ambiente

O projeto usa o arquivo `.env` com as seguintes configurações:

- `DB_HOST=db`
- `DB_PORT=3306`
- `DB_DATABASE=ellos_database`
- `DB_USERNAME=admin`
- `DB_PASSWORD=123456`
- `DB_ROOT_PASSWORD=root`

Essas variáveis são usadas pelo serviço PHP para conectar ao MySQL.

## Como acessar a aplicação

Abra o navegador e acesse:

```text
http://localhost:8080/public
```

Isso garante que você abra a página `public/index.php` corretamente.

## Como entrar na pasta `public` dentro do container

Se quiser acessar o container e navegar até a pasta `public`, use:

```powershell
docker compose exec app bash
cd /var/www/html/public
```

## Como parar os containers

Para parar e remover os containers, use:

```powershell
docker compose down
```

## Observações

- O serviço `app` monta todo o diretório do projeto em `/var/www/html`.
- A aplicação é servida pelo Apache no `localhost:8080`.
- A pasta `public/` é onde está o arquivo `index.php` principal do frontend.
