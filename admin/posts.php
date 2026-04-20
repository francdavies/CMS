<?php include "includes/admin-header.php"?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin-navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small><?php echo $_SESSION['username'] ?></small>
                        </h1>

                        <?php 
                        if(isset($_GET['source'])){

                            $source = $_GET['source'];

                        } else {
                            $source = '';
                        }

                        switch($source) {

                            case 'add-post';
                            include "includes/add-post.php";
                            break;

                            case 'edit-post';
                            include "includes/edit-post.php";
                            break;

                            case '200';
                            echo "NICE 200";
                            break;

                            default:

                            include "includes/view-all-posts.php";

                            break;

                        }

                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/admin-footer.php"?>