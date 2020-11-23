<?php
$page_title = 'Search by Food Name - BlendEats';
include('../header.php');
?>

<body>

    <?php include("../nav.php")
    ?>

    <div class="main-content">
        <div class="container-fluid mb-5 mt-5 centerr">
            <h3> Type Food Name to Search </h3>

        <p> Try food name starting from b </p>
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
            var tags = []

            var elem = $('#searchfood');
            elem.on('input',() => {
                //reset data
                tags = [];

                var query = elem.val();
                //  console.log(query)

                if (query != '') {

                    $.ajax({
                        url: "food_search_helper.php",
                        method: "GET",
                        data: {
                            fname: query
                        },
                        dataType: "json",
                        success: (data) => {
                            //update tags on every change
                            tags = data;
                        }
                    })

                }
            });

            //init
            elem.autocomplete({
                source: function(request, response) {
                    var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
                    response($.grep(tags, function(item) {
                        return matcher.test(item);
                    }));
                }
            });

        });
    </script>

</body>

</html>
