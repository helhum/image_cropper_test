<?php
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['Backend/Form/Element/ImageManipulationElement']['previewUrl']['image_cropper_test'] =
    \Helhum\ImageCropperTest\Hook\PreviewUrl::class . '->generate';