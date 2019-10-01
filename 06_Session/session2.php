<?php
session_name('my-app');
session_start();
echo $_SESSION['name'] ;