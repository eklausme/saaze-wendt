<?php

// Composer is very slow, see https://eklausmeier.goip.de/blog/2023/10-29-simplified-saaze-monitored-with-phpspy
//require dirname(__DIR__) . '/vendor/autoload.php';

require '../vendor/eklausme/saaze/CollectionArray.php';
require '../vendor/eklausme/saaze/Collection.php';
require '../vendor/eklausme/saaze/Config.php';
require '../vendor/eklausme/saaze/Entry.php';
require '../vendor/eklausme/saaze/MarkdownContentParser.php';
require '../vendor/eklausme/saaze/Saaze.php';
require '../vendor/eklausme/saaze/TemplateManager.php';

(new \Saaze\Saaze('..'))->run();
