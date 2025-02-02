<!DOCTYPE html>
<html>

<head>
    <title>Admin Signup</title>
    <link rel='stylesheet' href='../../assets/css/admin/global.css'>
    <link rel='stylesheet' href='../../assets/css/admin/view-signup.css'>
</head>

<body>
    <form id="signup_form" method="POST" enctype="multipart/form-data" action='../../control/admin/reg_control.php'">
    <h1>Admin Signup</h1>
    <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name='first_name' id='first_name'></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name='last_name' id='last_name'></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td><input type='email' name='email' id='email'></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name='username' id='username'> </td>
                <td class='validation-error' id="username-error">username must be at least 4 characters long.</td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name='password' id='password'></td>
                <td class='validation-error' id="password-error">password must be at least 6 characters long.</td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td> <input type="password" id='confirm_password'></td>
                <td class='validation-error' id="confirm-password-error">passwords do not match.</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td> <input name='phone' id='phone'> </td>
                <td class='validation-error' id="phone-error">must supply phone number.</td>
            </tr>
            <tr>
                <td>Profile Photo</td>
                <td><input type="file" name="profile_photo" id="profile_photo"></td>
            </tr>
            <tr>
                <td>Admin Auth Code</td>
                <td><input type="password" name='admin_auth_code' id='admin_auth_code'></td>
                <td class='validation-error' id="auth-code-error">must supply an admin auth code.</td>
            </tr>
            <tr>
                <td>Security Question</td>
                <td>
                    <select id="sec_question" name="sec_question" size='1'>
                        <option value="fav_col">Favorite Color?</option>
                        <option value="primary_school">Name of your primary school?</option>
                        <option value="mothers_middle_name">Your mothers middle name?</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Answer</td>
                <td><input type='text' name='sec_question_ans' id='sec_question_ans'></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value='Signup'>
                    <input type="reset" value='Reset'>
                </td>
            </tr>
        </table>
        <div id="have-account-container">
            <span>Already have an account?</span> <a id='have-account-link' href="login.php">Login</a>
        </div>
    </form>

<script src="../../assets/js/admin/signup.js"></script>
</body>

</html>
