    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Shop</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <?php
                    foreach($pages as $page_name => $page_url) {

                        $li_class = '';
                        if ($page_url == $current_page) {
                            $li_class = 'active';
                        }
                    ?>
                    <li class="<?= $li_class ?>"><a href="<?= $page_url ?>"><?= $page_name ?></a></li>
                    <?php } ?>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a id="cart-products-dropdown" href="javascript:;" class="dropdown-toggle<?= empty($_SESSION['cart']) ? ' disabled' : '' ?>" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> <span id="cart-products-count" class="badge"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span><span class="caret"></span></a>
                        <ul id="cart-products" class="dropdown-menu dropdown-cart" role="menu">
                            <?php include_once 'ajax-cart-products.php' ?>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="search" action="search.php" method="GET">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search" value="<?= @$_GET['q'] ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><span class=" glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><!-- .navbar -->