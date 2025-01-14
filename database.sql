CREATE TABLE `clients` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `date_of_birth` date,
  `address` varchar(255),
  `contact_info` varchar(255),
  `trainer_id` int
);

CREATE TABLE `trainers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `specialization` varchar(255),
  `experience` int,
  `price_per_session` decimal
);

CREATE TABLE `training_programs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `description` text,
  `duration_weeks` int,
  `trainer_id` int
);

CREATE TABLE `exercises` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `type` varchar(255),
  `video_link` varchar(255)
);

CREATE TABLE `sessions` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `client_id` int,
  `program_id` int,
  `session_date` datetime
);

CREATE TABLE `payments` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `client_id` int,
  `amount` decimal,
  `payment_date` date
);

CREATE TABLE `program_exercises` (
  `program_id` int,
  `exercise_id` int,
  `sequence_number` int
);

ALTER TABLE `training_programs` ADD FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`);

ALTER TABLE `sessions` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `sessions` ADD FOREIGN KEY (`program_id`) REFERENCES `training_programs` (`id`);

ALTER TABLE `payments` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `program_exercises` ADD FOREIGN KEY (`program_id`) REFERENCES `training_programs` (`id`);

ALTER TABLE `program_exercises` ADD FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`id`);

ALTER TABLE `clients` ADD FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`);
