<!--<nav class="navbar navbar-inverse navbar-fixed-top bg-primary" role="navigation">-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #1f4e5f;">
    
    <div class="container">
        
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><strong>F<sub>D</sub> Blog</strong></a>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                
                <?php 
                $query= "SELECT * FROM categories";
                $select_all_categories_query = mysqli_query($connection, $query);
                
                while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                    $cat_title = $row['cat_title'];
                    
                    echo "<li><a href='#'>{$cat_title}</a></li>";
                }
                
                ?>
            </ul>
            <ul class="nav navbar-right top-nav">
                 <li>
                    <a href="includes/login-page.php"><button class="btn btn-default">Sign In</button></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        
    </div>
    <!-- /.container -->
    
</nav>