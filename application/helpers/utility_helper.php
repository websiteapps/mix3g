<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 30/4/13
 * Time: 3:48 PM
 * To change this template use File | Settings | File Templates.
 */
function asset_url($path){
    return base_url().'assets/'.$path;
}

function img_url($path){
    return base_url().'uploads/'.$path;
}