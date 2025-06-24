<?php 
require __DIR__ . '/layout/header.php'; 
require_once 'security\CsrfToken.php';
$token = CsrfToken::gerarToken('login')
?>

<h2>Login</h2>

<?php if (isset($error)): ?>
    <p class="text-danger">
        <?php echo $error; ?>
    </p>
<?php endif; ?>

<form action="login" method="post">
    <label>Usuário</label>

    <input type="hidden" name="csrf_token" value="<?= $token ?>">
    <input type="text" name="username" required>

    <label>Senha</label>
    <input type="password" name="password" required>
    
    <button type="submit" class="btn btn-primary">Entrar</button>
</form>

<p>Usuario: admin - Senha: admin123</p>
<p>Usuario: usuario1 - Senha: usuario123</p>

<?php require __DIR__ . '/layout/footer.php'; ?>