<?php
# Shared memory settings

$wgMainCacheType = CACHE_ACCEL;
$wgMessageCacheType = CACHE_ACCEL;
$wgCacheDirectory = '/cache';
$wgUseLocalMessageCache = true;
$wgParserCacheType = CACHE_ACCEL;
$wgMemCachedServers = array();
$wgUseGzip = true;
$wgEnableSidebarCache = true;

# NO DB HITS!
$wgDisableCounters = true;
$wgMiserMode = true;

# Text cache
$wgCompressRevisions = true; // use with care (see talk page)
$wgRevisionCacheExpiry = 3*24*3600;
$wgParserCacheExpireTime = 14*24*3600;

# Diffs (defaults seem ok for Ubuntu and others)
$wgDiff = 'C:\\Program Files (x86)\\Gow\\bin\\diff.exe';
$wgDiff3 = 'C:\\Program Files (x86)\\Gow\\bin\\diff3.exe';
?>
