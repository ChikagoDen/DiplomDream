<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDreambooksTable extends Migration
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
        
        
        DROP TABLE IF EXISTS `dreambook`;
        /*!40101 SET @saved_cs_client     = @@character_set_client */;
        /*!50503 SET character_set_client = utf8mb4 */;
        CREATE TABLE `dreambook` (
          `idDreamBook` int NOT NULL AUTO_INCREMENT,
          `DreamBookWord` varchar(45) DEFAULT NULL COMMENT 'слова для поиска',
          `DreamBookDescription` mediumtext COMMENT 'описание слов',
          `idDream` int NOT NULL COMMENT 'ид сонника',
          `LikeCol` int DEFAULT '0',
          PRIMARY KEY (`idDreamBook`),
          KEY `FKbiblioteka_idx` (`idDream`),
          CONSTRAINT `FKbiblioteka` FOREIGN KEY (`idDream`) REFERENCES `biblioteca_tabl` (`id_biblioteca_tabl`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE=InnoDB AUTO_INCREMENT=5669 DEFAULT CHARSET=utf8 COMMENT='Сонник';
        /*!40101 SET character_set_client = @saved_cs_client */;
        /*!50003 SET @saved_cs_client      = @@character_set_client */ ;
        /*!50003 SET @saved_cs_results     = @@character_set_results */ ;
        /*!50003 SET @saved_col_connection = @@collation_connection */ ;
        /*!50003 SET character_set_client  = utf8mb4 */ ;
        /*!50003 SET character_set_results = utf8mb4 */ ;
        /*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
        /*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
        /*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
        /*!50003 CREATE*/  /*!50003 TRIGGER `dreambook_AFTER_INSERT` AFTER INSERT ON `dreambook` FOR EACH ROW BEGIN
        UPDATE `biblioteca_tabl`
         SET `biblioteca_tabl_word_col` = (
            SELECT count(idDream) FROM `dreambook` where `idDream`= `id_biblioteca_tabl`);
        END */;
        /*!50003 SET sql_mode              = @saved_sql_mode */ ;
        /*!50003 SET character_set_client  = @saved_cs_client */ ;
        /*!50003 SET character_set_results = @saved_cs_results */ ;
        /*!50003 SET collation_connection  = @saved_col_connection */ ;
        /*!50003 SET @saved_cs_client      = @@character_set_client */ ;
        /*!50003 SET @saved_cs_results     = @@character_set_results */ ;
        /*!50003 SET @saved_col_connection = @@collation_connection */ ;
        /*!50003 SET character_set_client  = utf8mb4 */ ;
        /*!50003 SET character_set_results = utf8mb4 */ ;
        /*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
        /*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
        /*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
        /*!50003 CREATE*/ /*!50003 TRIGGER `dreambook_BEFORE_UPDATE` BEFORE UPDATE ON `dreambook` FOR EACH ROW BEGIN
        UPDATE `biblioteca_tabl`
        SET `biblioteca_tabl_word_col` = (
            SELECT count(idDream) FROM `dreambook` where `idDream`= `id_biblioteca_tabl` 
        
        );
        END */;
        /*!50003 SET sql_mode              = @saved_sql_mode */ ;
        /*!50003 SET character_set_client  = @saved_cs_client */ ;
        /*!50003 SET character_set_results = @saved_cs_results */ ;
        /*!50003 SET collation_connection  = @saved_col_connection */ ;
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
        DB::unprepared(' DROP TABLE IF EXISTS `dreambook`;');
    }
}
