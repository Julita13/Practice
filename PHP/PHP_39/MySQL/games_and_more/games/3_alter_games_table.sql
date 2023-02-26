
--SET developer_id FOREIGN KEY 
ALTER TABLE `games_and_more`.`games`
ADD CONSTRAINT `FK_games_developers` FOREIGN KEY (`developer_id`) REFERENCES `developers`(`id`) 
ON UPDATE CASCADE ON DELETE RESTRICT;