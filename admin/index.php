<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
    <div class="inner-body">
        <div class="login-box">
            <div class="login-logo-container">
                <img src="../images/login.jpg" alt="">
                <h1><span>E-HALAL</span> <br> BTECHenyo</h1>
            </div>
            <p class="text-center text-smaller">A WEB-BASED VOTING SYSTEM FOR<br>DALUBHASAANG POLITEKNIKO NG LUNGSOD NG BALIWAG</p>

            <div class="login-box-body">
                <p class="text-center text-smaller lined"><span>WELCOME ADMIN</span></p>
                <form action="login.php" method="POST" role="presentation" autocomplete="off">
                    <div class="form-group has-feedback">
                        <input type="text" autocomplete="off" class="form-control username" name="username" placeholder="ENTER YOUR USERNAME" required>
                        <span class="fa fa-fingerprint form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" autocomplete="off" class="form-control password" name="password" placeholder="ENTER YOUR PASSWORD" required>
                        <span class="fa fa-key form-control-feedback"></span>
                        <span class="forgot-password"><a href="#">Forgot Password?</a></span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat custom" name="login">LOGIN</button>
                </form>
            </div>
            <?php
            if (isset($_SESSION['error'])) {
                echo "
                    <div class='callout callout-danger text-center mt20'>
                        <p>" . $_SESSION['error'] . "</p>
                    </div>
                ";
                unset($_SESSION['error']);
            }
            ?>
        </div>
        <?php include 'includes/scripts.php'; ?>
    </div>
</body>
<?php include 'includes/scripts.php'; ?>
</html>
