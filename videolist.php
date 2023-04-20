

<?php 

if ($handle = opendir('video')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") 
		{
echo ' <option value="'.$entry.'">'.$entry.'</option>';
           
			
        }
    }

    closedir($handle);
}
  

?> 

