<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 23/05/2017
 * Time: 21.54
 */
?>

<footer class="footer">
    <script src="<?php echo base_url(); ?>assets/vendors/tether/tether.min.js"></script>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery-hash-change/jquery.hashchange.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script>
        // dropdown
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });

    </script>
</footer>
