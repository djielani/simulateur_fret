<div class="tab-pane fade" id="destination" role="tabpanel" aria-labelledby="destination-tab">
    <div class="container m-3">
        <div class="row">
            <div class="col-8">
                <div class="container">
                    <select class="form-control selectpicker" data-live-search="true" required name="destination">
                        <option value="">Choisissez la destination</option>
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
                </div>
            </div>
        </div>
    </div>
</div>