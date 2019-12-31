


    <div class="">
        <?php $fields = get_field_objects(); ?>
        <?php foreach($fields as $field_prop): ?>

            <?php //vardump($field_prop);
            echo '<li>'. $field_prop['label'] .':'. $field_prop['value'] .'</li>';

            if($field_prop['choices']){
                foreach($field_prop['choices'] as $choice => $choces){
                    echo $choice . ':' . $choces. "<br>";
                }
            }

         ?>

        <?php endforeach; ?>
    </div>
