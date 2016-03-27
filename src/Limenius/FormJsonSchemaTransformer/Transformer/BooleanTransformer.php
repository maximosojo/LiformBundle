<?php

namespace Limenius\FormJsonSchemaTransformer\Transformer;
use Symfony\Component\Form\FormInterface;

class BooleanTransformer
{
    public function transform(FormInterface $form)
    {
        return [
            'type' => 'boolean'
        ];
    }
}
