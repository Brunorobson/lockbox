# Lockbox

Aplicação PHP organizada em camadas (App/Core) com estrutura típica de MVC, separando regras de negócio, acesso a dados e views.

> Repo: `Brunorobson/lockbox`  
> Linguagem principal: PHP :contentReference[oaicite:1]{index=1}

---

## Estrutura do projeto

A estrutura abaixo aparece no repositório: :contentReference[oaicite:2]{index=2}

- `App/` — camada de aplicação (controllers, serviços, casos de uso, etc.)
- `Core/` — núcleo do projeto (helpers, abstrações, bootstrap, etc.)
- `Database/` — arquivos relacionados a banco (scripts, seeds, migrations ou dumps — depende do projeto)
- `Views/` — templates/páginas
- `config/` — configurações do app
- `public/` — pasta pública (ponto de entrada, assets, etc.)
- `.env` — variáveis de ambiente (config local)
- `composer.json` / `composer.lock` — dependências via Composer
- `pint.json` — configuração do Laravel Pint (formatação de código)

---

## Requisitos

- PHP (recomendado 8.1+)
- Composer
- (Opcional) Banco de dados (depende do que estiver configurado em `Database/` e no `.env`)

---

## Instalação

1) Clone o repositório:

```bash
git clone https://github.com/Brunorobson/lockbox.git
cd lockbox
