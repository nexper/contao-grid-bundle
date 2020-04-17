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
use Symfony\Contracts\Translation\TranslatorInterface;

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

        /** @var TranslatorInterface $translator */
        $translator = System::getContainer()->get('translator');

        // Make sure there is at least an empty array
		if (empty($this->varValue) || !\is_array($this->varValue)) {
		    $this->varValue = array();
        }

        dump($this->varValue);

        if(TL_MODE === 'BE') {
            $GLOBALS['TL_CSS'][] = 'bundles/contaogrid/backend.css';
        }

        $editableBreakpoints = $this->getEditableBreakpoints($translator);

        $htmlContents = $twig->render('@NexperContaoGridBundle/be_widget_grid_column_wizard.html.twig', [
            'editableBreakpoints' => $editableBreakpoints,
        ]);

        return $htmlContents;
    }

    /**
     * Get editable breakpoints.
     *
     * @param TranslatorInterface $translator
     *
     * @return array
     */
    private function getEditableBreakpoints(TranslatorInterface $translator): array
    {
        /** @var string $editableBreakpoints */
        $editableBreakpoints = System::getContainer()->getParameter('nx_grid.editable_breakpoints');

        $breakpoints = array();
        foreach(explode(',', $editableBreakpoints) as $breakpoint) {
            $breakpoints[$breakpoint] = $translator->trans('tl_content.nx_grid_breakpoint_'.$breakpoint.'.0', [], 'contao_default');
        }

        return $breakpoints;
    }
}
