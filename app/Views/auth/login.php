
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="shortcut icon" href="<?=base_url()?>assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/auth.css">
</head>

<body>
    <script src="<?=base_url()?>assets/static/js/initTheme.js"></script>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="/"><img src="<?=base_url()?>assets/compiled/svg/SIKOMET.svg" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
            <?= form_open('auth/loginProccess') ?>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl <? $isInvalidUser ?>"  placeholder="Username" name="username" >
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl  <? $isInvalidPass ?>" placeholder="Password" name="password" >
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <?php
                    if (session()->has('error')) {
                        echo '<p style="color:red">' . session('error') . '</p>';
                    }elseif (session()->has('success')) {
                        echo '<p style="color:green">' . session('success') . '</p>';
                    }
                ?>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            <?= form_close() ?>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="register" class="font-bold">Sign up</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
        </div>
    </div>
</div>

    </div>
</body>

</html>