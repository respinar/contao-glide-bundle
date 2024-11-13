<?php

declare(strict_types=1);

use Respinar\ContaoGlideBundle\Controller\ContentElement\GlideStartController;
use Respinar\ContaoGlideBundle\Controller\ContentElement\GlideStopController;

/**
 * Modify the DCA for Glide
 */
// Glide Wrapper (Start)
$GLOBALS['TL_DCA']['tl_content']['palettes'][GlideStartController::TYPE] = '
    {type_legend},type;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop
';

// Glide Wrapper (Stop)
$GLOBALS['TL_DCA']['tl_content']['palettes'][GlideStopController::TYPE] = '
    {type_legend},type;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop
';
