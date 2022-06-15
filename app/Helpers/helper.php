<?php
    if(!function_exists('hasAnyPermissions')){
        function hasAnyPermissions($permission): bool
        {
            return auth()->user()->hasPermission($permission);
        }
    }



?>