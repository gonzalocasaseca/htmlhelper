<?php 
    require_once 'html.php';  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <p>This page has been generated with the html.php class that can be found here.</p>
        
        <p>It allows you to create html elements on the fly saving typing and avoiding mistakes</p>
        
        <p>This is the code to generate a select or Drop-down List:</p>
        
        <code>
            $data = array('blue', 'red', 'yellow', 'green');<br />
            html::select(array('name' => 'colors'), $data);<br />
        </code>
        <br />    
        
        <?php
            $data = array('blue', 'red', 'yellow', 'green');
            html::select(array('name' => 'colors'), $data)
        ?>
        <br />
        <p> 
            You can also pass a hash witch key and values, similar to the way you get the data from a database. 
            You can also select a default value.
        </p>
        
        <code>
            $data = array(array('id' => 1 , 'color' => 'blue'), array('id' => 2, 'color' => 'red'), array('id' => 3, 'color' => 'yellow'));<br />
            html::select(array('name' => 'colors'), $data, 2, 'id', 'color');<br />
        </code>
        <br />  
        
        <?php
            $data = array(array('id' => 1 , 'color' => 'blue'), array('id' => 2, 'color' => 'red'), array('id' => 3, 'color' => 'yellow'));            
            html::select(array('name' => 'colors'), $data, 2, 'id', 'color');
        ?>
        
        <p>
            You can create different kinds of buttons<br />
            
        </p>
        <code>
            html::button('button', 'Hi! I am a button');<br /><br />
        </code>
        <?php            
            html::button('button', 'Hi! I am a button');
        ?>
        
        <p>And disable them</p>
        <code>
            html::button($type, $label, null, true);<br />
        </code>
        <br />
        <?php
            html::button('button', 'I am disable', null, true);
        ?>
        
        <p>You can also create links</p>
        <code>
            html::link('http://www.themagicnumber.es', 'My Blog!')<br />
        </code>
        <br />
        <?php
            html::link('http://www.themagicnumber.es', 'My Blog!')
        ?>
        
        <p>And CRUD Tables!!!</p>
        <code>
            //values like they where retrieve from a database<br />
            $values = array(array('id' => 1, 'name' => 'John', 'lastname' => 'Smith', 'age' => '20'),<br />
                            array('id' => 2, 'name' => 'Paul', 'lastname' => 'Sullivan', 'age' => '35'),<br />
                            array('id' => 3, 'name' => 'Mark', 'lastname' => 'Brown', 'age' => '30'),<br />
                            array('id' => 4, 'name' => 'Ryan', 'lastname' => 'Gaines', 'age' => '26'),<br />
                            array('id' => 5, 'name' => 'Michael', 'lastname' => 'Gates', 'age' => '31'));<br />
            <br />
            //you can decide what values to show<br />
            $file_names = array('name', 'lastname', 'age');<br />
            <br />
            $titles = array('NAME' => null, 'LAST NAME' => null, 'AGE' => null);<br />
            <br />
            html::table_crud($values, $file_names, 'id', 'edit.php', 'delete.php', $titles);<br />
            <br />
        </code>
        
        <?php
            //values like they where retrieve from a database
            $values = array(array('id' => 1, 'name' => 'John', 'lastname' => 'Smith', 'age' => '20'),
                            array('id' => 2, 'name' => 'Paul', 'lastname' => 'Sullivan', 'age' => '35'),
                            array('id' => 3, 'name' => 'Mark', 'lastname' => 'Brown', 'age' => '30'),
                            array('id' => 4, 'name' => 'Ryan', 'lastname' => 'Gaines', 'age' => '26'),
                            array('id' => 5, 'name' => 'Michael', 'lastname' => 'Gates', 'age' => '31'));
            
            //you can decide what values to show
            $file_names = array('name', 'lastname', 'age');
            
            $titles = array('NAME' => null, 'LAST NAME' => null, 'AGE' => null);
            
            html::table_crud($values, $file_names, 'id', 'edit.php', 'delete.php', $titles);            
        ?>
        
        <br />       
        
    </body>
</html>
