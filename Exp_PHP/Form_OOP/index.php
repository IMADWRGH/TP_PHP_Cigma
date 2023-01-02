<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="col-d-5">Login Form</h1>
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nom">Nom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Nom... " name="nom">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="prnom">Prenom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Prenom... " name="prenom">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Enter email..." name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Enter password..." name="pwd">
                </div>
            </div>

            <div class="btn-group">
                <div class="col-sm-offset-2 col-sm-2 mx-5 mt-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <div class="clo-sm-offset-2 col-sm-2 mx-5 mt-4 ">
                    <button type="reset" class="btn btn-secondary">Annuler </button>
                </div>
            </div>
        </form>

</body>

</html>