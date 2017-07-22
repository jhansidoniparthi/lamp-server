# roles/database/files/dump.sql
CREATE TABLE IF NOT EXISTS siva (
  message varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO siva (message) VALUES(' UREKA !');
