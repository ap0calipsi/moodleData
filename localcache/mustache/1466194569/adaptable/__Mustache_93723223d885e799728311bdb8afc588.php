<?php

class __Mustache_93723223d885e799728311bdb8afc588 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $value = $this->resolveValue($context->find('body'), $context, $indent);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
