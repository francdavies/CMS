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
            Welcome Back,
            <small><?php echo $_SESSION['username'] ?>!</small>
        </h1>
    </div>
</div>

                <!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">

            <div class="panel-heading bg-warning">
                <div class="row">

                    <div class="col-xs-3">
                        <i class="fa-regular fa-address-card fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                    <?php
                    $query = "SELECT * FROM posts";
                    $select_all_post = mysqli_query($connection, $query);
                    $post_counts = mysqli_num_rows($select_all_post);

                    echo "<div class='huge'>{$post_counts}</div>";
                    ?>
                        <div>Posts</div>
                    </div>
                </div>
            </div>

            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">See more..</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">

            <div class="panel-heading bg-success">
                <div class="row">

                    <div class="col-xs-3">
                        <i class="fa-regular fa-comment-dots fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                    <?php
                    $query = "SELECT * FROM comments";
                    $select_all_comments = mysqli_query($connection, $query);
                    $comment_count = mysqli_num_rows($select_all_comments);

                    echo "<div class='huge'>{$comment_count}</div>";
                    ?>
                      <div>Comments</div>
                    </div>

                </div>
            </div>
            
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">See more..</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-info">

            <div class="panel-heading bg-info">
                <div class="row">

                    <div class="col-xs-3">
                        <i class="fa-regular fa-user fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                    $query = "SELECT * FROM users";
                    $select_all_users = mysqli_query($connection, $query);
                    $user_count = mysqli_num_rows($select_all_users);

                    echo "<div class='huge'>{$user_count}</div>";
                    ?>
                    <div> Users</div>
                    </div>

                </div>
            </div>

            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">See more..</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">

            <div class="panel-heading bg-danger">
                <div class="row">

                    <div class="col-xs-3">
                        <i class="fa-solid fa-bars-staggered fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                    $query = "SELECT * FROM categories";
                    $select_all_categories = mysqli_query($connection, $query);
                    $categories_count = mysqli_num_rows($select_all_categories);

                    echo "<div class='huge'>{$categories_count}</div>";
                    ?>
                    <div>Categories</div>
                    </div>

                </div>
            </div>

            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">See more..</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>

        </div>
    </div>

</div>
<!-- /.row -->

<?php
$query = "SELECT * FROM posts WHERE post_status = 'draft'";
$select_all_draft_posts = mysqli_query($connection, $query);
$post_draft_count = mysqli_num_rows($select_all_draft_posts);

$query = "SELECT * FROM comments WHERE comment_status = 'unapproved'";
$unapproved_comments_query = mysqli_query($connection, $query);
$unapproved_comments_count = mysqli_num_rows($unapproved_comments_query);

$query = "SELECT * FROM users WHERE user_role = 'subscriber'";
$select_all_subscribers = mysqli_query($connection, $query);
$subscriber_count = mysqli_num_rows($select_all_subscribers);

?>

    <div class="row">

        <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Data', 'Count'],

                <?php
                $element_text = ['Active Posts', 'Draft Posts', 'Comments', 'Pending Comments', 'Users', 'Subscribers', 'Categories'];
                $element_count = [$post_counts, $post_draft_count, $comment_count, $unapproved_comments_count, $user_count, $subscriber_count, $categories_count];
                for($i = 0; $i < 7; $i++) {
                    echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                }
                ?>

                ]);

                var options = {
                chart: {
                    title: '',
                    subtitle: '',
                }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
            </script>

            <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php include "includes/admin-footer.php"?>