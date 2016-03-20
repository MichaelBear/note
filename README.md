//建立一个数据库mb内表单content

CREATE TABLE IF NOT EXISTS `content` (

`id` int(11) NOT NULL auto_increment,

`name` varchar(20) NOT NULL,

`email` varchar(50) NOT NULL,

`content` varchar(200) NOT NULL,

PRIMARY KEY (`id`))

ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;
