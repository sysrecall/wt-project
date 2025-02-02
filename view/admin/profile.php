<?php session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

$default_profile_picture = '../../uploads/admin/profile/default.png';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Profile</title>
    <link rel='stylesheet' href='../../assets/css/admin/global.css'>
    <link rel='stylesheet' href='../../assets/css/admin/view-profile.css'>
</head>

<body>
    <div class="container">
    <?php include 'header.php' ?>
    <?php include 'navigation.php' ?>
    <div>
    <form method="POST" enctype="multipart/form-data" action='../../control/admin/update_profile.php'>
        <h2>Admin Profile</h2>
        <div class="profile-picture-viewer-container">
            <img src="<?php echo $_SESSION['profile_photo'] ?? $default_profile_picture ?? ''; ?>">
        </div>
        <table>
            <tr>
                <td><label for="admin_id">Admin ID</label></td>
                <td><label id="admin_id"><?php echo $_SESSION['admin_id'] ?? ''; ?></label></td>
            </tr>
            <tr>
                <td><label for="first_name">First Name</label></td>
                <td><input type="text" id="first_name" name="first_name" value="<?php echo $_SESSION['first_name'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="last_name">Last Name</label></td>
                <td><input type="text" id="last_name" name="last_name" value="<?php echo $_SESSION['last_name'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email" value="<?php echo $_SESSION['email'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" id="username" name="username" value="<?php echo $_SESSION['username'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password""></td>
            </tr>
            <tr>
                <td><label for="phone">Phone</label></td>
                <td><input type="tel" id="phone" name="phone" value="<?php echo $_SESSION['phone'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="profile_photo">Profile Photo</label></td>
                <td><input type="file" id="profile_photo" value="<?php echo $_SESSION['profile_picture'] ?? ''; ?>" name="profile_photo" accept="image/*"></td>
            </tr>
            <tr>
                <td><label for="sec_question">Security Question</label></td>
                <td><input type="text" id="sec_question" name="sec_question" value="<?php echo $_SESSION['sec_question'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="sec_question_ans">Security Question Answer</label></td>
                <td><input type="text" id="sec_question_ans" name="sec_question_ans" value="<?php echo $_SESSION['sec_question_ans'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td>
                    <input class="link-button" id="save-button" type="submit" value="Save Profile">
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</body>

</html>