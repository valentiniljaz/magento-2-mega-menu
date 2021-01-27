<?php

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Magiccart_Magicmenu',
    isset($file) ? dirname($file) : __DIR__
);
