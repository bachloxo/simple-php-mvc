<?php require('backend/views/common/header.php'); ?>
<body id="minovate" class="appWrapper">
    <div id="wrap" class="animsition">
            <?php require('backend/views/common/navbar.php'); ?>
            <?php require('backend/views/common/sidebar.php'); ?>
            <!-- BEGIN CONTENT -->
            <?php require('backend/views/blog/form.php'); ?>
            <!-- END CONTENT -->     
     </div><!--/wrap-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
        });
    </script>
<?php require('backend/views/common/footer.php'); ?>