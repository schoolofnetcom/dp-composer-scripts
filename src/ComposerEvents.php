<?php

namespace ErikFig;

class ComposerEvents
{
    public static function postAutoloadDump($event)
    {
        var_dump($event->getComposer());
    }
}
