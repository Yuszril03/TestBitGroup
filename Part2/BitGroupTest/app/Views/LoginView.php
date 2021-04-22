<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="<?= base_url() ?>/Bootstrap/images/icon.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/Bootstrap/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?= base_url() ?>/Bootstrap/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Masuk</h2>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <?php if (session()->getFlashdata('pesan')) { ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Opss!</strong> Username dan Kata Sandi Salah
                        </div>
                    <?php } ?>
                    <div class="login-wrap p-0">
                        <form action="<?= base_url() ?>/Masuk" method="POST" class="signin-form">
                            <?php csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="pass" type="password" class="form-control" placeholder="Kata Sandi" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
                            </div>

                        </form>
                        <p class="w-100 text-center">&mdash; Username : Admin & Kata Sandi : Admin &mdash;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url() ?>/Bootstrap/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/Bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>/Bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/Bootstrap/js/main.js"></script>

</body>

</html>