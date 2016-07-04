<?php

class __Mustache_358e73deba5b76ec480dcd66318adfbb extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $value = $this->resolveValue($context->find('subject'), $context, $indent);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
