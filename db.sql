# DB 생성
DROP DATABASE IF EXISTS php_blog_2021;
CREATE DATABASE php_blog_2021;
USE php_blog_2021;

# 게시물 테이블 생성
CREATE TABLE article(
id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
regDate DATETIME NOT NULL,
updateDate DATETIME NOT NULL,
title CHAR(100) NOT NULL,
`body` TEXT NOT NULL
);

# 테스트 게시물 생성
INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목1',
`body` = '내용1';

INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목2',
`body` = '내용2';

INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목3',
`body` = '내용3';

INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목4',
`body` = '내용4';

# 댓글 생성
CREATE TABLE reply(
id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
con_num INT(10) NOT NULL,
`name` CHAR(100) NOT NULL,
pw CHAR(100) NOT NULL,
content CHAR(100) NOT NULL,
regDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

# 회원 테이블 생성
CREATE TABLE `member`(
id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
regDate DATETIME NOT NULL,
updateDate DATETIME NOT NULL,
loginId CHAR(20) NOT NULL,
loginPw CHAR(100) NOT NULL,
username CHAR(20) NOT NULL,
nickname CHAR(20) NOT NULL,
email CHAR(100) NOT NULL,
cellphoneNo CHAR(20) NOT NULL
);

# 테스트 회원 생성
INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
loginId = 'user1',
loginPw = 'user1',
username = '홍길동',
nickname = '강바람',
email = 'user1@test.com',
cellphoneNo = '01011111111';

INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
loginId = 'user2',
loginPw = 'user2',
username = '홍길순',
nickname = '이또한',
email = 'user2@test.com',
cellphoneNo = '01022222222'; 





