<?php 

include ('./config/conn.php');

	// write query for all pizzas
	$sql = 'SELECT title,ingredients, id FROM pizzas ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

explode(',',$pizzas[0]['ingredients'])//code to display or innitiate arrays with comma.
?>

<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?> <!--code to connect external header to my php index code-->

	<h4 class="center grey-text">Pizzas!</h4> <!--header with materialized classes framework -->

	<div class="container"><!--class that maintains centralised flexed content with a keyword container for materialized 'container'-->
		<div class="row">

			<?php foreach($pizzas as $pizza){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul>
                                <?php  foreach(explode(',',$pizza['ingredients']) as $ing){
                                    ?>
                                    <li><?php echo htmlspecialchars($ing); ?></li>
                                    <?php } ?>
                               
                            </ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php? id=<?php echo $pizza['id']?>"> more info </a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>

	<?php include('footer.php'); ?><!--always dont forget to include external footer to all of your pages for uniformity -->

</html>