<?php 

$query = "select * from posts";
$result = mysqli_query($con,$query);

//count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "

<center>

<div id='pagination'>
<a href='home.php?page=1'>
<button class='btn btn-default' type='button' style='float:left'>
<span class='badge'><span class='glyphicon glyphicon-arrow-left'></span></span>
First Page

</button></a>


";

for($i=1; $i<=$total_pages; $i++)
{

	echo "
     <a href='home.php?page=$i'>$i</a>

	";
}

//Going to last page
echo "
<a href='home.php?page=$total_pages'>
<button class='btn btn-default' type='button' style='float:right'>
Last Page <span class='badge'><span class='glyphicon glyphicon-arrow-right'></span></span>
</button>
</a>

</div>

</center>


";
?>