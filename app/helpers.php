<?php
if(!function_exists('page_title')){
    /**
     * @param $title
     */
    function page_title($title){

        if($title === '') {

            return 'Madjidgo';
        }
    else
    {


            return $title;
        }
    }
}


