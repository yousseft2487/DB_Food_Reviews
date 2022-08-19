<div class="box side">

    <h3>Search | <a class="side" href="show_all.php">Show All</a></h3>

    <i>Type part of the title name and then search</i>

    <hr />

    <!-- Start of Title Search -->

    <form method="post" action="title_search.php" enctype="multipart/form-data" >
        <!-- Search Bar -->
        <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />

        <!-- Search Button -->
        <input class="submit" type="submit" name="find_title" value="&#xf002;" />


    </form>

    <!-- End of Title Search -->

    <hr />


    <!-- Start of Vegetarian Search -->

    <form method="post" action="vegetarian_search.php" enctype="multipart/form-data" >
        <!-- Search Bar -->
        <input class="search" type="text" name="vegetarian" size="40" value="" required placeholder="Vegetarian..." />

        <!-- Search Button -->
        <input class="submit" type="submit" name="find_vegetarian" value="&#xf002;" />


    </form>

    <!-- End of Vegetarian Search -->



<hr />

    <!-- Start of Meal Search -->

    <form method="post" action="meal_search.php" enctype="multipart/form-data">

        <select name="meal" required>
            <option value="" disabled selected> Meal...</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Dinner">Dinner</option>
            <option value="Dessert">Dessert</option>
            <option value="Lunch">Lunch</option>

            
        </select>

        <!-- Search Button -->
        <input class="submit" type="submit" name="find_meal" value="&#xf002;" />


    </form>

    <!-- End of Meal Search -->

<hr />

    <!-- Start of Location Search -->

    <form method="post" action="location_search.php" enctype="multipart/form-data" >
        <!-- Search Bar -->
        <input class="search" type="text" name="location" size="40" value="" required placeholder="Location..." />

        <!-- Search Button -->
        <input class="submit" type="submit" name="find_location" value="&#xf002;" />

    </form>

    <!-- End of Location Search -->

<hr />

<!-- Start of ratings form -->

<form method="post" action="rating_search.php" enctype="multipart/form-data">

    <select class="half_width" name="amount">
        <option value="exactly" selected>Exactly...</option>
        <option value="more">At least...</option>
        <option value="less">At most...</option>
    </select>

    <select class="half_width" name="stars">
        <option value=1>&#9733;</option>
        <option value=2>&#9733;&#9733;</option>
        <option value=3>&#9733;&#9733;&#9733;</option>
        <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
        <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        </option>

    </select>

        <!-- Search Button -->
        <input type="submit" class="submit" name="find_rating" value="&#xf002;" />

    </form>

    <!-- End of rating form -->


    </div>  <!-- / side bar -->

<div class="box footer">
    CC THOMAS 2022
</div>    <!-- / footer -->

</div>   <!-- / wrapper -->

</body>  