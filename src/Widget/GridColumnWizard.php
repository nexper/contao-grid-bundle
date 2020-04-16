<?php

declare(strict_types=1);

/*
 * This file is part of nexper/contao-grid-bundle.
 *
 * (c) 2020 Nexper <https://nexper.de>
 *
 * @author André Heeke <https://github.com/andreheeke>
 */

namespace Nexper\ContaoGridBundle\Widget;

use Contao\System;
use Contao\Widget;
use Twig\Environment;

class GridColumnWizard extends Widget
{
    /**
	 * Submit user input
     *
	 * @var boolean
	 */
    protected $blnSubmitInput = true;

    /**
	 * Template
     *
	 * @var string
	 */
    protected $strTemplate = 'be_widget_gcw';

    /**
     * Validate input.
     *
     * @return void
     */
    public function validate(): void
    {
        $options = $this->getPost($this->strName);

        $varInput = $this->validator($options);

        if(!$this->hasErrors()) {
            $this->varValue = $varInput;
        }
    }

    /**
     * Generate the widget and return it as string.
     *
     * @return string
     */
    public function generate(): string
    {
        /** @var Environment $twig */
        $twig = System::getContainer()->get('twig');

        // Make sure there is at least an empty array
		if (empty($this->varValue) || !\is_array($this->varValue)) {
		    $this->varValue = array();
        }

        dump($this->varValue);

        $htmlContents = $twig->render('@NexperContaoGridBundle/be_widget_grid_column_wizard.html.twig', [
            'configurableSizes' => [
                'xs' => 'XS',
                'sm' => 'SM',
                'md' => 'MD',
                'lg' => 'LG',
                'xl' => 'XL'
            ],
        ]);

        return $htmlContents;
    }
}
