<?php

declare(strict_types=1);

namespace Kreyu\Bundle\DataTableBundle\Action\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ButtonActionType extends AbstractActionType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefaults([
                'href' => '#',
                'target' => '_self',
                'link_attr' => [],
                'icon_attr' => [],
            ])
            ->setAllowedTypes('href', ['string', 'callable'])
            ->setAllowedTypes('target', ['string', 'callable'])
            ->setAllowedTypes('link_attr', ['array', 'callable'])
            ->setAllowedTypes('icon_attr', ['array', 'callable'])
        ;
    }
}