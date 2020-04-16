<?php

declare(strict_types=1);

/*
 * This file is part of nexper/contao-grid-bundle.
 *
 * (c) 2020 Nexper <https://nexper.de>
 *
 * @author André Heeke <https://github.com/andreheeke>
 */

// Back end form fields
$GLOBALS['BE_FFL']['nxGridColumnWizard'] = \Nexper\ContaoGridBundle\Widget\GridColumnWizard::class;

// Wrapper elements
$GLOBALS['TL_WRAPPERS']['start'][] = 'nx_column_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'nx_column_stop';
