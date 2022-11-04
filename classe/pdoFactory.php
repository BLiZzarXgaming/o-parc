<?php
class PDOFactory
{
   //const MYSQL_SERVER = 'mysql:host=localhost;dbname=oparc;charset=utf8;port=4306';
   const MYSQL_SERVER = 'mysql:host=localhost;dbname=oparc;charset=utf8;';
   const MYSQL_LOGIN = 'root';
   const MYSQL_PASSWORD = '';

   public static function getMySQLConnection()
   {
      $bdd = new PDO(self::MYSQL_SERVER, self::MYSQL_LOGIN, self::MYSQL_PASSWORD);

      return $bdd;
   }
};
