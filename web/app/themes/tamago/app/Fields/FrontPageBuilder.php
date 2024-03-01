<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use Roots\Acorn\Application;

use App\Fields\Partials\PostCardsPicker;

class FrontPageBuilder extends Field
{
    private FieldsBuilder $frontPageBuilder;

    public function __construct(Application $app)
    {
        $this->frontPageBuilder = new FieldsBuilder('front_page_builder');

        parent::__construct($app);
    }
    
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $this->defineGroupConfig();
        $this->defineLocation();
        $this->defineFlexibleContent();

        return $this->frontPageBuilder->build();
    }

    private function defineLocation(): void 
    {
        $this->frontPageBuilder
            ->setLocation('page_type', '==', 'front_page');
    }

    private function defineGroupConfig(): void 
    {
        $this->frontPageBuilder
            ->setGroupConfig('hide_on_screen', ['the_content']);
    }

    private function defineFlexibleContent(): void 
    {
        $this->frontPageBuilder
            ->addFlexibleContent('builder', [
                'button_label' => 'Add Content',
            ])
                ->addLayout($this->get(PostCardsPicker::class))
            ->endFlexibleContent()
        ;
    }
}
