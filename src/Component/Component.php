<?php

namespace Kilrizzy\Component;

use Kilrizzy\Component\Contracts\ComponentContract;

class Component implements ComponentContract
{

    public function actionButton($optionOverrides=[]){
        $options = [
            'urlPrefix' => '',
            'element' => '',
            'id' => '',
            'name' => '',
            'additionalLinks' => []
        ];
        $options = array_merge($options,$optionOverrides);
        $output = [];
        $output[] = '<div class="btn-group" role="group">';
        $output[] = '<a href="'.url($options['urlPrefix'].$options['element'].'/'.$options['id'].'/edit').'" class="btn btn-info btn-sm">';
        $output[] = '<span class="glyphicon glyphicon-pencil"></span>';
        $output[] = 'Edit';
        $output[] = '</a>';
        $output[] = '<div class="btn-group" role="group">';
        $output[] = '<button type="button" class="btn btn-default btn-sm" data-toggle="dropdown">';
        $output[] = '<span class="glyphicon glyphicon-cog"></span>';
        $output[] = '<span class="caret"></span>';
        $output[] = '</button>';
        $output[] = '<ul class="dropdown-menu pull-right">';
        if(!empty($options['additionalLinks'])){
            foreach($options['additionalLinks'] as $additionalLink){
                $output[] = '<li><a href="'.url($additionalLink['url']).'">'.$additionalLink['label'].'</a></li>';
            }
            $output[] = '<li class="divider"></li>';
        }
        $output[] = '<li>';
        $output[] = \Former::vertical_open($options['urlPrefix'].$options['element'].'/'.$options['id'])->method('DELETE')->class('form_delete form-confirm-delete');
        $output[] = '<input type="hidden" class="delete-name" name="delete-name" value="'.$options['name'].'"/>';
        $output[] = '<button id="button-delete-{{$elementId}}" type="submit" class="btn btn-danger btn-block btn-xs">';
        $output[] = 'Delete';
        $output[] = '</button>';
        $output[] = \Former::close();
        $output[] = '</li>';
        $output[] = '</ul>';
        $output[] = '</div>'; //btn-group
        $output[] = '</div>'; //btn-group
        $output = implode("\n",$output);
        return $output;
    }
    
}