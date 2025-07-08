<?php 
    if(session('success')) {
        echo '<div class="alert alert-success">' . session('success') . '</div>';
    }
    

    if(session('error')) {
        echo '<div class="alert alert-danger">' . session('error') . '</div>';
    }
?>