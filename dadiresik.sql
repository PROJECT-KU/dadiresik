-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2021 pada 14.12
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dadiresik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` char(50) NOT NULL,
  `id_prov` char(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `id_prov`, `nama`, `id_jenis`) VALUES
('1101', '11', 'KAB. ACEH SELATAN', 1),
('1102', '11', 'KAB. ACEH TENGGARA', 1),
('1103', '11', 'KAB. ACEH TIMUR', 1),
('1104', '11', 'KAB. ACEH TENGAH', 1),
('1105', '11', 'KAB. ACEH BARAT', 1),
('1106', '11', 'KAB. ACEH BESAR', 1),
('1107', '11', 'KAB. PIDIE', 1),
('1108', '11', 'KAB. ACEH UTARA', 1),
('1109', '11', 'KAB. SIMEULUE', 1),
('1110', '11', 'KAB. ACEH SINGKIL', 1),
('1111', '11', 'KAB. BIREUEN', 1),
('1112', '11', 'KAB. ACEH BARAT DAYA', 1),
('1113', '11', 'KAB. GAYO LUES', 1),
('1114', '11', 'KAB. ACEH JAYA', 1),
('1115', '11', 'KAB. NAGAN RAYA', 1),
('1116', '11', 'KAB. ACEH TAMIANG', 1),
('1117', '11', 'KAB. BENER MERIAH', 1),
('1118', '11', 'KAB. PIDIE JAYA', 1),
('1171', '11', 'KOTA BANDA ACEH', 2),
('1172', '11', 'KOTA SABANG', 2),
('1173', '11', 'KOTA LHOKSEUMAWE', 2),
('1174', '11', 'KOTA LANGSA', 2),
('1175', '11', 'KOTA SUBULUSSALAM', 2),
('1201', '12', 'KAB. TAPANULI TENGAH', 1),
('1202', '12', 'KAB. TAPANULI UTARA', 1),
('1203', '12', 'KAB. TAPANULI SELATAN', 1),
('1204', '12', 'KAB. NIAS', 1),
('1205', '12', 'KAB. LANGKAT', 1),
('1206', '12', 'KAB. KARO', 1),
('1207', '12', 'KAB. DELI SERDANG', 1),
('1208', '12', 'KAB. SIMALUNGUN', 1),
('1209', '12', 'KAB. ASAHAN', 1),
('1210', '12', 'KAB. LABUHANBATU', 1),
('1211', '12', 'KAB. DAIRI', 1),
('1212', '12', 'KAB. TOBA SAMOSIR', 1),
('1213', '12', 'KAB. MANDAILING NATAL', 1),
('1214', '12', 'KAB. NIAS SELATAN', 1),
('1215', '12', 'KAB. PAKPAK BHARAT', 1),
('1216', '12', 'KAB. HUMBANG HASUNDUTAN', 1),
('1217', '12', 'KAB. SAMOSIR', 1),
('1218', '12', 'KAB. SERDANG BEDAGAI', 1),
('1219', '12', 'KAB. BATU BARA', 1),
('1220', '12', 'KAB. PADANG LAWAS UTARA', 1),
('1221', '12', 'KAB. PADANG LAWAS', 1),
('1222', '12', 'KAB. LABUHANBATU SELATAN', 1),
('1223', '12', 'KAB. LABUHANBATU UTARA', 1),
('1224', '12', 'KAB. NIAS UTARA', 1),
('1225', '12', 'KAB. NIAS BARAT', 1),
('1271', '12', 'KOTA MEDAN', 2),
('1272', '12', 'KOTA PEMATANG SIANTAR', 2),
('1273', '12', 'KOTA SIBOLGA', 2),
('1274', '12', 'KOTA TANJUNG BALAI', 2),
('1275', '12', 'KOTA BINJAI', 2),
('1276', '12', 'KOTA TEBING TINGGI', 2),
('1277', '12', 'KOTA PADANGSIDIMPUAN', 2),
('1278', '12', 'KOTA GUNUNGSITOLI', 2),
('1301', '13', 'KAB. PESISIR SELATAN', 1),
('1302', '13', 'KAB. SOLOK', 1),
('1303', '13', 'KAB. SIJUNJUNG', 1),
('1304', '13', 'KAB. TANAH DATAR', 1),
('1305', '13', 'KAB. PADANG PARIAMAN', 1),
('1306', '13', 'KAB. AGAM', 1),
('1307', '13', 'KAB. LIMA PULUH KOTA', 1),
('1308', '13', 'KAB. PASAMAN', 1),
('1309', '13', 'KAB. KEPULAUAN MENTAWAI', 1),
('1310', '13', 'KAB. DHARMASRAYA', 1),
('1311', '13', 'KAB. SOLOK SELATAN', 1),
('1312', '13', 'KAB. PASAMAN BARAT', 1),
('1371', '13', 'KOTA PADANG', 2),
('1372', '13', 'KOTA SOLOK', 2),
('1373', '13', 'KOTA SAWAHLUNTO', 2),
('1374', '13', 'KOTA PADANG PANJANG', 2),
('1375', '13', 'KOTA BUKITTINGGI', 2),
('1376', '13', 'KOTA PAYAKUMBUH', 2),
('1377', '13', 'KOTA PARIAMAN', 2),
('1401', '14', 'KAB. KAMPAR', 1),
('1402', '14', 'KAB. INDRAGIRI HULU', 1),
('1403', '14', 'KAB. BENGKALIS', 1),
('1404', '14', 'KAB. INDRAGIRI HILIR', 1),
('1405', '14', 'KAB. PELALAWAN', 1),
('1406', '14', 'KAB. ROKAN HULU', 1),
('1407', '14', 'KAB. ROKAN HILIR', 1),
('1408', '14', 'KAB. SIAK', 1),
('1409', '14', 'KAB. KUANTAN SINGINGI', 1),
('1410', '14', 'KAB. KEPULAUAN MERANTI', 1),
('1471', '14', 'KOTA PEKANBARU', 2),
('1472', '14', 'KOTA DUMAI', 2),
('1501', '15', 'KAB. KERINCI', 1),
('1502', '15', 'KAB. MERANGIN', 1),
('1503', '15', 'KAB. SAROLANGUN', 1),
('1504', '15', 'KAB. BATANGHARI', 1),
('1505', '15', 'KAB. MUARO JAMBI', 1),
('1506', '15', 'KAB. TANJUNG JABUNG BARAT', 1),
('1507', '15', 'KAB. TANJUNG JABUNG TIMUR', 1),
('1508', '15', 'KAB. BUNGO', 1),
('1509', '15', 'KAB. TEBO', 1),
('1571', '15', 'KOTA JAMBI', 2),
('1572', '15', 'KOTA SUNGAI PENUH', 2),
('1601', '16', 'KAB. OGAN KOMERING ULU', 1),
('1602', '16', 'KAB. OGAN KOMERING ILIR', 1),
('1603', '16', 'KAB. MUARA ENIM', 1),
('1604', '16', 'KAB. LAHAT', 1),
('1605', '16', 'KAB. MUSI RAWAS', 1),
('1606', '16', 'KAB. MUSI BANYUASIN', 1),
('1607', '16', 'KAB. BANYUASIN', 1),
('1608', '16', 'KAB. OGAN KOMERING ULU TIMUR', 1),
('1609', '16', 'KAB. OGAN KOMERING ULU SELATAN', 1),
('1610', '16', 'KAB. OGAN ILIR', 1),
('1611', '16', 'KAB. EMPAT LAWANG', 1),
('1612', '16', 'KAB. PENUKAL ABAB LEMATANG ILIR', 1),
('1613', '16', 'KAB. MUSI RAWAS UTARA', 1),
('1671', '16', 'KOTA PALEMBANG', 2),
('1672', '16', 'KOTA PAGAR ALAM', 2),
('1673', '16', 'KOTA LUBUK LINGGAU', 2),
('1674', '16', 'KOTA PRABUMULIH', 2),
('1701', '17', 'KAB. BENGKULU SELATAN', 1),
('1702', '17', 'KAB. REJANG LEBONG', 1),
('1703', '17', 'KAB. BENGKULU UTARA', 1),
('1704', '17', 'KAB. KAUR', 1),
('1705', '17', 'KAB. SELUMA', 1),
('1706', '17', 'KAB. MUKO MUKO', 1),
('1707', '17', 'KAB. LEBONG', 1),
('1708', '17', 'KAB. KEPAHIANG', 1),
('1709', '17', 'KAB. BENGKULU TENGAH', 1),
('1771', '17', 'KOTA BENGKULU', 2),
('1801', '18', 'KAB. LAMPUNG SELATAN', 1),
('1802', '18', 'KAB. LAMPUNG TENGAH', 1),
('1803', '18', 'KAB. LAMPUNG UTARA', 1),
('1804', '18', 'KAB. LAMPUNG BARAT', 1),
('1805', '18', 'KAB. TULANG BAWANG', 1),
('1806', '18', 'KAB. TANGGAMUS', 1),
('1807', '18', 'KAB. LAMPUNG TIMUR', 1),
('1808', '18', 'KAB. WAY KANAN', 1),
('1809', '18', 'KAB. PESAWARAN', 1),
('1810', '18', 'KAB. PRINGSEWU', 1),
('1811', '18', 'KAB. MESUJI', 1),
('1812', '18', 'KAB. TULANG BAWANG BARAT', 1),
('1813', '18', 'KAB. PESISIR BARAT', 1),
('1871', '18', 'KOTA BANDAR LAMPUNG', 2),
('1872', '18', 'KOTA METRO', 2),
('1901', '19', 'KAB. BANGKA', 1),
('1902', '19', 'KAB. BELITUNG', 1),
('1903', '19', 'KAB. BANGKA SELATAN', 1),
('1904', '19', 'KAB. BANGKA TENGAH', 1),
('1905', '19', 'KAB. BANGKA BARAT', 1),
('1906', '19', 'KAB. BELITUNG TIMUR', 1),
('1971', '19', 'KOTA PANGKAL PINANG', 2),
('2101', '21', 'KAB. BINTAN', 1),
('2102', '21', 'KAB. KARIMUN', 1),
('2103', '21', 'KAB. NATUNA', 1),
('2104', '21', 'KAB. LINGGA', 1),
('2105', '21', 'KAB. KEPULAUAN ANAMBAS', 1),
('2171', '21', 'KOTA BATAM', 2),
('2172', '21', 'KOTA TANJUNG PINANG', 2),
('3101', '31', 'KAB. ADM. KEP. SERIBU', 1),
('3171', '31', 'KOTA ADM. JAKARTA PUSAT', 2),
('3172', '31', 'KOTA ADM. JAKARTA UTARA', 2),
('3173', '31', 'KOTA ADM. JAKARTA BARAT', 2),
('3174', '31', 'KOTA ADM. JAKARTA SELATAN', 2),
('3175', '31', 'KOTA ADM. JAKARTA TIMUR', 2),
('3201', '32', 'KAB. BOGOR', 1),
('3202', '32', 'KAB. SUKABUMI', 1),
('3203', '32', 'KAB. CIANJUR', 1),
('3204', '32', 'KAB. BANDUNG', 1),
('3205', '32', 'KAB. GARUT', 1),
('3206', '32', 'KAB. TASIKMALAYA', 1),
('3207', '32', 'KAB. CIAMIS', 1),
('3208', '32', 'KAB. KUNINGAN', 1),
('3209', '32', 'KAB. CIREBON', 1),
('3210', '32', 'KAB. MAJALENGKA', 1),
('3211', '32', 'KAB. SUMEDANG', 1),
('3212', '32', 'KAB. INDRAMAYU', 1),
('3213', '32', 'KAB. SUBANG', 1),
('3214', '32', 'KAB. PURWAKARTA', 1),
('3215', '32', 'KAB. KARAWANG', 1),
('3216', '32', 'KAB. BEKASI', 1),
('3217', '32', 'KAB. BANDUNG BARAT', 1),
('3218', '32', 'KAB. PANGANDARAN', 1),
('3271', '32', 'KOTA BOGOR', 2),
('3272', '32', 'KOTA SUKABUMI', 2),
('3273', '32', 'KOTA BANDUNG', 2),
('3274', '32', 'KOTA CIREBON', 2),
('3275', '32', 'KOTA BEKASI', 2),
('3276', '32', 'KOTA DEPOK', 2),
('3277', '32', 'KOTA CIMAHI', 2),
('3278', '32', 'KOTA TASIKMALAYA', 2),
('3279', '32', 'KOTA BANJAR', 2),
('3301', '33', 'KAB. CILACAP', 1),
('3302', '33', 'KAB. BANYUMAS', 1),
('3303', '33', 'KAB. PURBALINGGA', 1),
('3304', '33', 'KAB. BANJARNEGARA', 1),
('3305', '33', 'KAB. KEBUMEN', 1),
('3306', '33', 'KAB. PURWOREJO', 1),
('3307', '33', 'KAB. WONOSOBO', 1),
('3308', '33', 'KAB. MAGELANG', 1),
('3309', '33', 'KAB. BOYOLALI', 1),
('3310', '33', 'KAB. KLATEN', 1),
('3311', '33', 'KAB. SUKOHARJO', 1),
('3312', '33', 'KAB. WONOGIRI', 1),
('3313', '33', 'KAB. KARANGANYAR', 1),
('3314', '33', 'KAB. SRAGEN', 1),
('3315', '33', 'KAB. GROBOGAN', 1),
('3316', '33', 'KAB. BLORA', 1),
('3317', '33', 'KAB. REMBANG', 1),
('3318', '33', 'KAB. PATI', 1),
('3319', '33', 'KAB. KUDUS', 1),
('3320', '33', 'KAB. JEPARA', 1),
('3321', '33', 'KAB. DEMAK', 1),
('3322', '33', 'KAB. SEMARANG', 1),
('3323', '33', 'KAB. TEMANGGUNG', 1),
('3324', '33', 'KAB. KENDAL', 1),
('3325', '33', 'KAB. BATANG', 1),
('3326', '33', 'KAB. PEKALONGAN', 1),
('3327', '33', 'KAB. PEMALANG', 1),
('3328', '33', 'KAB. TEGAL', 1),
('3329', '33', 'KAB. BREBES', 1),
('3371', '33', 'KOTA MAGELANG', 2),
('3372', '33', 'KOTA SURAKARTA', 2),
('3373', '33', 'KOTA SALATIGA', 2),
('3374', '33', 'KOTA SEMARANG', 2),
('3375', '33', 'KOTA PEKALONGAN', 2),
('3376', '33', 'KOTA TEGAL', 2),
('3401', '34', 'KAB. KULON PROGO', 1),
('3402', '34', 'KAB. BANTUL', 1),
('3403', '34', 'KAB. GUNUNG KIDUL', 1),
('3404', '34', 'KAB. SLEMAN', 1),
('3471', '34', 'KOTA YOGYAKARTA', 2),
('3501', '35', 'KAB. PACITAN', 1),
('3502', '35', 'KAB. PONOROGO', 1),
('3503', '35', 'KAB. TRENGGALEK', 1),
('3504', '35', 'KAB. TULUNGAGUNG', 1),
('3505', '35', 'KAB. BLITAR', 1),
('3506', '35', 'KAB. KEDIRI', 1),
('3507', '35', 'KAB. MALANG', 1),
('3508', '35', 'KAB. LUMAJANG', 1),
('3509', '35', 'KAB. JEMBER', 1),
('3510', '35', 'KAB. BANYUWANGI', 1),
('3511', '35', 'KAB. BONDOWOSO', 1),
('3512', '35', 'KAB. SITUBONDO', 1),
('3513', '35', 'KAB. PROBOLINGGO', 1),
('3514', '35', 'KAB. PASURUAN', 1),
('3515', '35', 'KAB. SIDOARJO', 1),
('3516', '35', 'KAB. MOJOKERTO', 1),
('3517', '35', 'KAB. JOMBANG', 1),
('3518', '35', 'KAB. NGANJUK', 1),
('3519', '35', 'KAB. MADIUN', 1),
('3520', '35', 'KAB. MAGETAN', 1),
('3521', '35', 'KAB. NGAWI', 1),
('3522', '35', 'KAB. BOJONEGORO', 1),
('3523', '35', 'KAB. TUBAN', 1),
('3524', '35', 'KAB. LAMONGAN', 1),
('3525', '35', 'KAB. GRESIK', 1),
('3526', '35', 'KAB. BANGKALAN', 1),
('3527', '35', 'KAB. SAMPANG', 1),
('3528', '35', 'KAB. PAMEKASAN', 1),
('3529', '35', 'KAB. SUMENEP', 1),
('3571', '35', 'KOTA KEDIRI', 2),
('3572', '35', 'KOTA BLITAR', 2),
('3573', '35', 'KOTA MALANG', 2),
('3574', '35', 'KOTA PROBOLINGGO', 2),
('3575', '35', 'KOTA PASURUAN', 2),
('3576', '35', 'KOTA MOJOKERTO', 2),
('3577', '35', 'KOTA MADIUN', 2),
('3578', '35', 'KOTA SURABAYA', 2),
('3579', '35', 'KOTA BATU', 2),
('3601', '36', 'KAB. PANDEGLANG', 1),
('3602', '36', 'KAB. LEBAK', 1),
('3603', '36', 'KAB. TANGERANG', 1),
('3604', '36', 'KAB. SERANG', 1),
('3671', '36', 'KOTA TANGERANG', 2),
('3672', '36', 'KOTA CILEGON', 2),
('3673', '36', 'KOTA SERANG', 2),
('3674', '36', 'KOTA TANGERANG SELATAN', 2),
('5101', '51', 'KAB. JEMBRANA', 1),
('5102', '51', 'KAB. TABANAN', 1),
('5103', '51', 'KAB. BADUNG', 1),
('5104', '51', 'KAB. GIANYAR', 1),
('5105', '51', 'KAB. KLUNGKUNG', 1),
('5106', '51', 'KAB. BANGLI', 1),
('5107', '51', 'KAB. KARANGASEM', 1),
('5108', '51', 'KAB. BULELENG', 1),
('5171', '51', 'KOTA DENPASAR', 2),
('5201', '52', 'KAB. LOMBOK BARAT', 1),
('5202', '52', 'KAB. LOMBOK TENGAH', 1),
('5203', '52', 'KAB. LOMBOK TIMUR', 1),
('5204', '52', 'KAB. SUMBAWA', 1),
('5205', '52', 'KAB. DOMPU', 1),
('5206', '52', 'KAB. BIMA', 1),
('5207', '52', 'KAB. SUMBAWA BARAT', 1),
('5208', '52', 'KAB. LOMBOK UTARA', 1),
('5271', '52', 'KOTA MATARAM', 2),
('5272', '52', 'KOTA BIMA', 2),
('5301', '53', 'KAB. KUPANG', 1),
('5302', '53', 'KAB TIMOR TENGAH SELATAN', 1),
('5303', '53', 'KAB. TIMOR TENGAH UTARA', 1),
('5304', '53', 'KAB. BELU', 1),
('5305', '53', 'KAB. ALOR', 1),
('5306', '53', 'KAB. FLORES TIMUR', 1),
('5307', '53', 'KAB. SIKKA', 1),
('5308', '53', 'KAB. ENDE', 1),
('5309', '53', 'KAB. NGADA', 1),
('5310', '53', 'KAB. MANGGARAI', 1),
('5311', '53', 'KAB. SUMBA TIMUR', 1),
('5312', '53', 'KAB. SUMBA BARAT', 1),
('5313', '53', 'KAB. LEMBATA', 1),
('5314', '53', 'KAB. ROTE NDAO', 1),
('5315', '53', 'KAB. MANGGARAI BARAT', 1),
('5316', '53', 'KAB. NAGEKEO', 1),
('5317', '53', 'KAB. SUMBA TENGAH', 1),
('5318', '53', 'KAB. SUMBA BARAT DAYA', 1),
('5319', '53', 'KAB. MANGGARAI TIMUR', 1),
('5320', '53', 'KAB. SABU RAIJUA', 1),
('5321', '53', 'KAB. MALAKA', 1),
('5371', '53', 'KOTA KUPANG', 2),
('6101', '61', 'KAB. SAMBAS', 1),
('6102', '61', 'KAB. MEMPAWAH', 1),
('6103', '61', 'KAB. SANGGAU', 1),
('6104', '61', 'KAB. KETAPANG', 1),
('6105', '61', 'KAB. SINTANG', 1),
('6106', '61', 'KAB. KAPUAS HULU', 1),
('6107', '61', 'KAB. BENGKAYANG', 1),
('6108', '61', 'KAB. LANDAK', 1),
('6109', '61', 'KAB. SEKADAU', 1),
('6110', '61', 'KAB. MELAWI', 1),
('6111', '61', 'KAB. KAYONG UTARA', 1),
('6112', '61', 'KAB. KUBU RAYA', 1),
('6171', '61', 'KOTA PONTIANAK', 2),
('6172', '61', 'KOTA SINGKAWANG', 2),
('6201', '62', 'KAB. KOTAWARINGIN BARAT', 1),
('6202', '62', 'KAB. KOTAWARINGIN TIMUR', 1),
('6203', '62', 'KAB. KAPUAS', 1),
('6204', '62', 'KAB. BARITO SELATAN', 1),
('6205', '62', 'KAB. BARITO UTARA', 1),
('6206', '62', 'KAB. KATINGAN', 1),
('6207', '62', 'KAB. SERUYAN', 1),
('6208', '62', 'KAB. SUKAMARA', 1),
('6209', '62', 'KAB. LAMANDAU', 1),
('6210', '62', 'KAB. GUNUNG MAS', 1),
('6211', '62', 'KAB. PULANG PISAU', 1),
('6212', '62', 'KAB. MURUNG RAYA', 1),
('6213', '62', 'KAB. BARITO TIMUR', 1),
('6271', '62', 'KOTA PALANGKARAYA', 2),
('6301', '63', 'KAB. TANAH LAUT', 1),
('6302', '63', 'KAB. KOTABARU', 1),
('6303', '63', 'KAB. BANJAR', 1),
('6304', '63', 'KAB. BARITO KUALA', 1),
('6305', '63', 'KAB. TAPIN', 1),
('6306', '63', 'KAB. HULU SUNGAI SELATAN', 1),
('6307', '63', 'KAB. HULU SUNGAI TENGAH', 1),
('6308', '63', 'KAB. HULU SUNGAI UTARA', 1),
('6309', '63', 'KAB. TABALONG', 1),
('6310', '63', 'KAB. TANAH BUMBU', 1),
('6311', '63', 'KAB. BALANGAN', 1),
('6371', '63', 'KOTA BANJARMASIN', 2),
('6372', '63', 'KOTA BANJARBARU', 2),
('6401', '64', 'KAB. PASER', 1),
('6402', '64', 'KAB. KUTAI KARTANEGARA', 1),
('6403', '64', 'KAB. BERAU', 1),
('6407', '64', 'KAB. KUTAI BARAT', 1),
('6408', '64', 'KAB. KUTAI TIMUR', 1),
('6409', '64', 'KAB. PENAJAM PASER UTARA', 1),
('6411', '64', 'KAB. MAHAKAM ULU', 1),
('6471', '64', 'KOTA BALIKPAPAN', 2),
('6472', '64', 'KOTA SAMARINDA', 2),
('6474', '64', 'KOTA BONTANG', 2),
('6501', '65', 'KAB. BULUNGAN', 1),
('6502', '65', 'KAB. MALINAU', 1),
('6503', '65', 'KAB. NUNUKAN', 1),
('6504', '65', 'KAB. TANA TIDUNG', 1),
('6571', '65', 'KOTA TARAKAN', 2),
('7101', '71', 'KAB. BOLAANG MONGONDOW', 1),
('7102', '71', 'KAB. MINAHASA', 1),
('7103', '71', 'KAB. KEPULAUAN SANGIHE', 1),
('7104', '71', 'KAB. KEPULAUAN TALAUD', 1),
('7105', '71', 'KAB. MINAHASA SELATAN', 1),
('7106', '71', 'KAB. MINAHASA UTARA', 1),
('7107', '71', 'KAB. MINAHASA TENGGARA', 1),
('7108', '71', 'KAB. BOLAANG MONGONDOW UTARA', 1),
('7109', '71', 'KAB. KEP. SIAU TAGULANDANG BIARO', 1),
('7110', '71', 'KAB. BOLAANG MONGONDOW TIMUR', 1),
('7111', '71', 'KAB. BOLAANG MONGONDOW SELATAN', 1),
('7171', '71', 'KOTA MANADO', 2),
('7172', '71', 'KOTA BITUNG', 2),
('7173', '71', 'KOTA TOMOHON', 2),
('7174', '71', 'KOTA KOTAMOBAGU', 2),
('7201', '72', 'KAB. BANGGAI', 1),
('7202', '72', 'KAB. POSO', 1),
('7203', '72', 'KAB. DONGGALA', 1),
('7204', '72', 'KAB. TOLI TOLI', 1),
('7205', '72', 'KAB. BUOL', 1),
('7206', '72', 'KAB. MOROWALI', 1),
('7207', '72', 'KAB. BANGGAI KEPULAUAN', 1),
('7208', '72', 'KAB. PARIGI MOUTONG', 1),
('7209', '72', 'KAB. TOJO UNA UNA', 1),
('7210', '72', 'KAB. SIGI', 1),
('7211', '72', 'KAB. BANGGAI LAUT', 1),
('7212', '72', 'KAB. MOROWALI UTARA', 1),
('7271', '72', 'KOTA PALU', 2),
('7301', '73', 'KAB. KEPULAUAN SELAYAR', 1),
('7302', '73', 'KAB. BULUKUMBA', 1),
('7303', '73', 'KAB. BANTAENG', 1),
('7304', '73', 'KAB. JENEPONTO', 1),
('7305', '73', 'KAB. TAKALAR', 1),
('7306', '73', 'KAB. GOWA', 1),
('7307', '73', 'KAB. SINJAI', 1),
('7308', '73', 'KAB. BONE', 1),
('7309', '73', 'KAB. MAROS', 1),
('7310', '73', 'KAB. PANGKAJENE KEPULAUAN', 1),
('7311', '73', 'KAB. BARRU', 1),
('7312', '73', 'KAB. SOPPENG', 1),
('7313', '73', 'KAB. WAJO', 1),
('7314', '73', 'KAB. SIDENRENG RAPPANG', 1),
('7315', '73', 'KAB. PINRANG', 1),
('7316', '73', 'KAB. ENREKANG', 1),
('7317', '73', 'KAB. LUWU', 1),
('7318', '73', 'KAB. TANA TORAJA', 1),
('7322', '73', 'KAB. LUWU UTARA', 1),
('7324', '73', 'KAB. LUWU TIMUR', 1),
('7326', '73', 'KAB. TORAJA UTARA', 1),
('7371', '73', 'KOTA MAKASSAR', 2),
('7372', '73', 'KOTA PARE PARE', 2),
('7373', '73', 'KOTA PALOPO', 2),
('7401', '74', 'KAB. KOLAKA', 1),
('7402', '74', 'KAB. KONAWE', 1),
('7403', '74', 'KAB. MUNA', 1),
('7404', '74', 'KAB. BUTON', 1),
('7405', '74', 'KAB. KONAWE SELATAN', 1),
('7406', '74', 'KAB. BOMBANA', 1),
('7407', '74', 'KAB. WAKATOBI', 1),
('7408', '74', 'KAB. KOLAKA UTARA', 1),
('7409', '74', 'KAB. KONAWE UTARA', 1),
('7410', '74', 'KAB. BUTON UTARA', 1),
('7411', '74', 'KAB. KOLAKA TIMUR', 1),
('7412', '74', 'KAB. KONAWE KEPULAUAN', 1),
('7413', '74', 'KAB. MUNA BARAT', 1),
('7414', '74', 'KAB. BUTON TENGAH', 1),
('7415', '74', 'KAB. BUTON SELATAN', 1),
('7471', '74', 'KOTA KENDARI', 2),
('7472', '74', 'KOTA BAU BAU', 2),
('7501', '75', 'KAB. GORONTALO', 1),
('7502', '75', 'KAB. BOALEMO', 1),
('7503', '75', 'KAB. BONE BOLANGO', 1),
('7504', '75', 'KAB. PAHUWATO', 1),
('7505', '75', 'KAB. GORONTALO UTARA', 1),
('7571', '75', 'KOTA GORONTALO', 2),
('7601', '76', 'KAB. MAMUJU UTARA', 1),
('7602', '76', 'KAB. MAMUJU', 1),
('7603', '76', 'KAB. MAMASA', 1),
('7604', '76', 'KAB. POLEWALI MANDAR', 1),
('7605', '76', 'KAB. MAJENE', 1),
('7606', '76', 'KAB. MAMUJU TENGAH', 1),
('8101', '81', 'KAB. MALUKU TENGAH', 1),
('8102', '81', 'KAB. MALUKU TENGGARA', 1),
('8103', '81', 'KAB MALUKU TENGGARA BARAT', 1),
('8104', '81', 'KAB. BURU', 1),
('8105', '81', 'KAB. SERAM BAGIAN TIMUR', 1),
('8106', '81', 'KAB. SERAM BAGIAN BARAT', 1),
('8107', '81', 'KAB. KEPULAUAN ARU', 1),
('8108', '81', 'KAB. MALUKU BARAT DAYA', 1),
('8109', '81', 'KAB. BURU SELATAN', 1),
('8171', '81', 'KOTA AMBON', 2),
('8172', '81', 'KOTA TUAL', 2),
('8201', '82', 'KAB. HALMAHERA BARAT', 1),
('8202', '82', 'KAB. HALMAHERA TENGAH', 1),
('8203', '82', 'KAB. HALMAHERA UTARA', 1),
('8204', '82', 'KAB. HALMAHERA SELATAN', 1),
('8205', '82', 'KAB. KEPULAUAN SULA', 1),
('8206', '82', 'KAB. HALMAHERA TIMUR', 1),
('8207', '82', 'KAB. PULAU MOROTAI', 1),
('8208', '82', 'KAB. PULAU TALIABU', 1),
('8271', '82', 'KOTA TERNATE', 2),
('8272', '82', 'KOTA TIDORE KEPULAUAN', 2),
('9101', '91', 'KAB. MERAUKE', 1),
('9102', '91', 'KAB. JAYAWIJAYA', 1),
('9103', '91', 'KAB. JAYAPURA', 1),
('9104', '91', 'KAB. NABIRE', 1),
('9105', '91', 'KAB. KEPULAUAN YAPEN', 1),
('9106', '91', 'KAB. BIAK NUMFOR', 1),
('9107', '91', 'KAB. PUNCAK JAYA', 1),
('9108', '91', 'KAB. PANIAI', 1),
('9109', '91', 'KAB. MIMIKA', 1),
('9110', '91', 'KAB. SARMI', 1),
('9111', '91', 'KAB. KEEROM', 1),
('9112', '91', 'KAB PEGUNUNGAN BINTANG', 1),
('9113', '91', 'KAB. YAHUKIMO', 1),
('9114', '91', 'KAB. TOLIKARA', 1),
('9115', '91', 'KAB. WAROPEN', 1),
('9116', '91', 'KAB. BOVEN DIGOEL', 1),
('9117', '91', 'KAB. MAPPI', 1),
('9118', '91', 'KAB. ASMAT', 1),
('9119', '91', 'KAB. SUPIORI', 1),
('9120', '91', 'KAB. MAMBERAMO RAYA', 1),
('9121', '91', 'KAB. MAMBERAMO TENGAH', 1),
('9122', '91', 'KAB. YALIMO', 1),
('9123', '91', 'KAB. LANNY JAYA', 1),
('9124', '91', 'KAB. NDUGA', 1),
('9125', '91', 'KAB. PUNCAK', 1),
('9126', '91', 'KAB. DOGIYAI', 1),
('9127', '91', 'KAB. INTAN JAYA', 1),
('9128', '91', 'KAB. DEIYAI', 1),
('9171', '91', 'KOTA JAYAPURA', 2),
('9201', '92', 'KAB. SORONG', 1),
('9202', '92', 'KAB. MANOKWARI', 1),
('9203', '92', 'KAB. FAK FAK', 1),
('9204', '92', 'KAB. SORONG SELATAN', 1),
('9205', '92', 'KAB. RAJA AMPAT', 1),
('9206', '92', 'KAB. TELUK BINTUNI', 1),
('9207', '92', 'KAB. TELUK WONDAMA', 1),
('9208', '92', 'KAB. KAIMANA', 1),
('9209', '92', 'KAB. TAMBRAUW', 1),
('9210', '92', 'KAB. MAYBRAT', 1),
('9211', '92', 'KAB. MANOKWARI SELATAN', 1),
('9212', '92', 'KAB. PEGUNUNGAN ARFAK', 1),
('9271', '92', 'KOTA SORONG', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_menu`
--

CREATE TABLE `member_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member_menu`
--

INSERT INTO `member_menu` (`id`, `title`, `url`, `icon`) VALUES
(1, 'Dashboard', 'user', 'nav-icon fas fa-tachometer-alt'),
(2, 'Profile', 'profil', 'nav-icon fas fa-fw fa-users-cog'),
(3, 'Pemesanan', 'pesan', 'nav-icon fas fa-fw fa-shopping-cart'),
(4, 'Cek Pemesanan', 'invoice', 'nav-icon fas fa-fw fa-dollar-sign'),
(5, 'Logout', 'auth/logout', 'nav-icon fas fa-fw fa-sign-out-alt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `email`, `nama_brg`, `harga`, `tanggal`, `waktu`, `status`, `foto`) VALUES
('1ZNf4', 'bertojunikrisnanto@gmail.com', 'paket sofa', 148, '03 June 2021', '22:06:38', '2', ''),
('5BZDU', '', 'paket sofa', 148, '03 June 2021', '22:07:52', '2', ''),
('87mnN', 'bertojunikrisnanto@gmail.com', 'paket sofa', 148, '03 June 2021', '20:11:19', '1', ''),
('9Pfo6', 'muaralembu11@gmail.com', 'kursi ', 50000, '24 May 2021', '21:43:22', '2', ''),
('B8zQ3', 'bertojunikrisnanto@gmail.com', 'kursi ', 50000, '03 June 2021', '16:13:41', '2', ''),
('KmxDI', 'bertojunikrisnanto@gmail.com', 'kursi ', 50000, '03 June 2021', '22:40:36', '2', ''),
('PT9S8', 'bertojunikrisnanto@gmail.com', 'kursi ', 50000, '03 June 2021', '22:09:35', '0', ''),
('bPKzQ', 'bertojunikrisnanto@gmail.com', 'paket sofa', 148, '03 June 2021', '22:32:28', '0', ''),
('gpEeY', 'bertojunikrisnanto@gmail.com', 'Bersihin Kasur', 500000, '04 June 2021', '19:04:12', '0', ''),
('jR0k4', 'bertojunikrisnanto@gmail.com', 'paket sofa', 148, '03 June 2021', '20:50:19', '0', ''),
('jn0RE', 'bertojunikrisnanto@gmail.com', 'paket sofa', 148, '03 June 2021', '22:22:28', '0', ''),
('wgnhR', 'bertojunikrisnanto@gmail.com', 'paket sofa', 148, '03 June 2021', '20:19:18', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'DKI Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'DI Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua Barat'),
(92, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(128) NOT NULL,
  `gambar_barang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `gambar_barang`) VALUES
(5, 'kursi ', 'paket kursi saja', 'Obat Cair', 50000, '789.PNG'),
(7, 'paket sofa', 'sedfs', 'yugg', 148, 'sofa1.jpg'),
(8, 'Bersihin Kasur', 'Bersihin tempat tidurmu dari kutu', 'Furniture', 500000, 'Tempat-Tidur-Kayu-1-4001753606-15390452948075.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `rt` int(50) NOT NULL,
  `rw` int(50) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `hp` varchar(200) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `provinsi`, `kabupaten`, `rt`, `rw`, `kelamin`, `hp`, `email`, `gambar`, `password`, `role_id`, `user_active`, `date_create`) VALUES
(3, 'Alvian', '', '', '', 0, 0, '', '0', 'alvian@gmail.com', 'default.jpg', '$2y$10$JmB4.G4z9Lfb95d8KfD18ORE9RH5pzulBDJzzcNQPjfhGw0xE2l9C', 2, 1, 1593380446),
(4, 'Wahyu Oktoranda', '', '', '', 0, 0, '', '0', 'wahyuokt@gmail.com', 'default.jpg', '$2y$10$QjHZyrxnvolZaiy2UQ/G/.ZI62wbs4XImsfOTegk1Sp4A3jqTVJ6u', 2, 1, 1593380532),
(5, 'Taufiq Rizal', '', '', '', 0, 0, '', '0', 'tfq21@gmail.com', 'default.jpg', '$2y$10$CCoc.uNfIRRBUjueK4JqlOIFOTmbwD5DkQJ1xM84Vtc02pP4K6PrO', 2, 1, 1593380613),
(7, 'Berto Juni Kristanto', '', '', '', 0, 0, '', '0', 'bertojuni@gmail.com', 'default.jpg', '$2y$10$/lpD.tvu5Wrv4L7MasjSHOVXqqnz7OblQD6aQ.1gJpMC69NNv4uSG', 2, 1, 1595786438),
(8, 'Minatozaki Sana', 'Jl.Lasoso Jalur 2 No.110', '14', '174', 25, 6, 'laki-laki', '082386572800', 'muaralembu11@gmail.com', 'AG35HI26.jpg', '$2y$10$r/XFVAgHWNQVS8tqM3OOoO7Cm4aSyGh9wFFhB0DG6h8fFwTAOQKO6', 1, 1, 1596737643),
(12, 'Berto Juni Krisnanto', 'Jalan Salakan Jotawang, Bangunharjo, Sewon', '', '', 0, 0, 'laki-laki', '08657774332', 'bertojunikrisnanto@gmail.com', 'default.jpg', '$2y$10$NN764OKDt2emEy7QuLAg.OGCOYrukGYJ1GzL7ssxvMPlp4kcg0QfW', 2, 1, 1618846347),
(13, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$MSw9t4P6v96ZjxN4jjgvZObl3x14UnHM90hdPcXZV8ecXWzG7NmOi', 2, 1, 1619787100),
(14, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$HV9e8Y8bgWK0o.3nORNz7.gTULU5s/z1jexM3d3q4T6CgCY0BvZX6', 2, 1, 1619787100),
(15, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$YBLL73xrNHj2pquVIb/azu3OTSC7tyHYPOGaoXdKmQdtkTg35YAF2', 2, 1, 1619787100),
(16, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$OCRKPo4b8UWYob6FdtGhKOTpkytgEH2E5cj96pG5j55ul4p3tc1Sa', 2, 1, 1619787114),
(17, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$YsJrmKNHpF1cTjl7Ce8iNeymvCwJyTnrsY2WVraRdLJXNCgusTiku', 2, 1, 1619787114),
(18, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Ud5fyU8vFHPbvbc/WfeIAefLxFUCI8OzeV5t9uIALw5DEaJYseMHe', 2, 1, 1619787114),
(19, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$v1rtak91WmK.RbxIjRtObeP8ZITUIJZuMifaNHLrqPNserVQZTuIS', 2, 1, 1619794878),
(20, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$gVoN6Pb2SiZ2PSF8VGMjhetDL3vULSKwVwwUJwvSY3Ur0l1Uuoyle', 2, 1, 1619794878),
(21, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$inoCA8/.uwXEnvn5lHgRH.waoTE84KZ4f5AazgPE/JOs2X7xZGBYW', 2, 1, 1619794878),
(22, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$XGfJTWQgZ50qnbMWRfOLCODBR.V3/DXudBWUub2xQ88TIKNilPkre', 2, 1, 1619795831),
(23, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$ykoiqy/odefBiIWTT.kZBeW2Y2oB3JNTts5NoirA/xDmxLONYDxaO', 2, 1, 1619795832),
(24, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$NdBh7i4mjVVpe8BYFFEPtO/QsvVKXkSUR1nhyoT9u1DZoKGtClr2S', 2, 1, 1619795832),
(25, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$n6cs2RUGiryOXBLP2zIvs.kWrkpA9fpzTto9EQNl2J4tYJ1Hop0y6', 2, 1, 1619797851),
(26, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$rKWusflkLNROFVP2mJHUpuV69YpWcj8vYyf8U4xd/h0CONz1kIwpy', 2, 1, 1619797851),
(27, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$dCJ7X6IFAKWtKMEqMVNEHua4pBA0wdaPoE5TcpkLo3gAY/T/XD7uq', 2, 1, 1619797851),
(28, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$sgdRyeCAp3mLySJmwttLMuLYMGRNAKwuT.wsvnmzOSigIJkdi70By', 2, 1, 1619797857),
(29, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Gs2L2QTqSWMAtYOH7C.I3uYRIlefck0ZPf5AOLAFNerryCm85QS6S', 2, 1, 1619797857),
(30, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$E2hlEE3fmFAGmLkW808Psuhknn0Xbv5Ti6/dY8qVcb/iTKoKYjVV.', 2, 1, 1619797857),
(31, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Ei6XJiLmV/szE.hLnmxwg.lngUo6yonL4frZYXB1Vs/YRmkTL8y/W', 2, 1, 1619798022),
(32, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$hA2eWllZtqwt7m.GLZokL.YMnJY7zCRetpzDD55N/mMEPElrXUV2e', 2, 1, 1619798022),
(33, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$NlNlqCMLPZ3y8N4JG0dIousJOtwXB0/ZrPfyYHY8R6o0Is0gYm1/G', 2, 1, 1619798022),
(34, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$aECH3LrzE1Y2tP9WashVSOQTA/JNMsz3K2SR/wb7SiA2KXoSOKKiO', 2, 1, 1619798613),
(35, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$yicTszY6VFGk7L5uty9fvOJ335P1H075BD9.FZGC4XYzJcQxBMjsG', 2, 1, 1619798613),
(36, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$o6KG445mJRv42h.WuQUD0OcbHnLj8nSYQzXFzb4aBg0j2GQjqHUcu', 2, 1, 1619798613),
(37, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$aQGUDmYACM01f01Mj.8zk.XAZuQFNg5EwDEu5qpfzwLoMu3zpQh.i', 2, 1, 1619798628),
(38, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$4394OQz9TJ/A2GN8TO9dz.ijeF7WT3l4qN0SUjc.1kFJ3Tq2bOVua', 2, 1, 1619798628),
(39, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$W96g5buOk88/NNX34NU.7O65lBKwUWILecHKCpHYNeKpmdZZeiq/2', 2, 1, 1619798628),
(40, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$vBVRhBurfceIvemH6aLd8O4jSWeoDie3YUxT9yyFNCAR6hfSmRSTi', 2, 1, 1619798838),
(41, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$dQil41BjYw54Uh1/Kn7XRuCxB6f9UIl5PHGZM2eekFMT.LLsTYv4y', 2, 1, 1619798838),
(42, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$48hIV5M6F0d.EJRTiHvjqudrI35EsU0FcH2jiDfsOhOpg9WWDW9fu', 2, 1, 1619798839),
(43, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$E3CbuDM/PB/XRu.RNbAAiePmj17PgXZJBTNdKKmLCRtke/sIOYE/m', 2, 1, 1619798915),
(44, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Y3sb1mtnRWTQTFvULr8HwuQIt31DoLQb5PAfYEL/3805Th0H/8Btm', 2, 1, 1619798915),
(45, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$jv5SJJwdnhC7qk238CrTpeOijdqw0wu90gCPTBTN0fIvIPlUZCZAy', 2, 1, 1619798915),
(46, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$aMdIKM7NP2.RZ32FOPtEPejOohkZBjEFVSZ3QNjfvKgsRqy1QKzkW', 2, 1, 1619799194),
(47, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$s3We0Thr5aCEgApvUAlleOUagakL6pRC7QgG3LbDD3ORNCpBmMYgS', 2, 1, 1619799195),
(48, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$zaKJoXPwbHtIJoFfv8XOt..fojtF.ZDFXRk5FlYu1qS2iGmbXCMSS', 2, 1, 1619799195),
(49, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$3KWKHX0GzuEn1gEcvQSGAuFb80ZqSxRvulqcWWeGHAR.x9uxsoKKq', 2, 1, 1619799343),
(50, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$vN0FhNErrq8E4H242/gcRO4ywvubZMuBpzAcaDvAfwMPGSJlgzrl2', 2, 1, 1619799343),
(51, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$wMBxoKETk4yjXejaqO3xjO87npOkmWpkEnDfp5M7HMBcY0SRr31U.', 2, 1, 1619799344),
(52, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Ol8fYQWVDDTb/CsaHI8uGOI1u.kpmSu6BptHUVUU0NgtkjVN6doLi', 2, 1, 1619799354),
(53, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$kG8yURSWB5cd9cG0Xj2jeuzGuQUfPvrg01q6kPCSYnLOlIdSeHy5.', 2, 1, 1619799354),
(54, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$ZVqfAq.ZntrimfHlL5V4ke8Y//TMeOeupG9GM3louvZ0D26JC.8IS', 2, 1, 1619799354),
(55, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$jCxIC2XS6AVExFPgHuA.S.muitId9lF9JAn1RJmau.UtYuB67OM6.', 2, 1, 1619800684),
(56, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$kqkT6RP9ghePG3ViNf3KPe/v2hRF5kudKD0F/8LdzOyUIcC/2ArQ2', 2, 1, 1619800684),
(57, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$K2LfGSmX3xTGWogsTCxd7Os5oD.bMhi7A5zv1dB42xa.dgNhuFtYy', 2, 1, 1619800684),
(58, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$JqRZsgGEhrt4HIddt/YHoeaB0yYhvqlGyqjdwycz4M2gk52YO9NE6', 2, 1, 1619800949),
(59, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$adR728zH5HRlZ79zL4s1Q.klpHx3m3ghEAAZLIQmRAmEdySVHJnCS', 2, 1, 1619800949),
(60, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$XFiLgF/PotSOslabwiSGLu2jeAPkQCIJDSYU.Cnd8GIFmeBTHLwBq', 2, 1, 1619800949),
(61, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$RmWXCOy3b5Hz8nbCWYxToeK2j6BRRPD/1rBc8QbncY5r2dPj7mpFe', 2, 1, 1619869645),
(62, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$HznaFkTg0Tuix94yEK2Ldues7pWLDzYHlDQvP0ajA1G7Doipj8Epi', 2, 1, 1619869646),
(63, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$2b42UVE.5CdSkZ059qlzGOBlBAQ2sgObkBO5bQWvj2NM/5zTkl0QW', 2, 1, 1619869646),
(64, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$jlbc3l0aUHSFeukslTmVk.qBafKHbUDZx7vIR0UbLhr.Cr1G/ix2O', 2, 1, 1619869657),
(65, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$vbRHFT.A4.50BlV37xQKFuESyGXcZcLGsiVVwENDO.qz3K54GiLuO', 2, 1, 1619869658),
(66, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$fU/Ip2BSyn6h4eiYd.EGmOHpgmdJRw/hsCfYGl362Ajm94qgIJnDK', 2, 1, 1619869658),
(67, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$MEjbJa9PlTn56E.DH3Bfnepbss30HITmDg3YI/YGxXWXSDlsxfEba', 2, 1, 1619870394),
(68, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$PWFNtBRTKR0ULVy9uq/QfOhEpvIebDnBrxhCsM29ba6dHo.275xUK', 2, 1, 1619870395),
(69, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$KI4WkJs5tnCSZ0i1mh5cOe9HWB5r2X8rXUHAW3kt/qyeUm0NRA/fK', 2, 1, 1619870395),
(70, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$RyeQCcJRm.Y3ZY8OXdEqF..6b9QqRN5AaCqME4SAdh6Lhsk0BajFO', 2, 1, 1619870713),
(71, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$80lI.v3PBBBWA6i9Max05ehaPvZyNAdXQvQeSAKvydc/hducLvWga', 2, 1, 1619870713),
(72, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Qmsk3RKjqWYsDj90xiKy9e6vlxaXUlEMGtxU2o//6.15fegzP7C9C', 2, 1, 1619870713),
(73, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$GkxSW1UIz0VqbPo6F5.xXO8YSo/ojpDjHqB.V0CwXAttHqOk/td8G', 2, 1, 1619873562),
(74, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$K8H6AMtAwGDZxOzfMgivBe5Ue.XOKrukXNUMR8TV2PmxOe.rLt3hO', 2, 1, 1619873562),
(75, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$iAcfKC6mRTs1GSAHbNzdL.sBMLCdx0O.WXLHdM5Pk..Dvhv3reM16', 2, 1, 1619873562),
(76, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$7IR6VD8FUrMf3qnB0j6m6uJHGMk6QTcltlbmid2EUYWZNq7gDitLG', 2, 1, 1619873581),
(77, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$P/JY/Fz7beXpp/tR6nhAbO3px1Ke4c2dz9V3KrUgI0YGEuixSs57K', 2, 1, 1619873581),
(78, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$WhKTfWNDD2yqF12a0xbue.fGnNzrmy/zWQ0BI/CvwQ211MFuARNI6', 2, 1, 1619873581),
(79, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$7FE3N8UwEg96WAONDZXs9uhq7oeGx/sgcGBSLNd1pz5rMwq9E/g7q', 2, 1, 1619873602),
(80, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$lmvFwMlH4PGmvMl/Ppxr/.3zL4KmYHHri5pYlq9kzEn5O.c7hEMX6', 2, 1, 1619873602),
(81, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$WKOA6zGRpFdysweGndwjCOg61/gbYdWA9OyT.CyKsx4HyJyK5SDPK', 2, 1, 1619873603),
(82, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$gWiBkKnxwtej9ubiA86JrOUUW6OV3Q8RKFHHY6FjoUUYrbYCRr5pm', 2, 1, 1619873727),
(83, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$QS2QkJrLJK5jSlREAHJcOuSL9inABIbHICUbWmBcXZPFxuaXwe.3O', 2, 1, 1619873727),
(84, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$HM7QhmDRn..h1cYxSweiXOXlhbuHeb/ct9jQyIt34XpEKD8szvIMm', 2, 1, 1619873728),
(85, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$uYmvRypqToxPxChKtosXj.r7tzwu6YeFF1qTKBITm4/lnsEStVkzG', 2, 1, 1619873740),
(86, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$FXl4rHXKFZLYXzr7AISbsOdzq/57j5T5j8HopzB/.A8Pf0zAzMEJu', 2, 1, 1619873741),
(87, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$EezQl8WilAaNKW/SR0Bg1eA5aBzOKhUPMG66qZbkbV6Pth9MxSvAa', 2, 1, 1619873741),
(88, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$G1eNatIl88Io6zBiSYsPzuKpH0sG29o2K2357lCHbE0QWfx55guDy', 2, 1, 1619873742),
(89, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$2L0VzQsAygY4NS1GVEbFNOItLaFulJeN.XdLIS/Ztq.bOfLAEBvLa', 2, 1, 1619873742),
(90, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$1TzR0B6MkMocgaG4WuGWI.SDaIRbSRhKT2QJJbTMEyZ.MPfpqX.GG', 2, 1, 1619873742),
(91, 'emka digital juni', '', '', '', 0, 0, '', '0', 'emkadigitalindonesia@gmail.com', 'default.jpg', '$2y$10$tuXnz35eJ8/HBId3GzQSG.xfRBDPGcqkROHTDaL2leGbI6qTfpKWK', 2, 1, 1619873854),
(92, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$xEwxqzIIJVmayq56NQk2MOuONpsnpXcoLw7WkmCb5XSc8K8TmShz6', 2, 1, 1619875753),
(93, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$gCv3wIxvw5V4ivdDdU6VueJIaCR3IpHd5myQPbbXgoJ1.m2/eti7K', 2, 1, 1619875753),
(94, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$rBGnyFOmWrlCnifv9mUUJ.C6quiydT3WN3lFOuRssRaEx9COg0Bti', 2, 1, 1619875753),
(95, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$5lvUO/3BJ.Bk0CuYepQ8P.PiqY.Ff57v8gZTnMwMw76O/qW8emmou', 2, 1, 1619875905),
(96, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$UapNLRN853vjLnrfIg4UVO98i7RnJyija/MfB21iP4PyKe/RB2p9y', 2, 1, 1619875905),
(97, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$AJB0vQp1CRJ0w0rOWdRZp.o7AgOQ749ZeiGfFcUldg8ViD9jYM716', 2, 1, 1619875906),
(98, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$JaAqq5c3nZz39zeUiAVpR.iVA2/eaqRV9f4d1SaHuZsBdvE7JW/Du', 2, 1, 1619876915),
(99, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$xPMKO0Et9nAZw2.EBHaluOh2m1r8Z/TyAFKZ3rH1DnAvivhdf8j52', 2, 1, 1619876915),
(100, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$p/ylZtdikOV3i8XFvLYcuel30qhzuaSsupSJ7Y9wm3IXpHwa4BbMS', 2, 1, 1619876915),
(101, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$yG4oQD5RoKVXji7Qa655SuL1Y0N1H8brtesVeJXDxLKQcyrnPoaES', 2, 1, 1619879422),
(102, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$U1F4XH/WWVxNVuaeTE3EVe1soc2ylNzhzjnZFn/L922QDdiFeVc2i', 2, 1, 1619879422),
(103, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$.NdbqIKIAnncEPAqACNK2OJTdIpGWNK75a1JqtTiFZtAP79eL2ux2', 2, 1, 1619879423),
(104, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$G5cpJ2vQLPSYTAKn2NAEEOWWlvSaZlR0syeHzf2XLkORhJqdq97.q', 2, 1, 1619879560),
(105, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$/qtHZe00hXmvggLT1K3T0uPwMKzpKcm7E9xRmDsmEdA.JHgE5aHEC', 2, 1, 1619879560),
(106, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$5ebfLwh4O2Htm717RKGtOu7TgVDSScH34jAS/dGEMr.BoqvFZ/DkK', 2, 1, 1619879560),
(107, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$bnSEld1ToXb4kwKgT4k1.Ou7DDdhB6JwhFVaotCS7.uXTbbI7mimC', 2, 1, 1619879570),
(108, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$6ZMLIyqW9oR21qC6pm3xVOo8u2bqe272QW.E8oJdK7Tc5pLS.zNQO', 2, 1, 1619879570),
(109, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Bb0gjV3AMDUgUvrHhUbOdeFDpde5yKxgQdkYkuI4nRXdskuM1ylaS', 2, 1, 1619879570),
(110, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$wvUBE2FyFjYuK8Hl6kt7tOtVm2q1CHR3itRNRnlP4T2SMxRnde2Fu', 2, 1, 1619879578),
(111, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$1QRnSOiIxHDvFS/jEvjBAeznxU2tUJBlsmbn9BlBUzDtnbbG3pkJq', 2, 1, 1619879579),
(112, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$fLO5Tgfq7Hoa//v3xpfTiuaxf/EsrM6WJJ4tnjeq6l0peIuRDoF92', 2, 1, 1619879579),
(113, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$/alzOkvumOwB.Uf2WzvqYeAkKxKFsqUYFKV6EEh0CI1CaVHBFgC8C', 2, 1, 1619879588),
(114, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$QOYbsXNbOfrIGhmjmNDPkurZJTrxEfSKS9cR5vPamdXy07UAoBvFG', 2, 1, 1619879589),
(115, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$93PrK39ap82737CBzBb3KeQDkPT4bWDIZg/IDqxWeeLtT.mNpx1R.', 2, 1, 1619879589),
(116, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$z.FamayNwI/CJbCFA3poCeqkAE0l89Mhx9IdvEbTKz1F67HWV3LOK', 2, 1, 1620014673),
(117, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$zSPj3I56klJtcRqttAe.COT6ULGHduMhj2CgKwp6qb8s1Hj/9Lli.', 2, 1, 1620014673),
(118, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$wA.Ma2r1a0fzrAyc5Gk2v.52H9nuAKVQ4gyzRm54X08fyupZAMtO6', 2, 1, 1620014673),
(119, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$dOk1myQpfYCCze.yhKqZYuIrZayM7xshecSGZ6QGhgnTBPMOtfqJ2', 2, 1, 1620024206),
(120, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$O89TyXgg3hF8TgT.G6U8XuxvAMmlyNWHjVIT8I45SfP6LenIxxBN6', 2, 1, 1620024206),
(121, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$LeK0SucFrJCh5ASeRPEFsuYA1YZtYYOuLgAr6akekfCVLvR0sQ3rO', 2, 1, 1620024243),
(122, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$MlNG4I5SkEPqQ1VDaGBPdOs5t/Gmqried8gGvAlOOZcqtJK.PLEci', 2, 1, 1620024243),
(123, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$ZNjwirDz3IObmkxwifYqQeRWmmVZlU446IGqRicyOEglFADk3WYPy', 2, 1, 1620134172),
(124, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$cuqwi7Ih1RG3RbgjOT6A/.0qs8bmMxVbySG5Kgn3brkfn.H.6AW2u', 2, 1, 1620134172),
(125, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$VE7CwDFIxv2VahzHDTOUg.qLHBNfRmCiApIpiBEE1HdkvwNwntCh6', 2, 1, 1620182115),
(126, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$dZip76kt6AHHffpMQMdjAO113CGA1s1eCPs6cmaRepFWK/IDkgvJ2', 2, 1, 1620182116),
(127, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$dmYWLPR.PHbkyRhySQfae.z3F2.lw.KZ0iGsUG928zumTz/0AHv7i', 2, 1, 1620182122),
(128, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$z/ZfbiYmt62a8TVcAUZEpO4c/S9RV0lNC80vsYtT39WMlElFDeEg2', 2, 1, 1620182123),
(129, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$g70MnHJ54cFa/FA2dRqplO18YkWoaxvWq4kKHDijT7mkH0YsGjguO', 2, 1, 1620182419),
(130, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$N5RqDtVXaG05GqSAeFjNGeeghT/WDYQ8wM./1HebzRrLAqEnyO1I6', 2, 1, 1620182419),
(131, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$bQdnKbkK3W9W5SCbkKZ7JucPwXQJrZEEuCJB5nCfmUPIJEcTooQv2', 2, 1, 1620182491),
(132, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$mVPTt1r/7uqVytJSHfGdb.pCGq7NmtsrOlYF3hmxGpqceY4o1xugG', 2, 1, 1620182492),
(133, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$pu40.1hCp0tAAunm7hl3ZOa16758y9uBl/c8uVvdWu5FLQNv9pC9K', 2, 1, 1620182535),
(134, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$vIEAkE3E1Sg0RtU6HAsmuuP4qnW6fhNNMXLOW9b5FjpZ.ZDhIqkVq', 2, 1, 1620182535),
(135, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$mfnA1eyHCMoAUHQYxos59O5qU47gqSIgm/jMFSFU35K8kW12ckyLG', 2, 1, 1620182548),
(136, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$RyMC38cstkmzxOwGuk4myutsaPffioewjDeu7JWQG7jRoTJmlIU26', 2, 1, 1620182548),
(137, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$qwkgNnYeEQuERTZOTEivKe6kbdozdsbi07YoSvXQ6HygBsOfvBNh6', 2, 1, 1620182625),
(138, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$GZPMxZnvBT6QrxTDb2/W1OJPQWC9dB6Vn8JpIvUbaDYIIaPx5JAyK', 2, 1, 1620182626),
(139, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$/C42HdS4KSOBvwvp8iKWPOYVrQDFB7VxQhtvMdMc4w1jTMuzW5uAu', 2, 1, 1620182634),
(140, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$ZNHLvcZrdDJzIzwDfpa4AujquKPY350zSYre5x8XfV5rm9o8Y7CS6', 2, 1, 1620182635),
(141, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$0pGhNnKjvhY4ToQ77EIpI.Aypw1evSglsOrxtU.AKL9Cmg2Zorc/W', 2, 1, 1620182712),
(142, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$4FTLQDeVKjcb5QieGb2Ldeu7d6aQU3hIgs4TYs897lhOKOfUxVYQK', 2, 1, 1620182712),
(143, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$BcKgbCMEewrz2eeBUezXTuva/.bXIQbXras3S7D/tjpZOBOrJALxu', 2, 1, 1620182737),
(144, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$b28k5gXhNNqwECjhXVmAS.vjoHO2KGRJqwj5eWlUsHUkMkjdnMfLm', 2, 1, 1620182738),
(145, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$goBnRjyFzzBL5bMAmFxoSu/EDyeQw0EPBy2kUvpMyRcGDzomobCja', 2, 1, 1620183250),
(146, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$BaOH2glLWDMg8Mjher7MLOLXz.EeuwvjcM3ODvB86dV.b27xlrIqe', 2, 1, 1620183250),
(147, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$4TfhrdGpZZHTD3o1zRuYWuV/ySwAwhNsBcFATGyGfKxoVRlqcTrTi', 2, 1, 1620183288),
(148, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$9PVAsTg2ERzSLBTJ9aykXuVa5cV0YDhqW3UcXiCT0s7YZwET4sve2', 2, 1, 1620183288),
(149, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$DAMyOsudBKQrgtBJk8Nveuy5kqHeFqzI0KlFr0i1AzEVFSlmslt1.', 2, 1, 1620183310),
(150, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$xFB3VMsz073AwSrjUllEhOPyzBdj3gs9eZV.ijFN3m75rFBPRjhKC', 2, 1, 1620183310),
(151, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$PLQ6fMkfEOflyIk4uaQFVuBJ686gwya928fh8kiLKsRTCL1eJ2JFq', 2, 1, 1620310186),
(152, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$hviB/M.MINHr2XHIYwS.veJUUMQXRB0hTyoUI56ST8IWRncAA8J9u', 2, 1, 1620310186),
(153, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$NFdj1nzrLMsTpmsAzxP05uXfofl14I7aXRgWv87r1DwryFFH/6W4K', 2, 1, 1620310242),
(154, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$bJ5kMbSsNhA/6u1p5kRINe1VVVcHpb4YSl26hm22SH/h65ixTIVvK', 2, 1, 1620310242),
(155, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$wIOc6E7b1K4P17LEaMAnTOGorg2/SVCDo8t5xqpmg8ziRFhgXmF2G', 2, 1, 1620312970),
(156, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$hyFBrXXBDC7hu8J2zkTZr.EtYSOyrxVBOqA5d3DJfjK4JLFKnGC.e', 2, 1, 1620312970),
(157, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$vrFwfeUCoIu7NsjH9QsTEecF2B1kFqOp9B/vE3XEx5LgGegVIBjhq', 2, 1, 1620312975),
(158, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$srR9St9cOnehJvjb9NT4Mub0IBkVLF.oGQ3zahP6bY3RswaMU6hvO', 2, 1, 1620312975),
(159, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$MXbf3.5p5XodGeYLKtCoaeniidW6qRkow3IcLWqoLZOsdeGqNZkqm', 2, 1, 1620313148),
(160, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$JcstnLFxP0HbgSHmjR.fcOx95PvsHK63sRMWjfuON0tOpMlHzFSD2', 2, 1, 1620313148),
(161, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$C.oKCWmeEmRS2n0YbW8fWe/EzUaltJyMWPPHFPs8jwIfFupawDKo.', 2, 1, 1620318917),
(162, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$6R62WII7IzKE9fGWzhFALuP.bArsnAQdQTFDcuMtXrruJfm27c6ti', 2, 1, 1620318917),
(163, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$Rf5dl2tPc.0dhqLqvboM6OeMfkS/cieFHnfv3Nw0VGhSvlb51o.iq', 2, 1, 1620320604),
(164, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$dIkk2cUflWNZ479WUqU5uOYOLPqgP9R5gx7pb2YfOityv93DqZhRW', 2, 1, 1620320604),
(165, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$jJOG.uOK4U0ThcuFqb64ceac9x8NxT4AcPxBJ5JnRsXSfb/2JjOUS', 2, 1, 1620320811),
(166, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$xS8hK.5UZJR9kqQY3vtScudDrkpS9lpZ4APZhYnt6N9HNowdlx/EC', 2, 1, 1620320812),
(167, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$pkggTkFROk7YhObd7CY5aeM8IKXuEOV89zy2C8L57Gg/S3mw.UfRq', 2, 1, 1620322109),
(168, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$apmB..5PUEFxs581.MjOROLBzdrS4KOcmVjPaRngDBIRjZMRDplF2', 2, 1, 1620322109),
(169, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$XsahlysYG9i5noER6S.JfOLKxl2mH7PWx78CGIJix16DjTBx.p3FS', 2, 1, 1620322113),
(170, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$6Ozhv/g3w7U0NO.LrJrwwu4ig3yvmqkFKo.2lAiP8F77QsyI94zW2', 2, 1, 1620322113),
(171, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$zXYscl0B0myBOOAilBl3p.Z10g38rSTNROlM824iO2VzB4wYvr93u', 2, 1, 1620322117),
(172, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$LCX8c1BYQm1Ebn7/BoDNjOsc7J2l2lTsYCUW3/3au3OZINyuzCx.W', 2, 1, 1620322117),
(173, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$PeMFZjuh2ce0YBtpFy6xS.ikJwo4FBJ/vHxIZ9VJImJ6V0w2.yyWO', 2, 1, 1620322551),
(174, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$9RSCFYZfLNEom/4bmZh7R.ZVKmyLWowOC.ody5vtxjzkm3yjhDqp2', 2, 1, 1620322552),
(175, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$HMGOGS2x6RH6.Wy1CXeq6uc2PqysD.l.ny4VW1z5WnODGsKd/wpJu', 2, 1, 1620322582),
(176, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$2RqvVu2A8OdxHIYLnZQNpegM59r3B7oXIaI4Qjr.jWFX4siXkLGzG', 2, 1, 1620322582),
(177, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$aQL0rqk6s75fcC6zOHDSpOWI9pSDwB/zADFKX0cVwkgHrvuyrCgnu', 2, 1, 1620570964),
(178, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$YaP5grt6aJqoWVJoCuXbYunKjlZt197yv6t6cGX3z3P1GhJMm3zla', 2, 1, 1620570964),
(179, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$QH79H7ogDmctYOqCjZcLHuEt58fHEQnuL3I/yMwPQ0/2uCFH7PB0u', 2, 1, 1620571586),
(180, '', '', '', '', 0, 0, '', '0', '', 'default.jpg', '$2y$10$XQj1zU4wUuec36n0Fz5.D.vAOV4PxATjE0m40VnXe2BoGVjADRNBq', 2, 1, 1620571587),
(181, '', '', '', '', 0, 0, NULL, '0', '', 'default.jpg', '$2y$10$HXkRQuh.j52p7aG4vE.54efP1egQ3unq41amZlUUApC0LfWAAYBoi', 2, 1, 1620749485),
(182, '', '', '', '', 0, 0, NULL, '0', '', 'default.jpg', '$2y$10$DqfHQarQPGLEC0744TezfOLVWbErk5PckcYgz99SRjGHzaZvP4586', 2, 1, 1620749485),
(183, '', '', '', '', 0, 0, NULL, '0', '', 'default.jpg', '$2y$10$bwpJa2u5rixKjNhX6QLiResyB99aJFqhZqKWWK4GnlJO6RFif9Yda', 2, 1, 1620749485),
(184, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$0.SjR.M7THn3w.Wpfq4GvOXHar28Ew5MIyfW1sCpYpSpoHwnmxAd6', 2, 1, 1621865962),
(185, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$szS5az1YJR4ULn81utfug.wK2rQcCmHmIR7uENMlLIMXXgLmedXqC', 2, 1, 1621865963),
(186, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$.6nFI/wfQk.VenJwtNyk3uYerQGJ7VPyJziNtw7GSlh4FTSEJC4ya', 2, 1, 1621866156),
(187, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$5wTg3.bPZn21dBFzualdd.pq/5P7pWeoDX3jD/xkF4eRcqaOR3N8W', 2, 1, 1621866157),
(188, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$7eihOk5z04u26dLMD9ARKOIHuUyTi8Oqw6kkTX.X/.towOJGRbjie', 2, 1, 1622713270),
(189, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$BWELAiOYqvc7aXcP7zLmKuIVTUYahrhA2Eh4bAUHYOeXrZAXDASrK', 2, 1, 1622713271),
(190, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$GUphX7yHnskJWflJnc1zweYSvyRqv1wM2aKVu3oyOqTDoiCPwcmr2', 2, 1, 1622717434),
(191, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$rtLdfzBOgBEeAF8h41L3ueTeo72owzp56zt2K6xDSi7st4uT/llxq', 2, 1, 1622717434),
(193, 'Dickyfli Perdana Putra', 'muara lembu', 'Riau', 'Kuantan Singingi', 0, 0, 'perempuan', '082386572800', 'dickyfli@protonmail.com', 'default.jpg', '$2y$10$65DGtWCQWaQfYyDHT0x40eCR6vbLUG9t75f9zOdtDwVtNQdUiVx5W', 2, 1, 1622725615),
(194, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$5M6cxh02uHcskS4mBZQcnOQgezbNyWjvOJMr7HmFU.Vr2oocSbUgS', 2, 1, 1622726269),
(195, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$Y91OWGGJ3N4T878bb2OKeOpA7uVGvBDI40NfC031qYhaE8I2.WFpa', 2, 1, 1622726269),
(196, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$i6vO5vIcXn1FHXgD.4Ckt.MCrkSXUtkeIWBj1CYN9yOPgGJXc9kHq', 2, 1, 1622726283),
(197, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$Q10mzRsWkQF0X/0t6HPpcuDNJvaDl2eC04ei5nYf94Gszrx6lh7xO', 2, 1, 1622726283),
(198, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$oHS7lqdV0I48axHdm0YwBOhVuxeU4mAD3fadvSeBUyu9q0njnyOi2', 2, 1, 1622726349),
(199, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$LBqsAuU3zkKVij.ZPZ26b.TxfY3CrGUzA2NihHhtdEfy06rITAuVW', 2, 1, 1622726349),
(200, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$FA5mOF65ZZO7zAewPFteFehy4m7E3AMU.fcV7F21dfebyhY/MUxLq', 2, 1, 1622726870),
(201, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$tNbRIMCu5979nA/faxbt6e4GPsPm6KhCKWT.1vdyyEwsgrcYgdLam', 2, 1, 1622726870),
(202, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$WwJDDaGHflxZJEdGLN.dEeajUmNZLWPoisQslk4aELZ.4nebyn6aC', 2, 1, 1622729441),
(203, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$T0TGmtYyaapwtqa0cCCp4OPoe94ziob.l8i1lO5MHB.ZbmnuGsgF2', 2, 1, 1622729441),
(204, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$Oz6smDuhHUJeSt9upK5VleK0gNIr/J4H0gnxv1Ui2c86.vXH6x9eG', 2, 1, 1622729449),
(205, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$YWj4eTadQiWhikXmJ8IUSeObKDTvHCAEGY0ic1jlPQIQ4jtxcgTCm', 2, 1, 1622729449),
(206, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$67SlByXOPPTghvW.iLVh9Ornxm2Myk2MxNcD1aqtKiEmsdfajffwS', 2, 1, 1622729475),
(207, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$K6/UMdiaRNbbhCfAyU1pv.wniCl6aFk5EkRibxhfrCwvEptkU28XS', 2, 1, 1622729476),
(208, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$1CnM5RhFCMIY/ljeNZ7ZE.AO7DpBIJJy6JChpAgIIbomf9I2VH.Ee', 2, 1, 1622729595),
(209, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$WLZsH59mWDH6hC2NY.Ap6.WcWX7/bDhfnoZhEYs8pus.S4anBSWty', 2, 1, 1622729595),
(210, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$BQSFAvl6pw/LlBjSAdfqYuDjrvzmrFWubq0yDLcqKOQ9KS6vaHIdq', 2, 1, 1622729602),
(211, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$BYJ3agZVTOWkMj293gzcUu.vg9Mh7aDvRzQfSb4BvNE6VgyjRHRfq', 2, 1, 1622729602),
(212, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$seyT.DgERjsLSb4o6zz9EuSTEtzEo1BJ2ZzD6jtXtsApPjVi6iNMS', 2, 1, 1622729632),
(213, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$0kdzidTH7AvzwP5pUt.UMO46K82qoi3ZBhvRw8puWK0qKZO5WJ4em', 2, 1, 1622729632),
(214, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$xMbRafVUD3ZQDJMJGFf8aO9zVE4bBgbQr1IpEcuGc3OXvsH5XuK2O', 2, 1, 1622730012),
(215, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$GCp6822rxWXUJzcSSmzphOfi02hgvkrzeh8jOwWFiDkK/rCsuBSya', 2, 1, 1622730012),
(216, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$f9PSyhGD06d5p68Vwibke.onql9ktwgUM1yD70Eqs/7MLdp9DfVe6', 2, 1, 1622730584),
(217, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$WaPSwIMGQuCjZBfXMn/Xy.XlYATDpXh3EYM1eevtubwu0.I0taYf6', 2, 1, 1622730584),
(218, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$ZrPHJhkaNiTk9ciR5q3x.OLJx9LwZX6sRe1x5h7OGoYY/wVv2CP1q', 2, 1, 1622732907),
(219, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$Kr3T4pO7J.bbfJghXBuUb.w56ksIRv/u10sxJlDDT8ka59hj7qS42', 2, 1, 1622732907),
(220, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$PapP0fxUQoOe82fssqSwl.xRBx.MO6qPsK/.BS4n01JEcgwraucU6', 2, 1, 1622733698),
(221, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$PEbfqzwMmCf/OzaTLBxHF.Tdgln3B2/BB5wGFUEgPR1a5vnrjgao.', 2, 1, 1622733698),
(222, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$Q3eV.gc9/vrbwcR.NLMX8OYDK/Pr8u/wZegifl5PiUTip431Kv4Su', 2, 1, 1622734405),
(223, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$kk3v0WkoN8vCXHyb.VHvse00Y6IuhENOYnWoPldnFa7R58OEET4me', 2, 1, 1622734405),
(224, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$cdopi01dwebXeWE9RY0VR.JU5bIvnKl.n1WzNjIYA8t1g65sZFnoi', 2, 1, 1622734622),
(225, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$FvhAO80WKwrH3QFTXxSyiOZTDMp.5H7GcBMxqkcyuRjOQCj48AUrq', 2, 1, 1622734622),
(226, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$NHxFtAimvtJseSMO2no30eRAy.u1LIbaMVlxs68/.CtSdeXyM7n12', 2, 1, 1622734683),
(227, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$VQ6mmLy1KcP2uaS7CGuyxO1ccc/RUAsjWzb27.lRhsGrrls79tN2e', 2, 1, 1622734683),
(228, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$E79qbvpc1ZDO8iXLUit.2e8H7RVqXvGscIKoqIrCks8sk.TkqAiIi', 2, 1, 1622735521),
(229, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$Pnhp3rYVX/2FCedlDuTeDucAyYrJYgxv0QvSh/7efPdlLenttSp/C', 2, 1, 1622735521),
(230, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$G8yzVxNdhNRpZE6F.vpzZu8x.ZNgthB9e1nL8oOa.plp/oAjWCPOa', 2, 1, 1622808718),
(231, '', '', '', '', 0, 0, NULL, '', '', 'default.jpg', '$2y$10$nEkPWpw98p2OhTSGLI5RLeoZjQZhj/k80AVcUJDyNxMwbJD5AVDeW', 2, 1, 1622808718);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(11, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(4, 'Barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_nav_menu`
--

CREATE TABLE `user_nav_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_nav_menu`
--

INSERT INTO `user_nav_menu` (`id`, `title`, `url`, `active`) VALUES
(1, 'Home', '', 1),
(3, 'Pemesanan', 'pesan', 1),
(4, 'Cek Pemesanan', 'pesan/cek', 1),
(5, 'Galery', 'galery', 1),
(6, 'Artikel', 'artikel', 1),
(7, 'Contact', 'about', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'admin/profile', 'fa fa-fw fa-user', 1),
(3, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(4, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 0),
(5, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 0),
(6, 2, 'Edit Profile', 'admin/editprofile', 'fas fa-fw fa-user-edit', 1),
(7, 3, 'User Menu Management', 'menu/usermenu', 'far fa-fw fa-id-card', 0),
(8, 4, 'Barang', 'barang', 'fas fa-fw fa-box', 1),
(9, 4, 'Invoices', 'admin/invoices', 'fas fa-file-invoice-dollar', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indeks untuk tabel `member_menu`
--
ALTER TABLE `member_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id` (`email`),
  ADD KEY `id_brg` (`nama_brg`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_nav_menu`
--
ALTER TABLE `user_nav_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member_menu`
--
ALTER TABLE `member_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_nav_menu`
--
ALTER TABLE `user_nav_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
