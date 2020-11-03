<!DOCTYPE html>
<html lang="en">


<?php
$page_title = 'BlendEats';
$pgDesc = 'BlendEats Homepage';
$keyWords = 'food,culture,world,food project';
include ('header.php');
?>


<body>

    <?php include("nav.php")
    ?>

    <div class="main-content">
        <div class="container-fluid mb-5 mt-5 centerr">
            <h1> Welcome to <span class="bold">BlendEats</span> </h1>


            <div class="links">
                
            </div>

            <div class="searchbar">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton"> GO
                </button>
            </div>

        </div>



        <div class="container-fluid mb-5 centerr " id="popularcountry">


            <h2> Browse by Popular Countries </h2>

            <div class="center">

                <span class="c-button">Nepal</span>
                <span class="c-button">America</span>
                <span class="c-button">Italy</span>
                <span class="c-button">Germany</span>
                <a class="c-button"  href="/search/s_country.php"> Browse Countries</></a>
            </div>
        </div>

        <div class="container-fluid mb-5 centerr " id="foodoptions">
            <h2> Food Options </h2>

            <div class="">
                <span class="fopt-button b-veg">Vegan</span>
                <span class="fopt-button b-vegt">Vegeterian</span>
                <span class="fopt-button b-nveg">Non Veg</span>
                <span class="fopt-button b-halal">Halal</span>
            </div>




        </div>

        <div class="container-fluid centerr" id="popularfood">

            <h2>Find Popular Foods</h2>

            <div class="flex-box">

                <article class="card">
                    <img class="card-img-top" src="assets/img/Biryani.jpeg">
                    <div class="card-body">
                        <h3 class="card-title">Chicken Biryani</h3>
                        <div class="card-text">
                            <span> by Member1 </span><span class="c-button">India</span>
                            <span class="price">15</span> </div>
                </article>



                <article class="card">
                    <img class="card-img-top" src="assets/img/Pasta.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Pasta</h3>
                        <div class="card-text">
                            <span> by Member1 </span><span class="c-button">Italy</span>
                            <span class="price">15</span> </div>
                    </div>

                </article>


                <article class="card">
                    <img class="card-img-top" src="assets/img/burger.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Spicy Burger</h3>
                        <div class="card-text">
                            <span> by Member1 </span><span class="c-button">USA</span>
                            <span class="price">20</span> </div>

                    </div>

                </article>


                <article class="card">
                    <img class="card-img-top" src="assets/img/Schnitzel.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Schnitzel</h3>
                        <div class="card-text">
                            <span> by Member1 </span><span class="c-button">Germany</span>
                            <span class="price">30</span> </div>
                    </div>

                </article>

            </div>
        </div>

    </div>



    <?php include("footer.php") ?>

</body>

</html>
<!DOCTYPE html>