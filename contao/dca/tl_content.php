<?php

declare(strict_types=1);

use Respinar\ContaoGlideBundle\Controller\ContentElement\GlideController;

/**
 * Modify the DCA for Glide
 */
// Glide Wrapper (Start)
$GLOBALS['TL_DCA']['tl_content']['palettes'][GlideController::TYPE] = '
    {type_legend},type,headline;
    {slider_legend},sliderDelay,sliderSpeed,sliderStartSlide,sliderContinuous;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop';
