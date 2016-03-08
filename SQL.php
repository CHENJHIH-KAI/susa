CREATE TABLE susers (
    userid int(10) unsigned NOT NULL auto_increment,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    guid varchar(32),
    PRIMARY KEY (userid)
    ) TYPE=MyISAM;
    
INSERT INTO susers VALUES (
    NULL,
    'test@user.com',
    password('pass'),
    NULL
    )