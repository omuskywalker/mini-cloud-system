<?php
    $DBHOST = $config->db->host;
    $DBUSER = $config->db->user;
    $DBPASS = $config->db->pass;
    $DBNAME = $config->db->name;

    $mysqli = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME);
?>