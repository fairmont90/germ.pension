-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 19 2016 г., 12:39
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `pension.test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questionanswers`
--

CREATE TABLE IF NOT EXISTS `questionanswers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `QuestionId` int(11) NOT NULL,
  `AnswerText` tinytext NOT NULL,
  `AnswerImage` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `questionanswers`
--

INSERT INTO `questionanswers` (`Id`, `QuestionId`, `AnswerText`, `AnswerImage`) VALUES
(1, 1, 'Nein', 'img/questions/opt-1-1.png'),
(2, 1, 'Mal sehen', 'img/questions/opt-1-2.png'),
(3, 1, 'Ja', 'img/questions/opt-1-3.png'),
(4, 1, 'Hab schon und noch mehr', 'img/questions/opt-1-4.png'),
(5, 2, 'Mal sehen', 'img/questions/opt-1-2.png'),
(6, 2, 'Nein', 'img/questions/opt-1-1.png'),
(7, 2, 'Ja', 'img/questions/opt-1-3.png'),
(8, 2, 'Hab schon und noch mehr', 'img/questions/opt-1-4.png'),
(9, 3, 'Mal sehen', 'img/questions/opt-1-2.png'),
(10, 3, 'Nein', 'img/questions/opt-1-1.png'),
(11, 3, 'Ja', 'img/questions/opt-1-3.png'),
(12, 3, 'Hab schon und noch mehr', 'img/questions/opt-1-4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Question` tinytext NOT NULL,
  `QuestionIcon` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`Id`, `Question`, `QuestionIcon`) VALUES
(1, 'Ich wunche mir Kinder', 'img/pick-1.png'),
(2, 'Second Question', 'img/pick-1.png'),
(3, 'Third Question', 'img/pick-1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `useranswers`
--

CREATE TABLE IF NOT EXISTS `useranswers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `SessionId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `QuestionId` int(11) NOT NULL,
  `AnswerId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `UserEmail` (`UserEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `UserEmail`, `Password`) VALUES
(1, 'pereskokow@gmail.com', '123'),
(2, 'admin@mail.ru', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
