<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PostCardsPicker extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $postCardsPicker = new FieldsBuilder('post_cards_picker');

        $postCardsPicker
            ->addRepeater('items')
                ->addPostObject('post', [
                    'label' => 'Post',
                    'post_type' => ['post'],
                    'multiple' => 0,
                    'return_format' => 'id',
                ])
            ->endRepeater();

        return $postCardsPicker;
    }
}
