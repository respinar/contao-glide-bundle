<?php

declare(strict_types=1);

namespace Respinar\ContaoGlideBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(category: 'miscellaneous', nestedFragments: true)]
class GlideController extends AbstractContentElementController
{

    public const TYPE = 'glide';

    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {

        $template->set('delay', $model->sliderDelay);
        $template->set('speed', $model->sliderSpeed);
        $template->set('offset', $model->sliderStartSlide);
        $template->set('loop', $model->sliderContinuous);

        // $GLOBALS['TL_CSS'][] = 'bundles/respinarcontaoglide/glide/css/glide.core.min.css|static';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/respinarcontaoglide/glide/glide.min.js|static';


        return $template->getResponse();
    }
}
