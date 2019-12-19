

CREATE TABLE IF NOT EXISTS `animals` (
  `id` int(11) NOT NULL,
  `animal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `animals` (`id`, `animal`) VALUES
(1, 'dog'),
(2, 'cat');


CREATE TABLE IF NOT EXISTS  `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `color` varchar(20) NOT NULL,
  `animal` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `name`, `color`, `animal`) VALUES
(1, 'Viktor', 'red', 1);


ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
