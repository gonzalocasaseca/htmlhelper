<?php 
    require_once 'html.php';  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php html::css('style.css'); ?>
        <title></title>
    </head>
    <body>
        <p>This page has been generated with the html.php class that can be found <?php html::link('https://github.com/gonzalocasaseca/htmlhelper', 'Source code in GitHub') ?>.</p>
        
        <p>It allows you to create html elements on the fly saving typing and avoiding mistakes</p>
        
        <p>This is the code to generate a <b>select</b> or <b>Drop-down List</b>:</p>
        
        <code>
            $data = array('blue', 'red', 'yellow', 'green');<br />
            html::select(array('name' => 'colors'), $data);<br />
        </code>
        
        <?php
            $data = array('blue', 'red', 'yellow', 'green');
            html::select(array('name' => 'colors'), $data);
        ?>
        <br />
        <br />
        <p> 
            You can also pass a hash witch key and values, similar to the way you get the data from a database. 
            You can also select a default value.
        </p>
        
        <code>
            $data = array(array('id' => 1 , 'color' => 'blue'), array('id' => 2, 'color' => 'red'), array('id' => 3, 'color' => 'yellow'));<br />
            html::select(array('name' => 'colors'), $data, 2, 'id', 'color');<br />
        </code>
        
        <?php
            $data = array(array('id' => 1 , 'color' => 'blue'), array('id' => 2, 'color' => 'red'), array('id' => 3, 'color' => 'yellow'));            
            html::select(array('name' => 'colors'), $data, 2, 'id', 'color');
        ?>        
        <br />
        <br />
        <p>You can create different kinds of <b>buttons</b></p>
        
        <code>html::button('button', 'Hi! I am a button');</code>
        
        <?php html::button('button', 'Hi! I am a button'); ?>
        <br />        
        
        <p>And disable them</p>
        <code>
            html::button($type, $label, null, true);
        </code>        
        <?php
            html::button('button', 'I am disable', null, true);
        ?>        
        <br />
        <br />
        <p>You can also create <b>links</b></p>
        <code>
            html::link('http://www.themagicnumber.es', 'My Blog!')
        </code>
        <?php
            html::link('http://www.themagicnumber.es', 'My Blog!')
        ?>
        <br />
        <br />
        <p>And <b>CRUD Tables!!!</b></p>
        <code>
            //values like they were retrieved from a database<br />
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
            html::table_crud($values, $file_names, 'id', 'edit.php', 'delete.php', $titles);
        </code>
        
        <?php
            //values like they were retrieve from a database
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
        
        <p>And of course <b>Images</b></p>
        <code>
            html::image('http://www.w3.org/html/logo/downloads/HTML5_Logo_256.png', 'html5 logo', null, null, array('title' => 'HTML5 Logo'));<br />
        </code>
        <br />
        <?php
            html::image('http://www.w3.org/html/logo/downloads/HTML5_Logo_256.png', 'html5 logo', null, null, array('title' => 'HTML5 Logo'));
        ?>
        <br />
        
    </body>
</html>
