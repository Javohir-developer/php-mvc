<?php

namespace common\companents;

class WgetCompanent
{
    public function uploade($tmp_name, $file_name){
        if (move_uploaded_file($tmp_name,  $file_name)) {
            return true;
        } else {
            return false;
        }
    }
}