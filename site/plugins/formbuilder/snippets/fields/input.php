<?php
    // FLAGS and VARIABLES that make our code easier to read:
    $name = $fld->field_name();
    $class = $fld->field_class()->isEmpty() ? false : $fld->field_class()->html();
    $useDiv = $pg->fb_usediv()->toBool();
    $label = $fld->field_label()->isEmpty() ? false : $fld->field_label()->html();
    $placeholder = $fld->placeholder()->isEmpty() ? false : $fld->placeholder()->html();
    $min = $fld->min()->isEmpty() ? false : $fld->min()->toInt();
    $max = $fld->max()->isEmpty() ? false : $fld->max()->toInt();
    $pattern = $fld->pattern()->isEmpty() ? false : $fld->pattern()->value();
    $req = $fld->req()->toBool();
    $type = substr($fld->_key(),3);

    if($data != false and isset($data[$name->value()])) {
        // this is a return to a previously entered form -
        // we need to populate the field with the previously entered value:
        $value = $data[$name->value()];
    } else {
        // this is a brand new form - enter the default value from the panel:
        $value = $fld->default()->isEmpty() ? '' : $fld->default()->html();
    }

    if($useDiv):
?>
<div<?php if($class): ?> class="<?= $class ?>"<?php endif; ?>>
<?php endif; ?>
<?php if($label):?>
    <label class="uppercase block text-white text-sm mb-1 mt-2" for="<?= $name ?>"><?= $label ?></label>
<?php endif; ?>
    <input class="border-white rounded-md mb-1 w-full md:w-full p-2 bg-none" type="<?= $type ?>" name="<?= $name ?>" id="<?= $name ?>"<?php if(!$useDiv and $class): ?> class="<?= $class ?>"<?php endif; ?> value="<?= $value ?>"<?php if($placeholder): ?> placeholder="<?= $placeholder ?>"<?php endif; ?><?php if($min):?> minlength="<?= $min ?>"<?php endif; ?><?php if($max):?> maxlength="<?= $max ?>"<?php endif; ?><?php if($pattern):?> pattern="<?= $pattern ?>"<?php endif; ?><?php if($req):?> required<?php endif; ?>>
<?php if($useDiv): ?>
</div>
<?php endif; ?>
