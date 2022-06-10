<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <title>Simulateur</title>
</head>

<body>
    <?php include 'db.php'; ?>
    <?php include 'component/nav.php'; ?>
    <div class="container">
        <div class="row" id="card01">
            <div class="col-8">
                <div class="container">
                    <div class="card" id="card02">
                        <div class="container mt-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item me-2" role="presentation">
                                    <button class="btn btn-outline-secondary active" id="poids-tab" data-bs-toggle="tab"
                                        data-bs-target="#poids" type="button" role="tab" aria-controls="poids"
                                        aria-selected="true"><img src="icons/weight.png" alt="weight" width="23px"
                                            height="23px"> Poids du colis
                                    </button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="btn btn-outline-secondary" id="destination-tab" data-bs-toggle="tab"
                                        data-bs-target="#destination" type="button" role="tab"
                                        aria-controls="destination" aria-selected="false"><img
                                            src="icons/icons8-place-marker-50.png" height="25px" width="25px">
                                        destination</button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="btn btn-outline-secondary" id="Type-tab" data-bs-toggle="tab"
                                        data-bs-target="#Type" type="button" role="tab" aria-controls="Type"
                                        aria-selected="false"><img src="icons/icons8-diversity-50.png" height="25px"
                                            width="25px"> Categorie</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn-outline-secondary" id="Type-tab" data-bs-toggle="tab"
                                        data-bs-target="#compagnie" type="button" role="tab" aria-controls="Type"
                                        aria-selected="false"><img src="icons/icons8-paper-plane-50.png" width="25px"
                                            height="25px">Compagnie</button>
                                </li>
                            </ul>
                            <form action="test.php" method="post" class="needs-validation" novalidate>
                                <div class="tab-content" id="myTabContent">
                                    <?php include 'component/poids.php'; ?>
                                    <?php include 'component/destination.php'; ?>
                                    <?php include 'component/type.php'; ?>
                                    <?php include 'component/compagnie.php'; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <?php include 'component/output.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="asset/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>