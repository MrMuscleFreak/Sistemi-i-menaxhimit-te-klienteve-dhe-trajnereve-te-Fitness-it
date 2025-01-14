INSERT INTO `clients` (`first_name`, `last_name`, `date_of_birth`, `address`, `contact_info`, `trainer_id`)
VALUES
('Michael', 'Johnson', '1990-05-10', 'Rruga e Dajti 22, Tirane', 'michael.johnson@gmail.com', 1),
('Emily', 'Davis', '1985-03-25', 'Rruga e Kombit 56, Shkoder', 'emily.davis@gmail.com', 7),
('Chris', 'Wilson', '1993-08-15', 'Rruga e Velca 74, Kukës', 'chris.wilson@gmail.com', 5),
('Elena', 'Lleshi', '1989-12-01', 'Rruga e Shkumbin 14, Berat', 'elena.lleshi@gmail.com', 3),
('Robert', 'Kaba', '1995-06-10', 'Rruga e Xhemail 32, Durres', 'robert.kaba@gmail.com', 9),
('Diana', 'Hoxha', '1992-09-15', 'Rruga e Martires 11, Vlore', 'diana.hoxha@gmail.com', 6),
('Blendi', 'Shkodra', '1987-04-20', 'Rruga e Bogas 18, Kukës', 'blendi.shkodra@gmail.com', 10),
('Ardita', 'Rama', '1994-01-05', 'Rruga e Shqipe 26, Shkoder', 'ardita.rama@gmail.com', 4),
('Zef', 'Malli', '1988-07-30', 'Rruga e Tiranes 42, Lezha', 'zef.malli@gmail.com', 2),
('Luna', 'Vogli', '1991-11-12', 'Rruga e Vlorës 56, Kukës', 'luna.vogli@gmail.com', 8),
('Toni', 'Krasniqi', '1990-02-09', 'Rruga e Vela 23, Saranda', 'toni.krasniqi@gmail.com', 12),
('Alma', 'Shabani', '1996-08-25', 'Rruga e Kombit 76, Shkoder', 'alma.shabani@gmail.com', 19),
('Edison', 'Kalliri', '1988-12-05', 'Rruga e Bogas 13, Kukës', 'edison.kalliri@gmail.com', 16),
('Jona', 'Dajti', '1993-03-21', 'Rruga e Lirisë 99, Elbasan', 'jona.dajti@gmail.com', 1),
('Elsa', 'Maja', '1987-05-18', 'Rruga e Banesave 31, Kukës', 'elsa.maja@gmail.com', 20),
('Arlind', 'Lushi', '1995-06-22', 'Rruga e Gjakoves 43, Tirane', 'arlind.lushi@gmail.com', 14),
('Genti', 'Petrela', '1989-07-10', 'Rruga e Teatrit 33, Shkoder', 'genti.petrela@gmail.com', 17),
('Merita', 'Dajti', '1994-04-03', 'Rruga e Kombit 75, Tirane', 'merita.dajti@gmail.com', 13),
('Liridona', 'Shqiperi', '1991-10-17', 'Rruga e Dajti 91, Kukës', 'liridona.shqiperi@gmail.com', 15),
('Seldi', 'Baraku', '1990-08-19', 'Rruga e Bogas 14, Kukës', 'seldi.baraku@gmail.com', 11),
('Ariola', 'Hoxha', '1992-02-25', 'Rruga e Luleve 45, Saranda', 'ariola.hoxha@gmail.com', 18);

INSERT INTO `exercises` (`name`, `type`, `video_link`) VALUES
('Push-Up', 'Strength', 'i9sTjhN4Z3M?si=M3QGuqdebHFuEmbP'),
('Squat', 'Strength', 'xqvCmoLULNY?si=lkzrb2Ddn3pHV3lp'),
('Deadlift', 'Strength', 'XxWcirHIwVo?si=x8Vdlke_Jdzbgb8M'),
('Lunges', 'Strength', 'wrwwXE_x-pQ?si=yGNe-Fa0y47vHM7V'),
('Plank', 'Core', '0MqCCd0MOwc?si=GyUt_NwbAyUvZumk'),
('Jumping Jacks', 'Cardio', 'iSSAk4XCsRA?si=tGFNgY6BsPp18_vr'),
('Burpee', 'Cardio', 'auBLPXO8Fww?si=0X-cyns2c_pQZHu8'),
('High Knees', 'Cardio', 'ZNDHivUg7vA?si=Md7qE1aT6jHQqRQ_'),
('Mountain Climbers', 'Cardio', 'kLh-uczlPLg?si=EnOksctnciDI9NBJ'),
('Boxing Jab', 'Boxing', 'Cm06zG11nm4?si=A2b6jLS2jKrAOfOK'),
('Boxing Cross', 'Boxing', 'sK-6Ujp3KYY?si=GjoyDLeOszRt5IrX'),
('Boxing Uppercut', 'Boxing', 'eBxn21FtqPg?si=DLpUkUgixKiO8Jm4'),
('Kettlebell Swing', 'Strength', '1cVT3ee9mgU?si=KnoJkRhUw3DpqtFy'),
('Overhead Press', 'Strength', '0n86YPrgDBs?si=vjpW4xnKdp0XIbUC'),
('Leg Press', 'Strength', 'B6rGDcfyPto?si=9XoetdkagCesb0R0'),
('Crunch', 'Core', 'MKmrqcoCZ-M?si=rpLwF2Suifmyp4-n'),
('Triceps Dips', 'Strength', 'oA8Sxv2WeOs?si=tHQHkOCcBWySkW9x'),
('Bicycle Crunch', 'Core', 'cbKIDZ_XyjY?si=7x-RqjkA7C0A4P_1'),
('Side Plank', 'Core', 'N_s9em1xTqU?si=qDlYlwzdzGnHfJu7'),
('Sprint', 'Cardio', '6m_fjNhRhkY?si=qV4VMxDsN7WbIbrc');

INSERT INTO `payments` (`client_id`, `amount`, `payment_date`)
VALUES
(35, 45.00, '2025-01-15'),
(56, 50.00, '2025-02-05'),
(38, 55.00, '2025-02-08'),
(61, 60.00, '2025-02-10'),
(49, 40.00, '2025-01-25'),
(33, 50.00, '2025-01-27'),
(70, 65.00, '2025-02-03'),
(67, 55.00, '2025-01-30'),
(72, 60.00, '2025-02-01'),
(60, 45.00, '2025-02-09'),
(41, 70.00, '2025-01-28'),
(48, 60.00, '2025-02-04'),
(42, 55.00, '2025-02-12'),
(66, 50.00, '2025-01-20'),
(64, 65.00, '2025-02-02'),
(43, 60.00, '2025-01-31'),
(34, 50.00, '2025-02-07'),
(62, 45.00, '2025-01-19'),
(55, 70.00, '2025-02-06'),
(52, 60.00, '2025-02-11'),
(71, 55.00, '2025-01-21'),
(32, 65.00, '2025-02-13'),
(40, 50.00, '2025-01-22'),
(57, 45.00, '2025-02-14'),
(68, 60.00, '2025-02-16'),
(59, 55.00, '2025-01-29'),
(39, 65.00, '2025-02-18'),
(44, 50.00, '2025-02-22'),
(45, 60.00, '2025-02-15'),
(58, 55.00, '2025-01-17'),
(51, 65.00, '2025-01-24'),
(36, 50.00, '2025-02-17'),
(50, 45.00, '2025-01-26'),
(66, 55.00, '2025-02-19'),
(55, 60.00, '2025-02-20'),
(41, 70.00, '2025-02-21'),
(46, 60.00, '2025-01-16'),
(43, 65.00, '2025-02-23'),
(69, 50.00, '2025-02-24'),
(64, 60.00, '2025-01-18'),
(34, 55.00, '2025-02-25'),
(70, 60.00, '2025-01-13'),
(61, 65.00, '2025-02-26'),
(72, 70.00, '2025-02-27'),
(32, 55.00, '2025-01-14'),
(57, 60.00, '2025-01-09'),
(52, 50.00, '2025-02-28'),
(58, 65.00, '2025-02-28'),
(48, 70.00, '2025-01-12'),
(69, 55.00, '2025-02-04'),
(33, 60.00, '2025-01-06'),
(67, 50.00, '2025-02-10'),
(59, 65.00, '2025-02-12'),
(44, 50.00, '2025-01-05'),
(56, 60.00, '2025-01-11'),
(41, 55.00, '2025-02-14'),
(65, 70.00, '2025-01-10'),
(62, 60.00, '2025-02-15'),
(40, 50.00, '2025-01-04'),
(34, 65.00, '2025-02-03'),
(36, 55.00, '2025-01-22'),
(61, 50.00, '2025-02-02');

INSERT INTO `program_exercises` (`program_id`, `exercise_id`, `sequence_number`) VALUES
-- Strength Training
(1, 1, 1),
(1, 2, 2),
(1, 3, 3),
(1, 4, 4),
(1, 13, 5),

-- Yoga for Beginners
(2, 1, 1),
(2, 5, 2),
(2, 16, 3),
(2, 19, 4),

-- Boxing Fundamentals
(3, 10, 1),
(3, 11, 2),
(3, 12, 3),
(3, 3, 4),

-- Endurance Training
(4, 7, 1),
(4, 8, 2),
(4, 9, 3),
(4, 19, 4),

-- Pilates for Core Strength
(5, 5, 1),
(5, 6, 2),
(5, 16, 3),
(5, 17, 4),

-- Advanced Weightlifting
(6, 2, 1),
(6, 3, 2),
(6, 13, 3),
(6, 14, 4),

-- CrossFit for All Levels
(7, 6, 1),
(7, 7, 2),
(7, 13, 3),
(7, 4, 4),

-- Kickboxing Conditioning
(8, 10, 1),
(8, 11, 2),
(8, 13, 3),
(8, 9, 4),

-- Powerlifting Training
(9, 2, 1),
(9, 3, 2),
(9, 4, 3),
(9, 14, 4),

-- Cardio for Fat Loss
(10, 7, 1),
(10, 8, 2),
(10, 9, 3),
(10, 19, 4),

-- Bodybuilding Program
(11, 2, 1),
(11, 3, 2),
(11, 13, 3),
(11, 14, 4),

-- Boxing Advanced Techniques
(12, 10, 1),
(12, 11, 2),
(12, 12, 3),
(12, 13, 4),

-- Yoga for Stress Relief
(13, 5, 1),
(13, 16, 2),
(13, 19, 3),

-- Functional Training
(14, 6, 1),
(14, 7, 2),
(14, 4, 3),

-- MMA Conditioning
(15, 10, 1),
(15, 11, 2),
(15, 13, 3),
(15, 12, 4),

-- Sports-Specific Conditioning
(16, 1, 1),
(16, 6, 2),
(16, 19, 3),

-- Flexibility & Mobility Program
(17, 5, 1),
(17, 16, 2),
(17, 17, 3),

-- High-Intensity Interval Training (HIIT)
(18, 7, 1),
(18, 8, 2),
(18, 9, 3),
(18, 19, 4),

-- Swimming for Fitness
(19, 19, 1),
(19, 16, 2),
(19, 18, 3),

-- Cycling Training Program
(20, 19, 1),
(20, 13, 2),
(20, 17, 3),

-- Running for Endurance
(21, 19, 1),
(21, 8, 2),
(21, 7, 3);

INSERT INTO `sessions` (`client_id`, `program_id`, `session_date`)
VALUES
(45, 17, '2025-01-22 10:30:00'),
(31, 5, '2025-02-05 12:00:00'),
(66, 1, '2025-01-29 13:00:00'),
(56, 12, '2025-02-11 09:30:00'),
(49, 3, '2025-02-14 14:30:00'),
(61, 7, '2025-02-07 16:00:00'),
(38, 14, '2025-02-18 10:00:00'),
(72, 16, '2025-01-24 11:30:00'),
(42, 11, '2025-02-03 10:30:00'),
(33, 18, '2025-02-12 15:00:00'),
(39, 4, '2025-02-08 13:30:00'),
(67, 10, '2025-02-19 11:00:00'),
(55, 6, '2025-01-31 14:30:00'),
(71, 2, '2025-01-25 10:00:00'),
(35, 9, '2025-02-16 13:30:00'),
(41, 5, '2025-02-23 09:00:00'),
(59, 15, '2025-01-27 16:30:00'),
(50, 8, '2025-02-04 12:00:00'),
(69, 19, '2025-02-01 10:30:00'),
(34, 13, '2025-01-26 13:00:00'),
(46, 20, '2025-02-02 14:00:00'),
(60, 3, '2025-02-09 13:30:00'),
(63, 21, '2025-02-10 11:30:00'),
(51, 4, '2025-01-30 15:00:00'),
(43, 14, '2025-02-20 12:00:00'),
(32, 18, '2025-02-06 10:00:00'),
(62, 7, '2025-02-15 13:00:00'),
(48, 2, '2025-02-13 14:30:00'),
(40, 8, '2025-02-22 12:00:00'),
(68, 12, '2025-01-28 09:00:00'),
(64, 6, '2025-01-23 13:00:00'),
(57, 13, '2025-02-04 16:00:00'),
(70, 16, '2025-01-21 14:00:00'),
(36, 1, '2025-02-17 11:00:00'),
(44, 9, '2025-01-19 12:30:00'),
(58, 3, '2025-02-21 10:00:00'),
(65, 11, '2025-02-18 14:30:00');

INSERT INTO `trainers` (`first_name`, `last_name`, `specialization`, `experience`, `price_per_session`)
VALUES
('John', 'Doe', 'Bodybuilding', 10, 50.00),
('Jane', 'Smith', 'Yoga', 8, 40.00),
('Alice', 'Brown', 'Boxing', 6, 60.00),
('David', 'Martinez', 'CrossFit', 5, 55.00),
('Sophia', 'Lee', 'Pilates', 7, 45.00),
('Michael', 'Green', 'Weightlifting', 12, 65.00),
('Emily', 'Taylor', 'Dance', 4, 35.00),
('James', 'Wilson', 'Strength Training', 9, 50.00),
('Olivia', 'Harris', 'Kickboxing', 6, 60.00),
('William', 'Scott', 'MMA', 3, 70.00),
('Ava', 'Young', 'Yoga', 11, 40.00),
('Ethan', 'Perez', 'Boxing', 5, 55.00),
('Isabella', 'King', 'Pilates', 8, 45.00),
('Liam', 'Baker', 'CrossFit', 6, 50.00),
('Mason', 'Martinez', 'Bodybuilding', 10, 60.00),
('Mia', 'Garcia', 'Running Coach', 7, 40.00),
('Logan', 'Rodriguez', 'Powerlifting', 9, 65.00),
('Charlotte', 'Lopez', 'Cardio Training', 6, 50.00),
('Benjamin', 'Gonzalez', 'Swimming', 12, 55.00),
('Amelia', 'Perez', 'Cycling', 5, 45.00),
('Sebastian', 'Sanchez', 'Boxing', 7, 60.00);

INSERT INTO `training_programs` (`name`, `description`, `duration_weeks`, `trainer_id`)
VALUES
('Strength Training', 'Build muscle and strength with this program.', 12, 1),
('Yoga for Beginners', 'Learn the basics of yoga for relaxation and flexibility.', 8, 2),
('Boxing Fundamentals', 'Master the basic techniques of boxing.', 10, 3),
('Endurance Training', 'Improve stamina and cardiovascular health.', 10, 4),
('Pilates for Core Strength', 'Focus on strengthening and toning your core.', 8, 5),
('Advanced Weightlifting', 'Push your limits with advanced weightlifting techniques.', 14, 6),
('CrossFit for All Levels', 'A high-intensity program for building strength and endurance.', 12, 7),
('Kickboxing Conditioning', 'Condition your body and learn kickboxing techniques.', 9, 8),
('Powerlifting Training', 'A program focused on improving your max lifts.', 16, 9),
('Cardio for Fat Loss', 'Focus on burning fat and improving cardiovascular health.', 8, 10),
('Bodybuilding Program', 'Build muscle and achieve a more defined physique.', 20, 11),
('Boxing Advanced Techniques', 'Enhance your boxing skills with advanced techniques and drills.', 12, 12),
('Yoga for Stress Relief', 'Use yoga to relieve stress and improve mental well-being.', 6, 13),
('Functional Training', 'Develop functional strength for everyday activities.', 10, 14),
('MMA Conditioning', 'Condition your body for mixed martial arts.', 14, 15),
('Sports-Specific Conditioning', 'Train your body for a specific sport, improving performance.', 10, 16),
('Flexibility & Mobility Program', 'Increase flexibility and range of motion with targeted exercises.', 6, 17),
('High-Intensity Interval Training (HIIT)', 'Short, intense bursts of exercise for maximum fat burn.', 8, 18),
('Swimming for Fitness', 'A program to improve your swimming skills and overall fitness.', 12, 19),
('Cycling Training Program', 'Build endurance and strength through cycling exercises.', 10, 20),
('Running for Endurance', 'Train for longer distances and improve running stamina.', 14, 21);

