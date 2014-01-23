<html>
<head>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/include/styles.html');
    ?>
    <link href="/assets/css/generic-form.css" rel="stylesheet">
</head>
<body onload="">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/include/navbar.php');?>
    <div class="container">
        <form class="form" id="add_employee" action="add" method="POST">
            <div class="msg">
            </div>
            <table>
                <tr>
                    <td colspan="2">
                        <h2 class="form-heading">Add user</h2>
                    </td>
                </tr>
                <tr>
                    <td align='right'><label>Employee number</label></td>
                    <td><input class="form-control" type="text" id="id" name="id" autofocus required/></td>
                </tr>
                <tr>
                    <td align='right'><label>Name</label></td>
                    <td>
                        <div id="name">
                            <input class="form-control" type="text" id="l_name" name="l_name" placeholder="Last" required/>
                            <input class="form-control" type="text" id="f_name" name="f_name" placeholder="First" required/>
                            <input class="form-control" type="text" id="m_name" name="m_name" placeholder="Middle" required/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align='right'><label>Username</label></td>
                    <td><input class="form-control" type="text" id="username" name="username" required/></td>
                </tr>
                <tr>
                    <td align='right'><label>Password</label></td>
                    <td><input class="form-control" type="password" id="password" name="password" required/></td>
                </tr>
                <tr>
                    <td align='right'><label>Confirm password</label></td>
                    <td><input class="form-control" type="password" id="conf_pass" name="conf_pass" required"/></td>
                </tr>
                <tr>
                    <td align='right'><label>Contact number</label></td>
                    <td><input class="form-control" type="text" id="contact_number" name="contact_number"/></td>
                </tr>
                <tr>
                    <td align='right'><label>Designation</label></td>
                    <td>
                        <select class="form-control" id="designation" name="designation">
                            <option value=''>--select designation--</option>
                            <option>Senior Production Staff</option>
                            <option>CAD Producer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input id="add" type="submit" class="btn btn-success btn-lg btn-block" value="Add user"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/include/scripts.html');?>
    <script src="/assets/js/users/add.js"></script>
</body>
</html>