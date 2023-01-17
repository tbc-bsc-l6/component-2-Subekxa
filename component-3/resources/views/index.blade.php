<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLING -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/app.css">
    <script src="https://kit.fontawesome.com/13c1ddf592.js" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <div class="container-fluid header d-flex justify-content-around">
        <h1>ABC</h1>
    </div>

    <div class="row">  
        <div class="col-4"></div>

        <!-- search bar here -->
        <div class="col-4 d-flex align-items-center justify-content-center">
            <form action="product_search.php" method="GET" class="d-flex w-100">
                <div class="searchbar d-flex w-100">
                    <input name="searchtxt" type="text" placeholder="Search anything here..." class="form-control"
                        style="border-bottom-left-radius: 15px; border-top-left-radius: 15px;" value="">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</body>
</html>