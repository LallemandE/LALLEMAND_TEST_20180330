<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Cat Page</title>
    	<style>
    	   table {
    	       margin : 5px 20px;
    	       border : 2px solid black; 
    	   }
    	   .error {
    	       color : red;
    	   }
    	</style>
	</head>
    <body>
    	<h1>Cats in Stock</h1>
            <?php
            require 'Model\Cat.php';
            use Model\Cat;
            
            try {
                $firstname = 'minou1';
                $cat1 = new Cat($firstname, 2, 'grey', 'male', 'none');
            } catch (Exception $e) {
                echo '<p class="error">Could not create cat ' . $firstname . ' / ' . $e->getMessage() . '</p>';
            }
            try {
                $firstname = 'minou2';
                $cat2 = new Cat($firstname, 5, 'grey', 'male', 'Ragdoll');
            } catch (Exception $e) {
                echo '<p class="error">Could not create cat ' . $firstname . ' / ' . $e->getMessage() . '</p>';
            }
            try {
                $firstname = 'minou3';
                $cat3 = new Cat($firstname, 10, 'black', 'female', 'Siamoi');
            } catch (Exception $e) {
                echo '<p class="error">Could not create cat ' . $firstname . ' / ' . $e->getMessage() . '</p>';
            }
            
            // could be that a cat does not exist => to avoid any problem in following code, I test if it exists before getting Info.
            if (isset($cat1)) {
                $singleCatArray = $cat1->getInfo();
                $allCatArray[] = $singleCatArray;
            }
            if (isset($cat2)) {
                $singleCatArray = $cat2->getInfo();
                $allCatArray[] = $singleCatArray;
            }
            if (isset($cat3)) {
                $singleCatArray = $cat3->getInfo();
                $allCatArray[] = $singleCatArray;
            }
            
            foreach ($allCatArray as $result) {
                echo '<table>';
                foreach ($result as $key => $value) {
                    echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
                }
                echo '</table>';
                echo "\n\r";
            }
            ?>
    	</body>
</html>