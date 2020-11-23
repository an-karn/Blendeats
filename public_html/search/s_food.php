<?php
$page_title = 'Search by Country - BlendEats';
include('../header.php');
?>

<body>

    <?php include("../nav.php")
    ?>

    <div class="main-content">
        <div class="container-fluid mb-5 mt-5 centerr">
            <h3> Type Country Name to List all Users </h3>


            <form action="/search/r_food.php" class=" row justify-content-md-center " method="GET">
                <div class="form-group col col-lg-9 row justify-content-md-center">

                    <input type="text" id="searchfood" class="form-control col col-lg-7" name="foodname" placeholder="What are you looking for?">

                    <button class="btn bg-def btn-dark col col-lg-1 " type="submit">GO</button>

                </div>



        </div>

    </div>



    <?php include("../footer.php") ?>

    <script>
        $(document).ready(() => {

            var elem = $('#searchfood');

            elem.keyup(() => {
                var query = elem.val();
                console.log(query)

                if (query != '') {

                    $.ajax({
                        url: "food_search_helper.php",
                        method: "GET",
                        data: {
                            fname: query
                        },
                        dataType: "json",
                        success: (data) => {
                            availableTags = data;
                            console.log(availableTags[0]);

                            elem.autocomplete({
                                source: availableTags
                            });
                        }


                    })

                }



            });

        });
    </script>

</body>

</html>