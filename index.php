<?php
require 'session.php';
require 'data.php';



if (!check('user')) {
    require 'unregister.php';
} else {
    require 'welcome.php';
}