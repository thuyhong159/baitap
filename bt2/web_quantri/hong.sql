use `hairsalon`;
CREATE TABLE IF NOT EXISTS `quanlybanggia`(
	`idSP` VARCHAR(8) NOT NULL PRIMARY KEY,
	`hinhanh` VARCHAR(200) NOT NULL,
	`tenSP` VARCHAR(40) NOT NULL,
	`gia` VARCHAR(15) NOT NULL
)ENGINE=MyISAM;


INSERT INTO `quanlybanggia`(`idSP`,`hinhanh`,`tenSP`,`gia`) VALUES(
	'sp1',
	'../image/anh.',
	'goi dau',
	'20-50k'
),(
	'sp2',
	'../image/anh',
	'cat toc nam',
	'20-40k'
),(

	'sp3',
	'../image/anh',
	'cat toc nu',
	'50-100k'
),
(
	'sp4',
	'../image/anh',
	'Uon',
	'350-700k'
),(
	'sp5',
	'../image/anh',
	'Ep',
	'350-600k'
),(
	'sp6',
	'../image/anh',
	'Nhuom',
	'150-300k'
)