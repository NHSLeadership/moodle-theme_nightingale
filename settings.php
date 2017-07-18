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
 * @package   theme_nhsla_nightingale
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings = new theme_nhsla_nightingale_admin_settingspage_tabs('themesettingnhsla_nightingale', get_string('configtitle', 'theme_nhsla_nightingale'));
    $page = new admin_settingpage('theme_nhsla_nightingale_general', get_string('generalsettings', 'theme_nhsla_nightingale'));

    // Logo file setting.
    $name = 'theme_nhsla_nightingale/logo';
    $title = get_string('logo','theme_nhsla_nightingale');
    $description = get_string('logodesc', 'theme_nhsla_nightingale');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Small logo file setting.
    $name = 'theme_nhsla_nightingale/smalllogo';
    $title = get_string('smalllogo', 'theme_nhsla_nightingale');
    $description = get_string('smalllogodesc', 'theme_nhsla_nightingale');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'smalllogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Show site name along with small logo.
    $name = 'theme_nhsla_nightingale/sitename';
    $title = get_string('sitename', 'theme_nhsla_nightingale');
    $description = get_string('sitenamedesc', 'theme_nhsla_nightingale');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Main CSS
    $name = 'theme_nhsla_nightingale/maincss';
    $title = get_string('maincss', 'theme_nhsla_nightingale');
    $description = get_string('maincssdesc', 'theme_nhsla_nightingale');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footnote setting.
    $name = 'theme_nhsla_nightingale/footnote';
    $title = get_string('footnote', 'theme_nhsla_nightingale');
    $description = get_string('footnotedesc', 'theme_nhsla_nightingale');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);
}
