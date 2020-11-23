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
               <p> Try country name starting from i </p>

               <form action="r_country.php" class=" row justify-content-md-center " method="GET">
                    <div class="form-group col col-lg-9 row justify-content-md-center">
                         <input class="form-control col col-lg-5" name="country" id="countrysearch" type="search" placeholder="Country Name" aria-label="Search">
                         <button class="btn bg-def btn-dark col col-lg-1 " type="submit">Search</button>

                    </div>


               </form>

          </div>

     </div>



     <?php include("../footer.php") ?>

     <script>
          $(document).ready(() => {
               var tags = []

               var elem = $('#countrysearch');

               elem.on('input',() => {
                    //reset data
                    tags = [];

                    var query = elem.val();
                    //  console.log(query)

                    if (query != '') {

                         $.ajax({
                              url: "country_search_helper.php",
                              method: "GET",
                              data: {
                                   cname: query
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
                    source: (request, response) => {
                         var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
                         response($.grep(tags, (item) => {
                              return matcher.test(item);
                         }));
                    }
               });

          });
     </script>


</body>

</html>