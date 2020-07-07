<?php
include("MyShoppingCartController.php");
?>

<!DOCTYPE html>
<html>
<head>
    <!--        Own CSS and JS added-->
    <link rel="stylesheet" type="text/css" href="assets/Styling/myStyle.css">
    <script type="text/javascript" src="assets/JavaScript/myJS.js"></script>

    <!--        Bootstrap added-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <title>My Shopping Cart</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Start Page</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--Container-->
<div class="container">
    <h1 class="my-4">My first PHP page</h1>
    <!-- Block Titel-->
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Card Title</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Card Title II</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Card Title III</h4>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Block Titel-->
    <hr>
    <!--BLock Teaser-->
<!--    <div class="row">-->
<!--        <div class="col-lg-4 col-sm-6 portfolio-item">-->
<!--            <div class="card h-100">-->
<!--                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--                <div class="card-body">-->
<!--                    <h4 class="card-title">-->
<!--                        <a href="#">Project One</a>-->
<!--                    </h4>-->
<!--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam-->
<!--                        aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt,-->
<!--                        dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--BLock Teaser-->
    <!--Loop Teaser-->

    <h2 class="my-4">List of Items</h2>
    <div class="row">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $row["description"]." ".$row["id"] ?></a>
                        </h4>
                        <p class="card-text">Made of: <?php echo $row["material"] ?> </p>
                        <p class="card-text">Price: <?php echo $row["price"]." ".$row["coin"]  ?> </p>
                        <div class="col-md-12">
                            <a class="btn btn-lg btn-secondary btn-block" href="#">Add to ShopingCart</a>
                        </div>
                    </div>

                </div>

            </div>
        <?php } ?>
    </div>
    </div>

    <!--Loop Teaser-->


    <hr>
    <!--Block Action-->
    <div class="row">
        <div class="col-lg-6">
            <h2>Modern Business Features</h2>
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
                <li>
                    <strong>Bootstrap v4</strong>
                </li>
                <li>jQuery</li>
                <li>Font Awesome</li>
                <li>Working contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
                reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia
                dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
    </div>
    <hr>
    <div class="row mb-4">
        <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti
                beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
    </div>
    <!--Block Action-->
</div>
<!--Container-->

<!--Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © CJT Solution's Website 2020</p>
    </div>
    <!-- /.container -->
</footer>
<!--Footer-->

</body>
</html>