<?php

class __Mustache_daafb3c10d4692bd68820a3d6f0c4112 extends Mustache_Template
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
