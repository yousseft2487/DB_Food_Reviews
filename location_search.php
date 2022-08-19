<?php include "topbit.php" ;


// if find button pushed...
if(isset($_POST['find_location']))

{
    
// Retrieves location and sanitises it.
$location=test_input(mysqli_real_escape_string($dbconnect,$_POST['location']));


$findall_sql="SELECT * FROM `food_reviews` WHERE `Location` LIKE '%$location%' ORDER BY `Location` ASC ";
$findall_query=mysqli_query($dbconnect, $findall_sql);
$findall_rs=mysqli_fetch_assoc($findall_query);
$count=mysqli_num_rows($findall_query);


?>

<div class="box main">
            
    <h2>Location Search</h2>   
    
    <?php 

    // check if there are any results

    if ($count<1)

    {

    ?>

    <div class="error">
        Sorry! There are no results that match your search. 
        Please use the search box in the sidebar to try again.

    </div>
    
    <?php

    } // end count "if"

    // if there are not results, output an error
    else {

        do {

        ?>

        <div class="results">

        <p>Title: <span class="sub_heading"><?php echo $findall_rs['Title']; ?></span></p>


        <p>Vegetarian: <span class="sub_heading"><?php echo $findall_rs['Vegetarian']; ?></span></p>

        <p>Meal: <span class="sub_heading"><?php echo $findall_rs['Meal']; ?></span></p>

        <p>Location: <span class="sub_heading"><?php echo $findall_rs['Location']; ?></span></p>

        <p>Rating: <span class="sub_heading">

            <?php 
            for ($x=0; $x < $findall_rs['Rating']; $x++)

            {
                echo "&#9733;";
            }

            ?>
        
        </span></p>   

        <p><span class="sub_heading">Review / Response</span></p>

        <p>
            <?php echo $findall_rs['Review']; ?>

        </p>


</div> <!-- / end results -->

    <br />

    <?php

        } // end of 'do'

        while($findall_rs=mysqli_fetch_assoc($findall_query));

    } // end else

    // if there are results, display them

    } // end 'isset'

    ?>


</div>    <!-- / main -->
        
<?php include "bottombit.php"; ?>