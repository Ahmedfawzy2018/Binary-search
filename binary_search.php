<?
$array=array(2,6,8,15,20,22,27,30,33,50,55,60);
$key = 33;
echo BinarySearch($array,$key);

function BinarySearch($nums,$target)
{
	$begin=0;
	$end = count($nums)-1;
	while($begin<=$end){
		$mid = floor(($begin + $end) / 2) ;

		if($nums[$mid] == $target)
			return $mid ;

		if($nums[$mid] > $target){
			$end = $mid - 1 ;
		}else{
			$begin = $mid + 1 ;
		}

	}

	return -1;
}

?>