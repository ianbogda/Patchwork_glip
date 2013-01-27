<?php

$dir = dirname(dirname(__FILE__));

require_once $dir . '/class/Binary.php';
require_once $dir . '/class/Git/Repository.php';
require_once $dir . '/class/Git/Item.php';
require_once $dir . '/class/Git/Object.php';
require_once $dir . '/class/Git/Blob.php';
require_once $dir . '/class/Git/Commit.php';
require_once $dir . '/class/Git/Commit/Stamp.php';
require_once $dir . '/class/Git/Ref.php';
require_once $dir . '/class/Git/Tree.php';
require_once $dir . '/class/Git/Tree/Error.php';
require_once $dir . '/class/Git/Tree/Invalid/Path/Error.php';
