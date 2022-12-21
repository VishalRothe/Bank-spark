
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Kirthana', 'kirthana@gmail.com', 700000),
(2, 'Harshitha', 'harshitha@gmail.com', 500000),
(3, 'Vidya', 'vidya@gmail.com', 700000),
(4, 'Neeraj', 'neeraj@gmail.com', 800000),
(5, 'Abhiram', 'abhiram@gmail.com', 10000),
(6, 'Venkat', 'venkat@gmail.com', 900000),
(7, 'Karimunnisa', 'karimunnisa@gmail.com', 400000),
(8, 'Bhanu', 'bhanu@gmail.com', 60000),
(9, 'Sushma', 'sushma@gmail.com', 900000),
(10, 'Finy', 'finy@gmail.com', 905000);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;
