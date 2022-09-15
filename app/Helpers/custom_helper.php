<?php
function userLogin()
{
  $db = \Config\Database::connect();
  return $db->table('users')->where('id_admin', session('id_admin'))->get()->getRow();
}

function countData($table)
{
  $db = \Config\Database::connect();
  return $db->table($table)->countAllResults();
}
