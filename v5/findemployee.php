<?php
	define('__CONFIG__',true);
	require_once "inc/config.php";
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employee Management System v2.0</title>
        <link rel="stylesheet" href="./stylesheet/mystyle.css">
        <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else { 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","findemployeeajax.php?emp_id="+str,true);
                xmlhttp.send();
            }
        }
        </script>
    </head>
    
    <!-- Body of the HTML Doc -->
    <body>
        <?php 
			require_once("common/titlenavbar.php");
		?>
        <h3>Search Employee Records</h3>
        <hr></hr>
        <br />
            <!-- Simple Form -->
            <form action="updateemployeeback.php">
                Search by Employee ID Number
                <br/>
                <br/>
                <input type="text" name="emp_id" id="emp_id" value="499999">
                <br><br>
                <input type="button" value="Retrieve Record" onclick=showUser(emp_id.value)>
                <input type="submit" value="Update this Record?">
            </form>

        <h4>Results Table:</h4>
        <br />
        <div id="txtHint"></div>
        <br /><br />
        <footer id="axnet_footer">2022 AxnetLabs, LLC</footer>
    </body>
</html>
