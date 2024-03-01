<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontendBuilderComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'builder' => $this->builderFields()
        ];
    }

    private function builderFields(): array 
    {
        $builder = get_field('builder');
        if (empty($builder)) {
            return [];
        }

        return $builder;
    }
}
