

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `db_donvi` (
  `ma_donvi` int(10) UNSIGNED NOT NULL,
  `ten_donvi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `somayban` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_donvicha` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ructure for table `db_nguoidung`

CREATE TABLE `db_nguoidung` (
  `ma_nguoidung` int(10) UNSIGNED NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `db_nhanvien` (
  `ma_nhanvien` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodt_coquan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodt_didong` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_donvi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `db_donvi`
  ADD PRIMARY KEY (`ma_donvi`),
  ADD KEY `ma_donvicha` (`ma_donvicha`);


ALTER TABLE `db_nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `db_nhanvien`
  ADD PRIMARY KEY (`ma_nhanvien`),
  ADD KEY `ma_donvi` (`ma_donvi`);


ALTER TABLE `db_donvi`
  MODIFY `ma_donvi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


ALTER TABLE `db_nguoidung`
  MODIFY `ma_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `db_nhanvien`
  MODIFY `ma_nhanvien` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


ALTER TABLE `db_donvi`
  ADD CONSTRAINT `db_donvi_ibfk_1` FOREIGN KEY (`ma_donvicha`) REFERENCES `db_donvi` (`ma_donvi`);

onstraints for table `db_nhanvien`

ALTER TABLE `db_nhanvien`
  ADD CONSTRAINT `db_nhanvien_ibfk_1` FOREIGN KEY (`ma_donvi`) REFERENCES `db_donvi` (`ma_donvi`);
COMMIT;

