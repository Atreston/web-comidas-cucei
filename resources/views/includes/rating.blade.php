

$review=(object)['rate'=>3];
for($i=0; $i<5; ++$i){
    echo '<i class="fa fa-star',($review->rate<=$i?'-o':''),'" aria-hidden="true"></i>';
    echo "\n";
}

<div class="rating">
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star-o" aria-hidden="true"></i>
	<span>4/5</span>
</div>
