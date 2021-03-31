<?php


namespace Hillel\UserAgentInterface;


interface UserAgentInterface
{
    public function browser();
    public function os();
    public function parse($ip);

}
