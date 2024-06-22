CREATE TABLE `bought`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `seat` INT NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `ticket id` INT NOT NULL
);
ALTER TABLE
    `bought` ADD UNIQUE `bought_seat_unique`(`seat`);
CREATE TABLE `cities`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `vehicle id` INT NOT NULL,
    `city` VARCHAR(100) NOT NULL,
    `Arrival time` DATETIME NOT NULL,
    `Departure time` DATETIME NOT NULL
);
CREATE TABLE `Users`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(255) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `photo` BLOB NOT NULL
);
ALTER TABLE
    `Users` ADD UNIQUE `users_email_unique`(`email`);
CREATE TABLE `vehicles`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Tracking id` INT NOT NULL,
    `vehicle type` VARCHAR(20) NOT NULL,
    `type` VARCHAR(100) NOT NULL,
    `free seats` BIGINT NOT NULL,
    `Arrival time` DATETIME NOT NULL,
    `Departure time` DATETIME NOT NULL,
    `Duration` TIME NOT NULL,
    `no`.` of stops` INT NOT NULL
);
ALTER TABLE
    `vehicles` ADD UNIQUE `vehicles_tracking id_unique`(`Tracking id`);
CREATE TABLE `tracking`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `vehicle id` INT NOT NULL
);
ALTER TABLE
    `tracking` ADD UNIQUE `tracking_vehicle id_unique`(`vehicle id`);
CREATE TABLE `tickets`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `seat id` INT NOT NULL,
    `vehicle id` INT NOT NULL,
    `vehicle type` VARCHAR(20) NOT NULL,
    `class` VARCHAR(100) NOT NULL,
    `Bought` BOOLEAN NOT NULL
);
ALTER TABLE
    `tickets` ADD UNIQUE `tickets_seat id_unique`(`seat id`);
ALTER TABLE
    `vehicles` ADD CONSTRAINT `vehicles_vehicle type_foreign` FOREIGN KEY(`vehicle type`) REFERENCES `tickets`(`vehicle type`);
ALTER TABLE
    `bought` ADD CONSTRAINT `bought_ticket id_foreign` FOREIGN KEY(`ticket id`) REFERENCES `tickets`(`id`);
ALTER TABLE
    `tracking` ADD CONSTRAINT `tracking_vehicle id_foreign` FOREIGN KEY(`vehicle id`) REFERENCES `vehicles`(`id`);
ALTER TABLE
    `vehicles` ADD CONSTRAINT `vehicles_tracking id_foreign` FOREIGN KEY(`Tracking id`) REFERENCES `tracking`(`id`);
ALTER TABLE
    `Users` ADD CONSTRAINT `users_email_foreign` FOREIGN KEY(`email`) REFERENCES `bought`(`email`);
ALTER TABLE
    `tickets` ADD CONSTRAINT `tickets_vehicle id_foreign` FOREIGN KEY(`vehicle id`) REFERENCES `vehicles`(`id`);
ALTER TABLE
    `cities` ADD CONSTRAINT `cities_vehicle id_foreign` FOREIGN KEY(`vehicle id`) REFERENCES `vehicles`(`id`);