# 🤝 Contribuindo para Teste Learn Commit

Obrigado por considerar contribuir! Aqui estão as diretrizes.

## 📋 Código de Conduta

Seja respeitoso, inclusivo e profissional ao interagir com a comunidade.

## 🔄 Processo de Contribuição

### 1. Faça um Fork

```bash
git clone https://github.com/seu-usuario/teste.learn.commit.git
cd teste.learn.commit
```

### 2. Setup de Desenvolvimento

```bash
composer install
cp .env.example .env.testing
php artisan key:generate --env=testing
npm install
npm run build
```

### 3. Crie uma Branch de Feature

```bash
git checkout -b feature/sua-feature-descritiva
# ou para bugfix
git checkout -b bugfix/descricao-do-bug
```

**Padrão de branches:**
- `feature/` - Nova funcionalidade
- `bugfix/` - Correção de bug
- `docs/` - Documentação
- `refactor/` - Refatoração de código

### 4. Faça Suas Mudanças

Siga as boas práticas:
- Código limpo e legível
- PSR-12 coding standards
- Type hints em métodos
- Testes para novas features
- Documentação atualizada

```bash
# Formatar código com Pint
./vendor/bin/pint

# Rodar testes
composer test

# Com cobertura
php artisan test --coverage
```

### 5. Commit com Mensagens Claras

```bash
git commit -m "feat: adiciona nova funcionalidade X"
```

**Prefixos recomendados:**
- `feat:` - Nova funcionalidade
- `fix:` - Correção de bug
- `docs:` - Documentação
- `style:` - Formatação (sem mudanças lógicas)
- `refactor:` - Refatoração de código
- `test:` - Testes
- `chore:` - Manutenção

### 6. Push e Abra um Pull Request

```bash
git push origin feature/sua-feature
```

Abra um PR no GitHub com:
- Título descritivo
- Descrição clara do que foi mudado
- Referência a issues (ex: "Closes #123")
- Checklist de testes

## 🧪 Padrões de Código

### PHP/Laravel

Exemplo de código bem estruturado:

```php
namespace App\Services;

use App\Models\User;

class UserService
{
    /**
     * Cria um novo usuário
     *
     * @param array $data
     * @return User
     */
    public function create(array $data): User
    {
        return User::create($data);
    }
    
    /**
     * Atualiza um usuário
     *
     * @param User $user
     * @param array $data
     * @return bool
     */
    public function update(User $user, array $data): bool
    {
        return $user->update($data);
    }
}
```

### Testes

```php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_user_can_be_created(): void
    {
        $response = $this->post('/users', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);
    }
}
```

## 🛠️ Ferramentas de Desenvolvimento

```bash
# Formatar código (Laravel Pint)
./vendor/bin/pint

# Análise estática (Laravel Pint em modo strict)
./vendor/bin/pint --test

# Testes unitários
php artisan test

# Testes com cobertura
php artisan test --coverage

# Testes específicos
php artisan test tests/Unit/ExampleTest.php

# Usando composer
composer test
```

## ✅ Checklist para PR

- [ ] Código segue PSR-12
- [ ] Rodei `./vendor/bin/pint`
- [ ] Testes adicionados/atualizados
- [ ] Testes passam (`composer test`)
- [ ] Documentação atualizada
- [ ] Commits com mensagens claras
- [ ] Branch atualizada com `main`
- [ ] Sem warnings ou erros

## 📝 Tipos de Contribuição

### 🐛 Bug Fixes
1. Abra uma issue descrevendo o bug
2. Crie PR com o fix
3. Referencie a issue no PR

### ✨ Features Novas
1. Abra uma issue propondo a feature
2. Aguarde feedback antes de implementar
3. Crie PR quando implementar

### 📚 Documentação
1. Fixes e melhorias são bem-vindos
2. Mantenha exemplos atualizados
3. Corrija typos quando encontrar

## ❓ Dúvidas?

- Abra uma [Discussion](https://github.com/sr-jalves/teste.learn.commit/discussions)
- Consulte a [Documentação](https://laravel.com/docs)
- Abra uma Issue se encontrar algo confuso

## 🙏 Agradecimentos

Obrigado por contribuir! Cada contribuição faz diferença! 🎉
