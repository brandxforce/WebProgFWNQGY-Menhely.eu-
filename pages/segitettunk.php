      <div class="col-md-9 mb-5" style="background-color:#236339;">
<?php

					$stmt = $conn->prepare("SELECT * FROM menhely_segitettunk_table");
                    $stmt->execute();
					$count =0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        echo ' 
						<div class="newsroam" >
						<hr>
						<h3 class="display-5" style="margin-left:30px;"><b>'.$row['title'].'</b></h3>
						'.$row['text'].'
						<br>
						<br><p style="text-align:right;"><button type="button" class="btn btn-info">Bővebben &raquo;</button></p>
					   </div>	
						';
                    }
				?>		 
</div>
	  