<?php
    function buildHeader(array $array){
        $html = '<tr>';
        foreach(
            $array[0] as $key=>$value){
                $html .= '<th>+-------+-------+</th>';
            }
        $html .= '</tr>';
        
        foreach( $array[0] as $key=>$value){
            $html .= '<th>' . "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  " . $key .  " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . '</th>';
            if ($key ==  array_keys( $array[0] )[count($array[0])-1] ){
                $html .= '<th>' . "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  " .  " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . '</th>';
            }
        }
            
        $html .= '</tr>';
        $html .= '<td>+-------+-------</td>';
        $html .= '<td>+-------+-------</td>';
        $html .= '<td>+-------+-------</td>';
        $html .= '<td>+-------+-------+</td>';
        $html .= '</tr>';
    return $html;    
    }
function buildContent($array){
      // data rows
      $html = "";
      foreach( $array as $key=>$value){
        $html .= '<tr>';
       
        $html .= '</tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>|&nbsp;&nbsp;&nbsp;' . $value2  . '&nbsp;&nbsp;&nbsp;</td>';
            if ($key2 ==  array_keys( $array[0] )[count($array[0])-1] ){
                $html .= '<th>' . "|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  " .  " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . '</th>';
            }  
        }
        $html .= '</tr>';  
    }
    function plus($array){
        $html = "";
        foreach( $array as $key=>$value){
            $html .= '<tr>';
            $html .= '<td>+-------+-------+</td>';
            $html .= '</tr>';
        }
        return $html;
    }
    
    foreach($value as $key2=>$value2){
        if($key2 ==  array_keys( $array[0] )[count($array[0])-1] ){
            $html .= '<th>' . "+-------+-------+" . '</th>';
        }else{
            $html .= '<td>+-------+-------</td>';
        }
    }
    
    return $html;
}

    function buildTable($array){
        $html = '<table id="whole">';
        $html.= buildHeader($array);
        $html.= buildContent($array);
        return $html;   
    }
?>