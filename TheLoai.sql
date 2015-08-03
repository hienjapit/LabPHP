CREATE TABLE IF NOT EXISTS `TheLoai` (
  `ID` bigint(20) unsigned NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Order` tinyint(4) NOT NULL DEFAULT '0',
  `Created_At` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_At` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for table `TheLoai`
--
ALTER TABLE `TheLoai`
  ADD UNIQUE KEY `ID` (`ID`);
--
-- AUTO_INCREMENT for table `TheLoai`
--
ALTER TABLE `TheLoai`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
