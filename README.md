# 📚 Teste Learn Commit

Projeto de aprendizado com Laravel. Explore, aprenda e pratique com Git commits!

## ✨ Features

- 🎓 **Aprendizado Prático** - Exercícios guiados com commits
- 🔄 **Histórico Git** - Acompanhe mudanças e commits
- 🧪 **Testes Completos** - PHPUnit e testes integrados
- ⚡ **Stack Moderno** - Laravel 10+ com PHP 8.1+

## 🚀 Tech Stack

- **Laravel 10+** - Framework PHP moderno
- **PHP 8.1+** - Linguagem servidor
- **MySQL/PostgreSQL** - Banco de dados
- **Vite** - Build tool para assets
- **PHPUnit** - Testes unitários
- **Blade** - Template engine

## 📋 Pré-requisitos

- PHP 8.1+
- Composer
- Node.js 16+
- npm ou yarn
- MySQL ou PostgreSQL

## 🔧 Instalação Rápida

```bash
# Clone o repositório
git clone https://github.com/sr-jalves/teste.learn.commit.git
cd teste.learn.commit

# Instale dependências PHP
composer install

# Instale dependências Node.js
npm install

# Configure o arquivo .env
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Execute as migrações
php artisan migrate

# Compile os assets
npm run build

# Inicie o servidor
php artisan serve
```

## 🚀 Desenvolvimento

```bash
# Inicie o servidor
php artisan serve

# Em outro terminal, compile assets em tempo real
npm run dev

# Ou rode tudo junto com concurrently
composer run dev
```

## 🧪 Testes

```bash
# Execute todos os testes
php artisan test

# Com cobertura de código
php artisan test --coverage

# Teste específico
php artisan test tests/Feature/ExampleTest.php

# Usando composer
composer test
```

## 📚 Estrutura do Projeto

```
teste.learn.commit/
├── app/
│   ├── Models/             # Modelos Eloquent
│   ├── Http/
│   │   ├── Controllers/   # Controllers
│   │   └── Requests/      # Form Requests
│   ├── Services/           # Lógica de negócio
│   └── ...
├── database/
│   ├── migrations/         # Migrações
│   ├── seeders/            # Seeders
│   └── factories/          # Factories
├── resources/
│   ├── views/              # Templates Blade
│   ├── css/                # Estilos CSS
│   └── js/                 # JavaScript
├── routes/                 # Definições de rotas
├── tests/                  # Testes unitários e feature
├── .github/
│   └── workflows/          # CI/CD workflows
├── config/                 # Configurações
├── composer.json
├── package.json
├── README.md
├── CONTRIBUTING.md
└── LICENSE
```

## 🎯 Como Contribuir

Veja [CONTRIBUTING.md](./CONTRIBUTING.md) para detalhes completos.

**Resumido:**
1. Crie uma branch `feature/sua-feature`
2. Commit com mensagens claras
3. Push e abra um Pull Request
4. Aguarde review e merge

## 🐛 Reportar Bugs

Abra uma [Issue](https://github.com/sr-jalves/teste.learn.commit/issues) descrevendo:
- Passos para reproduzir
- Comportamento esperado vs atual
- Environment (PHP, Laravel, OS)
- Screenshots (se aplicável)

## 📚 Documentação Adicional

- [Laravel Documentation](https://laravel.com/docs)
- [Eloquent ORM](https://laravel.com/docs/eloquent)
- [Artisan CLI](https://laravel.com/docs/artisan)
- [Testing](https://laravel.com/docs/testing)

## 🔐 Segurança

Se encontrar uma vulnerabilidade de segurança, envie um email ao invés de abrir uma issue pública.

## 📄 Licença

MIT License - veja [LICENSE](./LICENSE) para detalhes

## 👤 Autor

**sr-jalves**
- GitHub: [@sr-jalves](https://github.com/sr-jalves)

---

**Dúvidas?** Abra uma [Discussion](https://github.com/sr-jalves/teste.learn.commit/discussions) ou [Issue](https://github.com/sr-jalves/teste.learn.commit/issues)! 🚀
