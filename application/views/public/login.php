<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.31
 */
?>
<!doctype html>
<html>
    <?php require 'assets/head.php'; ?>
    <body>
        <div class="container">
            <div class="container">
                <form class="form" action="<?php echo base_url('login/cek_login'); ?>" method="post">
                    <input type="text" name="username" placeholder="Username"><br><br>
                    <input type="password" name="password" placeholder="Password"><br><br>
                    <div>
                        <button class="btn" name="submit">Login</button>
                    </div>
                </form>
            </div>
            <?php require 'assets/footer.php'; ?>
        </div>
    </body>
</html>
