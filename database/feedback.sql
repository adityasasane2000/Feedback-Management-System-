
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `Question1` text NOT NULL,
  `Question2` text NOT NULL,
  `Question3` text NOT NULL,
  `Question4` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `rate` (
  `Computer Labs` text NOT NULL,
  `Practical Labs` text NOT NULL,
  `Collage Library` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `passsword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

----

INSERT INTO `user` (`id`, `email`, `passsword`) VALUES (1, 'admin@admin.com', 'admin');
--

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

