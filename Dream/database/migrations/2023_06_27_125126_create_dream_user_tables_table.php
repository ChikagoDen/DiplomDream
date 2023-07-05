<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDreamUserTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("

            /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
            /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
            /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
            /*!50503 SET NAMES utf8 */;
            /*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
            /*!40103 SET TIME_ZONE='+00:00' */;
            /*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
            /*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
            /*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
            /*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

            DROP TABLE IF EXISTS `dream_user_table`;
            /*!40101 SET @saved_cs_client     = @@character_set_client */;
            /*!50503 SET character_set_client = utf8mb4 */;
            CREATE TABLE `dream_user_table` (
            `id_dream_user_table` int NOT NULL AUTO_INCREMENT,
            `dream_user_title` varchar(120) NOT NULL DEFAULT 'без названия',
            `dream_user_discription` varchar(2000) NOT NULL DEFAULT '0',
            `dream_user_Id_User` int NOT NULL,
            `dream_user_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `dream_user_access` int NOT NULL DEFAULT '0' COMMENT 'досту 1-опубликован\\n0-не опубликован\\n2-заблокирован\\n3-удален',
            `dream_user_coment_col` int NOT NULL DEFAULT '0',
            PRIMARY KEY (`id_dream_user_table`),
            KEY `FKuser_idx` (`dream_user_Id_User`),
            CONSTRAINT `FKuser` FOREIGN KEY (`dream_user_Id_User`) REFERENCES `users` (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='сны пользователей';
            /*!40101 SET character_set_client = @saved_cs_client */;
            /*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

            /*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
            /*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
            /*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
            /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
            /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
            /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
            /*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
                    ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("
        DROP TABLE IF EXISTS `dream_user_table`;
        ");
    }
}
