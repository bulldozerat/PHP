<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['name2']);
//session_destroy();  == stop all sessions