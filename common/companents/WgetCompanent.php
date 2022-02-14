<?php

namespace common\companents;

class WgetCompanent
{
    public function uploade($file, $file_put){
        if (move_uploaded_file($file['tmp_name'],  $file_put)) {
            return true;
        } else {
            return false;
        }
    }
}