-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.19 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela users_crud.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` text,
  `user_cpf` varchar(50) DEFAULT NULL,
  `user_dt` date DEFAULT NULL,
  `user_mail` text,
  `user_phone` varchar(50) DEFAULT NULL,
  `user_address` text,
  `user_city` text,
  `user_state` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela users_crud.users: ~15 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `user_name`, `user_cpf`, `user_dt`, `user_mail`, `user_phone`, `user_address`, `user_city`, `user_state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Arnaldo 2', '12345678909', '2021-04-13', 'arnaldo_lux@gmail.com', '5582996137123', 'Rua da Paz, nº 101. CJ Dubeux Leão', 'Maceió', 'Alagoas', '2021-04-10 21:34:27', '2021-04-12 22:30:53', NULL);
INSERT INTO `users` (`id`, `user_name`, `user_cpf`, `user_dt`, `user_mail`, `user_phone`, `user_address`, `user_city`, `user_state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 'Lucas Gomes', '12345678909', '1996-01-01', 'gomes_lucas@gmail.com', '5582996137123', 'Rua da Paz, nº 101. CJ Dubeux Leão', 'Maceió', 'Alagoas', '2021-04-10 21:34:27', '2021-04-12 22:31:54', NULL);
INSERT INTO `users` (`id`, `user_name`, `user_cpf`, `user_dt`, `user_mail`, `user_phone`, `user_address`, `user_city`, `user_state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(14, 'Pereira Junior', '12345678909', '1996-02-02', 'junior_pereira@gmail.com', '5582996137123', 'Rua da Paz, nº 101. CJ Dubeux Leão', 'Maceió', 'Alagoas', '2021-04-10 21:34:27', '2021-04-10 21:34:31', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
