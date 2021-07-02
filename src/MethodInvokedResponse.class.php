<?php

require_once(dirname(__FILE__) . '/MethodInvoked.class.php');

class MethodInvokedResponse
{
    private $methodInvoked;

    public function __construct(MethodInvoked $methodInvoked)
    {
        $this->methodInvoked = $methodInvoked;
    }

    public function toArray()
    {
        return [
            'response' => 'success',
            'body' => $this->methodInvoked->toArray()
        ];
    }
}
