<?php

		header('Content-type:text/html;charset=utf-8');
		echo '<pre>';

		$img = $_FILES['image'];

		if(!empty($img))
		{
		    $img_desc = reArrayFiles($img);
		    //print_r($img_desc);
				//echo( $img_desc);

		    foreach($img_desc as $val)
		    {
		        $newname = date('YmdHis',time()).mt_rand().'.jpg';
		        move_uploaded_file($val['tmp_name'],'./uploads/'.$newname);
		    }
		}

		function reArrayFiles($file)
		{
		    $file_ary = array();
		    $file_count = count($file['name']);
		    $file_key = array_keys($file);

		    for($i=0;$i<$file_count;$i++)
		    {
		        foreach($file_key as $val)
		        {
		            $file_ary[$i][$val] = $file[$val][$i];
		        }
		    }
		    return $file_ary;
		}
?>
