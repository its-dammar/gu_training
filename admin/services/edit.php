<?php require('../includes/header.php'); ?>

<body class="app">
    <?php require('../includes/navbar.php'); ?>
    <?php require('../includes/sidebar.php'); ?>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Add service</h1>
                <a class="btn btn-primary btn-sm text-white" href="index.php" role="button"> Manage services </a>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-12">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <?php
                                if(isset($_GET['id'])){
                                    $id =$_GET['id'];

                                    $select= "SELECT *FROM services WHERE id =$id";
                                    $result = mysqli_query($conn, $select);
                                    $data=mysqli_fetch_assoc($result);
                                }

                                if (isset($_POST['save'])) {
                                    $icon = $_POST['icon'];
                                    $title = $_POST['title'];
                                    $description = $_POST['description'];

                                    if ($icon == "" || $title == "" || $description == "" ) {
                                        echo "<div class='alert alert-danger'>All fields are Required</div>";
                                        echo "<meta http-equiv=\"refresh\" content=\"2;URL=create.php\">";
                                    } else {
                                        $insert = "UPDATE services SET icon= '$icon', title ='$title', description='$description' WHERE id=$id";
                                        $result = mysqli_query($conn, $insert);
                                        if ($result) {
                                            echo '<div class="alert alert-success">service udated successfully</div>';
                                            // header("Location: index.php");
                                            echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
                                        } else {
                                            echo '<div class="alert alert-danger">An error occurred</div>';
                                        }
                                    }
                                }
                                $conn->close();

                                ?>

                                <form class="settings-form" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label"> Icon</label>
                                        <input type="text" name="icon" class="form-control" id="setting-input-1" value="<?php echo $data['icon']; ?>" placeholder="e.g. fa-solid fa-users" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Contact </label>
                                        <input type="text" name="title" class="form-control" id="setting-input-2" value="<?php echo $data['title']; ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label"> Address</label>
                                        <input type="text" name="description" class="form-control" id="setting-input-3" value="<?php echo $data['description']; ?>">
                                    </div>
                                    <button type="submit" name="save" class="btn app-btn-primary">Save Changes</button>
                                </form>
                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
            </div><!--//container-fluid-->
        </div><!--//app-content-->

        <?php require('../includes/footer.php'); ?>