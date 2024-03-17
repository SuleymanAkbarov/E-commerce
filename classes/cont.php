<?php  
include_once('classes/db.php');
/**
 * 
 */
class product extends db
{
	
	public function forlist($category)
	{
		# code...
		if($category != 'all'){
			$res = $this->select("products", $category, "Category");
		return $res;
		}
		else{
			$res = $this->select("products");
		return $res;
		}	
    	
    }

    public function fordetail($id)
	{
		# code...
		$res = $this->select("products", $id, "ID");
		return $res;		
    	
    }
    public function buy($id)
    {
    	# code...
    	$pro = $this->select("products", $id, "ID");
    	$num = $pro[0]['Number'];
    	$num -= 1;
    	$this->update("products", "Number", $num, $id);
    }


}
?>