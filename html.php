<?php

/**
 * Html helper static class, allows to create html elements
 *
 * @author Gonzalo Hernández Casaseca
 */
class html
{
    
    /** PRIVATE **/
    
    /**
     * Join all the tags in a string
     * @param type $tags
     * @return string
     */
    private static function tags($tags)
    {        
        $string = '';
        
        if (!is_null($tags))
        {
            foreach ($tags as $tag => $tag_value)
            {
                $string .= $tag . '="' . $tag_value . '" ' ;            
            }
        }
        
        return $string;
    }
    
    /**
     * Create a header for a crud table
     * @param type $titles
     * @return string
     */
    private static function table_header($titles)
    {
        $header = '';
        
        if (!is_null($titles))
        {
            $header = '<tr>';
       
            foreach ($titles as $title => $tags)
            {
                $header .=  '<th ' . $tags . ' >';            
                $header .=  $title;            
                $header .=  '</th>';
            }
            $header .=  '</tr>';
        }       
        
        return $header;
    }
    
    
    
    
    /** PUBLIC **/
    
    
    public static function css($path)
    {
        echo '<link rel="stylesheet" href="' . $path . '" type="text/css" />';        
    }
    
    public static function javascript($path)
    {
        echo '<script type="text/javascript" src="' . $path . '"></script>';
    }
    
    public static function image($path, $alt, $width = null, $height = null, $tags = null)
    {
        $img = '<img ';
        $img .= 'src = "' . $path . '" ';
        
        if (!is_null($width))
        {
            $img .= 'width = "' . $width . '" ';
        }
        
        if (!is_null($height))
        {
            $img .= 'height = "' . $height . '" ';
        }
        
        $img .= self::tags($tags);
        
        $img .= 'alt = "' . $alt . '" ';
        
        $img .= ' />';
        
        echo $img;
    }
        
    public static function input($type, $name, $value = null, $tags = null)
    {
        $input = '<input type="' . $type . '" name="' . $name . '" ';
        
        if(!is_null($value))
        {
            $input .= 'value="' . $value . '" ';
        }
        
        $input .= tags($tags);
        
        $input .= $tags . '/>';
            
        echo $tags;
    }
        
    public static function button($type, $label, $tags = null, $disable = null)
    {
        $button = '<input type="' . $type . '" value="' . $label . '" ';
        
        if (!is_null($tags))
        {
            $button .= tags($tags);
        }
        
        if (!is_null($disable))
            $button .= 'disabled="disabled" ';
        
        $button .= '/>';
        
        echo $button;
    }
    
    
    /**
     * Create a html select
     * @param hash $tags
     * @param array or hash $data 
     * @param string $value_name
     * @param string $key_name
     * @param string $selected
     */
    public static function select($tags, $data, $selected = null, $key_name = null, $value_name = null)
    {
        $select = '<select ';
        
        //let's concat the tags
        $select .= self::tags($tags);
        
        $select .= '>' . "\n";
        
        if (is_null($key_name))
        {//is an array
            foreach ($data as $value)
            {
                $select .= '<option value="' . $value . '"';
                if ($value == $selected)
                {
                    $select .= 'selected="yes" ';
                }
                $select .= '>' . $value .  '</option>' . "\n";                
            }
        }
        else
        {//is a hash
            foreach ($data as $value)
            {
                $select .= '<option value="' . $value[$key_name] . '"';
                if ($value[$key_name] == $selected)
                {
                    $select .= 'selected="yes" ';
                }
                $select .= '>' . $value[$value_name] .  '</option>' . "\n";   
            }
        }
        
        $select .= '</select>' . "\n";
        
        echo $select;
    }
    
    public static function link($link, $text, $tags = null)
    {
        $link = '<a href="' . $link . '"';        
        
        $link .= self::tags($tags);
        
        $link .= '>' . $text . '</a>';
        
        echo $link;
    }
      
    
    
    /**
     * 
     * @param type $valores
     * @param type $nombre_filas
     * @param type $link_edicion
     * @param type $link_baja
     * @param type $id
     * @param type $titulos
     */
    public static function table_crud($values, $file_names, $id_name, $edition_link, $delete_link, $titles = null)
    {        
        $table = '<table>';
        
        $table .= self::table_header($titles);
        
        if (!is_null($values))
        {
            foreach ($values as $value)
            {
                $table .= '<tr>';
                foreach ($file_names as $file)
                {
                    $table .= '<td>';
                    $table .= $value[$file];
                    $table .= '</td>';            
                }
                $table .= '<td>';
                $table .= '<a href = "' . $edition_link . '?id=' . $value[$id_name] . '">Edit</a>';
                $table .= '</td>';
                $table .= '<td>';
                $table .= '<a href = "' . $delete_link . '?id=' . $value[$id_name] . '">Delete</a>';
                $table .= '</td>';
                $table .=  '</tr>';
            }
        }
        $table .= '</table>';
        
        echo $table;
    }    
    
    public static function br()
    {
        echo('<br/ >' . "\n");
    }
}

?>

