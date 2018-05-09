--Database bootstrapping
--execute in the exact order

--data insertion address table
INSERT INTO `blood_fighter`.`address`
(`id`, `police_station`, `post_office`, `post_code`, `city`, `division`)
VALUES
(101, "TEST1", "TEST1", 102, "TEST1", "TEST1"),
(102, "TEST2", "TEST2", 102, "TEST1", "TEST2"),
(103, "TEST3", "TEST3", 103, "TEST1", "TEST2"),
(104, "TEST1", "TEST1", 101, "TEST2", "TEST3"),
(105, "TEST2", "TEST2", 102, "TEST2", "TEST3"),
(106, "TEST3", "TEST3", 103, "TEST2", "TEST3"),
(107, "TEST4", "TEST4", 104, "TEST3", "TEST2"),
(108, "TEST1", "TEST1", 101, "TEST4", "TEST1");

--data insertion at donor table
INSERT INTO `blood_fighter`.`donor`
(`id`, `name`, `blood_type`, `login_id`, `password`, `phone_no`, `email`, `nid_no`, `address_id`)
VALUES
(201, "Test1", "A+", 201, 201, "201", "test1@test.com", 201, 101),
(202, "Test2", "A-", 202, 202, "202", "test2@test.com", 202, 102),
(202, "Test2", "O+", 203, 203, "203", "test3@test.com", 203, 103),
(202, "Test2", "O-", 204, 204, "204", "test4@test.com", 204, 104),
(202, "Test2", "B+", 205, 205, "205", "test5@test.com", 205, 105),
(202, "Test2", "B-", 206, 206, "206", "test6@test.com", 206, 106),
(202, "Test2", "AB+", 207, 207, "207", "test7@test.com", 207, 107),
(202, "Test2", "AB-", 208, 208, "208", "test8@test.com", 208, 106);

--data insertion at search_frequency table
insert into `blood_fighter`.`search_frequency`
(`blood_type`, `count`)
values
("A+", 11),
("A-", 2),
("O+", 13),
("O-", 1),
("B+", 23),
("B-", 4),
("AB+", 4),
("AB-", 2);