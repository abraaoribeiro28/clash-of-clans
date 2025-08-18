# Clash Of Clans

O projeto consome a **API oficial do Clash of Clans** para **ranqueamento de jogadores, clãs e ligas**, além de permitir buscas por clãs e jogadores.  
Desenvolvido em **Laravel + Livewire**, com interface responsiva e dinâmica.

---

## Funcionalidades

-  **Ranking de Jogadores** – classificação brasileira baseada em troféus.  
-  **Ranking de clãs** – classificação dos clãs por troféus.  
-  **Ligas** – listagem das principais ligas.  
-  **Busca** – pesquisa de clãs e jogadores por nome, tag e filtros adicionais.
-  **Ranqueamento da Plataforma** – classificação dos jogadores cadastrados na plataforma, mostrando sua posição. 

---

## ⚙️ Tecnologias Utilizadas

- [Laravel](https://laravel.com)  
- [Livewire](https://livewire.laravel.com/)  
- [TailwindCSS](https://tailwindcss.com/)  
- Banco de dados: **SQLite** (dev) 

---

## 🚀 Instalação e Uso

### Pré-requisitos
- PHP 8.2+
- Composer
- Node.js + NPM
- SQLite ou Mysql/PostgreSQL

### Passos
```bash
# Clonar o repositório
git clone https://github.com/abraaoribeiro28/clash-of-clans.git
cd clash-of-clans

# Instalar dependências
composer install

# Instalar dependências frontend
npm install && npm run build

# Criar arquivo de configuração
cp .env.example .env

# Se for usar SQLite, crie um arquivo `database/database.sqlite` e ajuste no `.env`:

DB_CONNECTION=sqlite  
DB_DATABASE=/caminho/para/seu/database/database.sqlite

# Para outros bancos (MySQL, PostgreSQL), configure as variáveis `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD` conforme seu ambiente.

# Adicione o token da api no .env (entre aspas "")
CLASH_API_TOKEN=

# Gerar chave da aplicação
php artisan key:generate

# Rodar migrations
php artisan migrate --seed

# Iniciar servidor
php artisan serve
