<?php

/**
 * @defgroup plugins_generic_adminLocker
 */
 
/**
 * @file plugins/generic/adminLocker/index.php
 *
 * Copyright (c) 2014 Marc Bria Ramírez, Universitat Autònoma de Barcelona
 * Distributed under the GNU GPL v3.
 *
 * @ingroup plugins_generic_adminLocker
 * @brief Wrapper for admin locker plugin.
 *
 */

require_once('AdminLockerPlugin.inc.php');

return new AdminLockerPlugin();

?> 
