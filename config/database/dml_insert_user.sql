INSERT INTO tb_users (username, password, role) 
VALUES 
('admin', MD5('admin123'), 'admin'),
('guru', MD5('guru123'), 'pegawai'),
('siswa', MD5('siswa123'), 'pegawai');