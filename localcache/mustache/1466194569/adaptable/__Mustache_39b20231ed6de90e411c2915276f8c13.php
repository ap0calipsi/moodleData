<?php

class __Mustache_39b20231ed6de90e411c2915276f8c13 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $value = $this->resolveValue($context->find('fromname'), $context, $indent);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
