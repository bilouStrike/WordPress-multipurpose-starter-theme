<?php

class next_prev_post extends component 
{     
    public function render($component_enable,$attr ='')
    {
        if(parent::check_component($component_enable))
        {
            $output = '' ;
            $next_post = get_next_post();
            $previous_post = get_previous_post();
            if ( !empty( $next_post->ID ) )
            {
                $output .= '<a href="'.get_permalink($next_post->ID).'"> Next Post : '.get_the_title($next_post->ID).' </a>';
            }
            if ( !empty( $previous_post->ID ) )
            {
                $output .= '<a href="'.get_permalink($previous_post->ID).'"> Previous Post : '.get_the_title($previous_post->ID).' </a>';
            }
            echo $output ;
        }
    }
}

?>
