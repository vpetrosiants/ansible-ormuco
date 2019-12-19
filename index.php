<html>	
<body>
<h3>TECHNICAL OPERATIONS - TECHNICAL TEST</h3>


<?php
$conn = mysqli_connect('localhost', 'viktor', 'password', 'test');

if (!$conn) {
die('ERROR: Unable to connect: ' . mysql_error());
}


if(isset($_POST['submit'])) {
		    $name=$_POST['name'];
		    $color=$_POST['color'];
		    $animal=$_POST['animal'];
		    $query="SELECT u.name FROM  users u WHERE u.name='$name'";
		    $check = mysqli_query($conn,$query);
		    $row_cnt = mysqli_num_rows($check);
		    if ($row_cnt>0){echo '<font><b>The name <font color=red>"'.$name.'"</font> already exists</b><br>';}
		    else {
                    $query_update = "INSERT INTO `users`(id,name,color, animal) VALUES  (NULL,\"$name\", \"$color\", \"$animal\");";
		    mysqli_query($conn,$query_update) or die (mysqli_error($conn));
			}    
}


$result = mysqli_query($conn,'SELECT u.name,u.color,a.animal FROM  users u, animals a where u.animal=a.id');

if(mysqli_num_rows($result)) {
    echo '<table cellpadding="0" cellspacing="0" border="1">';
    echo '<tr><th>Name</th><th>Color</th><th>Animal</th></tr>';
    while($row2 = mysqli_fetch_row($result)) {
        echo '<tr>';
        foreach($row2 as $key=>$value) {
            echo '<td>',$value,'</td>';
        }
        echo '</tr>';
    }
    echo '</table><br />';
}

$check = mysqli_query($conn,'SELECT u.name FROM  users u');

?>


<form action="index.php" method="post">
    <p>
        <label for="Name">Name:</label>
        <input type="text" name="name" id="firstName">
    </p>
    <p>
        <label for="Color">Color:</label>
        <input type="text" name="color" id="color">
    </p>
    <p>
        <label for="animal">Animal:</label>
            <select name="animal">
		<option value="1">dog</option>
		<option value="2">cat</option>
	    </select>
    </p>
    <input type="submit" value="Submit" name="submit">
</form>

<p>Viktor Petrosiants  &copy; 2019</p>
<p>	<a href="mailto:v.petrosiants@gmail.com">Mail</a> | <a href="https://cv.porter.net.ua">Site</a>
</body>
</html>
