<html>
<head>
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/views/include/styles.html');
    ?>
    <link href="/assets/css/generic-form.css" rel="stylesheet">
<body onload="">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/include/navbar.php');?>
    <div class="container">
        <form>
            <label>Name:</label><input id='name' name='name' type='text'/>
        </form>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/application/views/include/scripts.html');?>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
        var data = [{"label":"Ditan, Carlo Bote"},{"label":"Buenaobra, Brian Gabriel Jalmasco"},{"label":"Dela Cruz, Juan Alfonso"}];
        $(function(){
            $('#name').autocomplete({
                source: data,
                minLength: 2
            })
        });
    </script>
</body>
</html>