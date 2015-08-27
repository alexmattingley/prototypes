Place your queries below

SELECT * FROM Users WHERE username = "amattingley"

UPDATE Users SET email="iamwhamo@gmail.com" WHERE username="rmattingley"

INSERT INTO users SET username="santaclaus",email="northpolebro@ic.com",password="password"

DELETE FROM Users WHERE username="santaclaus"

//Proto 2

INSERT INTO second_todo_items SET id="1", title="Walk the dog", details="put its leash on and walk", timestamp="date", user_id="amattingley"

INSERT INTO `second_todo_items`(`id`, `title`, `details`, `timestamp`, `user_id`) VALUES (4,"run and swim","workout",CURRENT_TIME,"luliferr")

SELECT * FROM todo_items WHERE `user_id`="amattingley"

DELETE FROM `todo_items` WHERE title="Birthday prep"

UPDATE second_todo_items SET details="MOAR" WHERE title="take pictures"
