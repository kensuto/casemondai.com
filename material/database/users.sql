-- phpMyAdmin SQL Dump
-- version 4.0.1
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成日時: 2013 年 11 月 18 日 12:49
-- サーバのバージョン: 5.6.11
-- PHP のバージョン: 5.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `casemondai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(120) NOT NULL COMMENT 'メールアドレス',
  `name` varchar(256) NOT NULL COMMENT '氏名',
  `password` varchar(50) NOT NULL COMMENT 'パスワード',
  `birthday` date NOT NULL COMMENT '生年月日',
  `sex` tinyint(4) NOT NULL COMMENT '性別 0:男, 1:女',
  `grd_year` smallint(4) DEFAULT NULL COMMENT '最終学歴　卒業年',
  `grd_status` tinyint(4) DEFAULT NULL COMMENT '最終学歴 0:卒業, 1:卒業見込み, 2:中退',
  `school` varchar(256) DEFAULT NULL COMMENT '学校名',
  `school_type` int(11) DEFAULT NULL COMMENT '0:大学, 1:大学院, 2:短期大学, 高等学校・専門学校',
  `major` varchar(256) DEFAULT NULL COMMENT '学部・専攻',
  `optin` tinyint(4) DEFAULT '0' COMMENT '0:メール受信しない, 1:メール受信する',
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `facebook_id` bigint(20) unsigned DEFAULT NULL COMMENT 'facebook ID',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
