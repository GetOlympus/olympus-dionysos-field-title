<?php

namespace GetOlympus\Dionysos\Field;

use GetOlympus\Zeus\Field\Field;

/**
 * Builds Title field.
 *
 * @package    DionysosField
 * @subpackage Title
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

class Title extends Field
{
    /**
     * @var string
     */
    protected $template = 'title.html.twig';

    /**
     * @var string
     */
    protected $textdomain = 'titlefield';

    /**
     * Prepare defaults.
     *
     * @return array
     */
    protected function getDefaults() : array
    {
        return [
            'title' => parent::t('title.title', $this->textdomain),
            'class' => '',
            'level' => 2,
        ];
    }

    /**
     * Prepare variables.
     *
     * @param  object  $value
     * @param  array   $contents
     *
     * @return array
     */
    protected function getVars($value, $contents) : array
    {
        // Get contents
        $vars = $contents;

        // Check level
        $vars['level'] = is_int($vars['level']) && 1 <= $vars['level'] && 6 >= $vars['level'] ? $vars['level'] : 2;

        // Check class
        $vars['class'] = !empty($vars['class']) ? ' '.$vars['class'] : '';

        // Update vars
        return $vars;
    }
}
