<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Personal Info</h1>
    
    <form method="GET" action="connection.php" >
        
        <?php echo('Name:'."\n") ?>
        <br>
        <input type="text" name="name" id="name"> 
        <br>
        <?php echo('Matrik Number'); ?>
        <br>
        <input type="text" name="no_matrik" id="no_matrik">
        <br>
        <?php echo('Address'); ?>
        <br>
        <textarea  name="address" id="address"></textarea>
        <br>

        Gender:<select name="gender" id="gender">
            <option value="male">male</option>
            <option value="women">women</option>
        </select>
        <br>
        <br>
        <button type="submit">Save</button>
        <button type="reset">Reset</button>
        <button type="submit">Search</button>
        <button type="submit">Update</button>
        <button type="submit">Delete</button>

    
    </form>
</body>
</html>