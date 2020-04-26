<?php

$fields = get_fields();

if ( $fields ) :

    //stuff above content

    ?>
    
    <div class="row">
        <div class="col-lg-6 offset-lg-3">

    <?php
    
    the_content();

    //stuff below content

    ?>
    
        </div>
    </div>

    <?php

else :

    the_content();

endif;


