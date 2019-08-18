<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    if($_GET['text']) :
        //echo 'Returned Text :'.$_GET['text'];
        if($_GET['text']=='Student')
        {
            echo '
            Standard/Course <input type = "text" name = "Standard" value = "" />
                Division/Semester <input type = "text" name = "Standard" value = "" />';
        }
        else
        {
            echo '
          Specify<input type = "text" name = "Standard" value = "" />';
        }
       
    endif;
