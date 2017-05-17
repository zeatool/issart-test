<?php
namespace AppBundle\Twig;

use Twig_Extension;
use Twig_SimpleFunction;

class SortExtension extends Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction(
                'getSortClass',
                array($this, 'GetSortClassFunction'),
                array(
                    'is_safe' => array('html'),
                    'needs_environment' => true,
                )
            ),
        );
    }

    function GetSortClassFunction(\Twig_Environment $environment,$column,$sort,$sort_by){
        if ($column==$sort) {
            if($sort_by=='ASC')
                return 'sorting_asc';
            else
                return 'sorting_desc';
        }

        return "";
    }

    public function getName()
    {
        return 'sort_extension';
    }
}