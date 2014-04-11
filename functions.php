<?php

register_sidebar(array('name'=>'Base widgets', 
	'description'=>'Widgets in this area will be shown at the bottom of the page.', 
	'before_title'=>'<h3 style="display: none">', 
	'after_title'=>'</h3>', 
	'before_widget'=>'<div class="box">', 
	'after_widget'=>'</div>'));

function project($atts, $description = 'project description') {
    extract( shortcode_atts( array(
        'link' => '',
        'img' => '',
        'title' => 'Project title',
        'class' => 'project'
        ), $atts ) );
    
    $description = trim($description);
    
    $result = '<div class="' . $class . '">';
    
    if ($img) {
        if ($link) {
            $result .= '<a href="' . $link . '">';
        }
        $result .= '<div class="img-wrap">';
        $result .='<div class="proj-img" style="background-image: url(\'' . $img . '\')"></div>';
        $result .='</div>';
        if ($link) {
            $result .= '</a>';
        }
    }
    
    $result .= '<div class="proj-text">';
    if ($link) {
        $result .= '<a href="' . $link . '">';
    }
    $result .='<h4 class="proj-title">' . $title . '</h4>';
    if ($link) {
        $result .= '</a>';
    }
    
    $result .='<div class="proj-desc">'. $description . '</div>';
    $result .='</div>';
    $result .='</div>';
    return $result;
}

add_shortcode('project', 'project');

