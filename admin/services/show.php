<?php require('../includes/header.php'); ?>

<body class="app">
    <?php require('../includes/navbar.php'); ?>
    <?php require('../includes/sidebar.php'); ?>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Add User</h1>
                <a class="btn btn-primary btn-sm text-white" href="index.php" role="button"> Manage Users </a>
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
                                $conn->close();
                                ?>

                                <form class="settings-form" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label"> Icon</label>
                                        <input type="text" name="icon" readonly class="form-control" id="setting-input-1" value="<?php echo $data['icon']; ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Title </label>
                                        <input type="text" name="title" readonly class="form-control" id="setting-input-2" value="<?php echo $data['title']; ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label"> Description</label>
                                        <input type="text" name="description"readonly  class="form-control" id="setting-input-3" value="<?php echo $data['description']; ?>">
                                    </div>
                                </form>
                            </div><!--//app-card-body-->

                        </div><!--//app-card-->
                    </div>
                </div><!--//row-->
            </div><!--//container-fluid-->
        </div><!--//app-content-->

        <?php require('../includes/footer.php'); ?>