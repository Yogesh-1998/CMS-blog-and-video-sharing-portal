		<div class="col-md-12">
			<nav class="navbar navbar-sub">
				<ul class="nav navbar-nav">
					<?php
						$sql="SELECT * FROM categories";
						$run=mysqli_query($conn,$sql);
						while( $rows = mysqli_fetch_assoc($run) ) {
							$cat=ucwords($rows['cat_data']);
							echo "<li><a href='menu.php?cat_id=$rows[cat_id]'>$cat</a></li>";
						}
					?>
				</ul>
			</nav>
		</div>
