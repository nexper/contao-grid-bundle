<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_layout']['fields']['nx_grid_stylesheet'] = array(
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array('tl_class' => 'clr'),
    'sql' => "char(1) NOT NULL default '1'"
);

PaletteManipulator::create()
    ->addField('nx_grid_stylesheet', 'framework')

    ->applyToPalette('default', 'tl_layout')
;
