<?php
    include 'db.php';

    
    $sql = "SELECT * FROM Aeroports";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<select name="select_box" class="form-select" id="select_box">
    <option value="">Aeroport</option>
    <?php
    $sql0 = "SELECT DISTINCT pays FROM Aeroports";
    $result0 = mysqli_query($conn, $sql0);
    foreach ($result0 as $row0)
    {
        echo "<optgroup label='".$row0['pays']."'>";
        $sql1 = "SELECT code, aeroport FROM Aeroports WHERE pays = '".$row0['pays']."'";
        $result1 = mysqli_query($conn, $sql1);
        foreach ($result1 as $row1)
        {
            echo "<option value='".$row1['code']."'>".$row1['aeroport']."</option>";
        }
        echo "</optgroup>";
    }
    ?>
</select>
<hr>
<hr>
<?php
    $poids = $_POST['poids'];
    $destination = $_POST['destination'];
    $type = $_POST['type'];
    $compagnie = $_POST['compagnie'];

    echo "poids: ".$poids."<br>"."destination: ".$destination."<br>"."type: ".$type."<br>"."compagnie: ".$compagnie;
?>
