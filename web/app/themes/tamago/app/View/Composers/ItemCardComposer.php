<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ItemCardComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.item.item-card'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'blockContent' => $this->blockContent()
        ];
    }

    private function blockContent(): array 
    {
        $post = $this->getPostId();

        if (!$post) {
            return [];
        }

        return $this->createDataForBlockById($post);
    }

    private function createDataForBlockById($id): array
    {
        return [
            'title' => get_the_title($id),
            'excerpt' => get_the_excerpt($id),
            'permalink' => get_the_permalink($id),
            'thumbnail' => get_the_post_thumbnail($id, 'medium', ['class' => 'w-full']),
            'date' => $this->calculateDaysSincePost($id)
        ];
    }
    
    private function getPostId()
    {
        $item = $this->data->get('item');

        if (!$item) {
            return null;
        }

        return $item['post'];
    }

    private function calculateDaysSincePost($post)
    {
        $postTime = get_the_time('U', $post);
        $currentTime = current_time('timestamp');
    
        $diffInDays = round(($currentTime - $postTime) / (60 * 60 * 24));
        return $this->generateTextForDate($diffInDays);
    }

    // Todo move to helper
    private function generateTextForDate($days): string 
    {
        switch ($days)
        {
            case 0:
                return __('dziś', 'prefix');
            case 1:
                return __('1 dzień temu', 'prefix');
            default:
                return sprintf(__('%d dni temu', 'prefix'), $days);
        }
    }
}
