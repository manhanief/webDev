<html>

<head>
    <title>PHP Form Validation</title>
</head>

<body>
    <?php
    // define variables and set to empty values 
    $name = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value = test_input($_POST["value"]);
        if($value>100)
        echo '<script>alert("true")</script>';
        else
        echo '<script>alert("false")</script>';
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
    <h2>Tutorials Point Absolute classes registration</h2>
    <form method="post" action="Q2.php" >
        <table>
            <tr>
                <td>Value:</td>
                <td><input type="text" name="value"></td>

            </tr>
                <td>
                    <input type="submit" name="submit" value="Submit" >
                </td>
            </tr>
        </table>
    </form>

    <?php
    echo $value; ?>
</body>

</html> 