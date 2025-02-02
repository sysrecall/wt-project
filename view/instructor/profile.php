<?php 
session_start();

if (!isset($_SESSION['full_name'])) {
    header("Location: ../../login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Portal</title>
    <link rel="stylesheet" href="../../assets/css/instructor/profile.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Instructor Portal</h2>
            <nav>
                <ul>
                    <li><a href="dashboard.php"><span><img src="../../assets/uploads/instructor/dashboard.svg" alt="Profile Picture"  width="18" height="12"></span>Dashboard</a></li>
                    <li><a href="courses.php"><span><img src="../../assets/uploads//instructor/course.svg" alt="Profile Picture"  width="18" height="12"></span>Courses</a></li>
                    <li><a href="Student_management.php"><span><img src="../../assets/uploads/instructor/grade.svg" alt="Profile Picture"  width="15" height="14"></span>Student Management</a></li>
                    <li><a href="certificates.php"><span><img src="../../assets/uploads/instructor/certificate.svg" alt="Profile Picture"  width="20" height="15"></span>Certificates</a></li>
                    <li><a href="profile.php" class="active"><span><img src="../../assets/uploads/instructor/profile.svg" alt="Profile Picture"  width="18" height="12"></span>Profile</a></li>
                </ul>
            </nav>
            <form action="../../control/instructor/logout_control.php">
                <input type="submit" value="logout" class="logout">
            </form>
        </div>


        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
            <h2>Welcome to Profile page</h2>
                <div class="user-info">
                    <span>
                        <?php echo $_SESSION['full_name'] ?? '' ?>
                    </span>
                    <a href="mailto:">
                        <?php echo $_SESSION['email'] ?? ''?>
                    </a>
                </div>
            </div>
             <!-- Profile Content -->
              <h2>Profile</h2>
            <div class="profile-container">
                <div class="profile-content">
                    <div class="profile-info">
                    <img src="<?php echo $_SESSION['profile_picture'] ?? ''; ?>" alt="Profile Picture">
                        <div class="info">
                        <h2><?php echo $_SESSION['full_name'] ?? '' ?></h2>
                        <p>Instructor</p>
                        <div class="details">
                            <div>
                             <span>Email:</span>
                              <p><?php echo $_SESSION['email'] ?? '' ?></p>
                            </div>
                            <div>
                             <span>Qualifications:</span>
                              <p><?php echo $_SESSION['qualifications'] ?? '' ?></p>
                            </div>
                            <div>
                             <span>Contact:</span>
                              <p><?php echo $_SESSION['phone'] ?? '' ?></p>
                            </div>
                            <div>
                             <span>Expertise:</span>
                              <p><?php echo $_SESSION['expertise'] ?? '' ?></p>
                            </div>
                            <div>
                             <span>Experience:</span>
                              <p><?php echo $_SESSION['teaching_experience'] ?? '' ?> Years</p>
                            </div>
                            <div>
                             <span>Institution:</span>
                              <p><?php echo $_SESSION['institution'] ?? '' ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
                    
            <div class="actions">
                <form action="update.php" method="POST" >
                    <button type="submit" class="edit-profile">Edit Profile</button>
                </form>
                <!-- <button class="change-password">Change Password</button> -->
            </div>

                    

            
        </div>
    </div>
</body>
</html>
