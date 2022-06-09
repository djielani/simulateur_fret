<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <title>Simulateur</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="row" id="card01">
            <div class="col-8">
                <div class="container">
                    <div class="card" id="card02">
                        <div class="container mt-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="poids-tab" data-bs-toggle="tab"
                                        data-bs-target="#poids" type="button" role="tab" aria-controls="poids"
                                        aria-selected="true">Poids du colis (Kg)
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="destination-tab" data-bs-toggle="tab"
                                        data-bs-target="#destination" type="button" role="tab"
                                        aria-controls="destination" aria-selected="false">destination</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Type-tab" data-bs-toggle="tab" data-bs-target="#Type"
                                        type="button" role="tab" aria-controls="Type"
                                        aria-selected="false">Type</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Type-tab" data-bs-toggle="tab"
                                        data-bs-target="#compagnie" type="button" role="tab" aria-controls="Type"
                                        aria-selected="false">compagnie</button>
                                </li>
                            </ul>
                            <form action="index.php" method="post" class="needs-validation" novalidate>
                                <div class="tab-content" id="myTabContent">
                                    <?php include 'poids.php'; ?>
                                    <?php include 'destination.php'; ?>
                                    <?php include 'type.php'; ?>
                                    <?php include 'compagnie.php'; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container">
                    <div class="card" id="card03">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})();

$(document).ready(function() {
    $('.mdb-select').materialSelect();
});

function myFunction() {
    document.getElementById("myDropdownmenu").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdownmenu");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>