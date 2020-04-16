<?php

declare(strict_types=1);

/*
 * This file is part of nexper/contao-grid-bundle.
 *
 * (c) 2020 Nexper <https://nexper.de>
 *
 * @author André Heeke <https://github.com/andreheeke>
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['nx_column_start'] = '{type_legend},type,headline;{nx_column_legend},nx_grid_column;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['nx_grid_column'] = array(
    'exclude' => true,
    'inputType' => 'nxGridColumnWizard',
    'eval' => array('tl_class' => 'clr'),
    'sql' => "blob NULL"
);
