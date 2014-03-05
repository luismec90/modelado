</div>



<!-- Custom JavaScript for the Menu Toggle -->



<!-- JavaScript -->
<script src="<?= base_url() ?>assets/libs/jQuery-1.11.0/jQuery.min.js"></script>
<script src="<?= base_url() ?>assets/libs/bootstrap-3.1.1/js/bootstrap.min.js"></script>
<?php if (isset($js)) foreach ($js as $row) { ?>
        <script src="<?= base_url() ?>assets/<?= $row ?>.js"></script>
    <?php } ?>
<script src="<?= base_url() ?>assets/js/global.js"></script>
</body>
</html>
