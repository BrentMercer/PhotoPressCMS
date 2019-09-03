<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) { redirect("login.php");} ?>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php include("includes/top_nav.php"); ?>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include("includes/side_nav.php"); ?>
        
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard
                        <small>Subheading</small>
                    </h1>

                    <?php

                    // Testing create with associative array
                    // $user = new User();
                    // $user->username = "grod555";
                    // $user->password = "334455";
                    // $user->first_name = "Gavin";
                    // $user->last_name = "Rosdale";
                    // $user->create();

                    // Testing update with associative array
                    // $user = User::find_user_by_id(10);
                    // $user->username = "crunk567";
                    // $user->password = "popo90";
                    // $user->first_name = "Frank";
                    // $user->last_name = "Columbo";

                    // $user->update();
                    
                    // Testing create new user                        
                    // $photo = new Photo();

                    // $photo->title = "Photo of lake";
                    // $photo->size = 10;

                    // $photo->create();

                    echo "mountains.jpg";

                    // Testing update user last name
                    // $user = User::find_user_by_id(5);
                    // $user->last_name = "WILLIAMS";
                    // $user->update();

                    // Testing delete user
                    // $user = User::find_user_by_id(8);
                    // $user->delete();

                    // Testing update user record on save
                    // $user = User::find_user_by_id(9);
                    // $user->first_name = "Charles";
                    // $user->last_name = "Dupont";
                    // $user->password = "123456";
                    // $user->save();

                    // Testing add user if username does not exist
                    // $user = new User();
                    // $user->username = "Samuel";
                    // $user->save();

                    //  Testing photo class
                    // $photos = Photo::find_all();
                    // foreach ($photos as $photo) {
                    //     echo $photo->title;
                    // }


                    ?>



                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>