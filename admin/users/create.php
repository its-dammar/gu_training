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
                    <div class="col-12 col-md-6">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <?php
                                if (isset($_POST['save'])) {
                                    $name = $_POST['name'];
                                    $phone = $_POST['phone'];
                                    $address = $_POST['address'];
                                    $email = $_POST['email'];
                                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;

                                    if ($name == "" || $phone == "" || $address == "" || $email == "" || $password == "") {
                                        echo "<div class='alert alert-danger'>All fields are required</div>";
                                    } else {
                                        $sql = "INSERT INTO users (name, phone, address, email, password) VALUES ('$name', '$phone', '$address', '$email', '$password')";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result) {
                                            echo '<div class="alert alert-success">User added successfully</div>';
                                            // header("Location: index.php");
                                            echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
                                        } else {
                                            echo '<div class="alert alert-danger">An error occurred</div>';
                                        }
                                    }
                                }
                                $conn->close();

                                ?>

                                <form class="settings-form" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label"> Name</label>
                                        <input type="text" name="name" class="form-control" id="setting-input-1" value="" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">Contact </label>
                                        <input type="text" name="phone" class="form-control" id="setting-input-2" value="" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label"> Address</label>
                                        <input type="text" name="address" class="form-control" id="setting-input-3" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label"> Email </label>
                                        <input type="email" name="email" class="form-control" id="setting-input-3" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label"> Password </label>
                                        <input type="password" name="password" class="form-control" id="setting-input-3" value="">
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