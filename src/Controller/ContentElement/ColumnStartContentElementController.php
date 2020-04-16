<?php

declare(strict_types=1);

/*
 * This file is part of nexper/contao-grid-bundle.
 *
 * (c) 2020 Nexper <https://nexper.de>
 *
 * @author André Heeke <https://github.com/andreheeke>
 */

namespace Nexper\ContaoGridBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @ContentElement("nx_column_start",
 *  category="nx_grid",
 *  template="ce_nx_column"
 * )
 */
class ColumnStartContentElementController extends AbstractContentElementController
{
    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
        return $template->getResponse();
    }
}
