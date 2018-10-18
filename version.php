<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * wims module version information
 *
 * @package    mod_wims
 * @copyright  2015 Edunao SAS (contact@edunao.com)
 * @author     Sadge (daniel@edunao.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$plugin->component = 'mod_wims';    // Full name of the plugin (used for diagnostics)
$plugin->release = '0.1.0';         // Don't forget to update the version too.
$plugin->version   = 2018101800;    // The current module version (Date: YYYYMMDDXX)
$plugin->requires  = 2014050800;    // Requires this Moodle version
$plugin->maturity = MATURITY_BETA; // Must be one of MATURITY_ALPHA, MATURITY_BETA, MATURITY_RC or MATURITY_STABLE
$plugin->cron      = 1;             // Don't limit the frequency at which the CRON gets called (it will look after it for itself)
