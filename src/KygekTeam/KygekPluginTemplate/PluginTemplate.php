<?php

/*
 * Put plugin description here
 * Copyright (C) 2021 KygekTeam
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace KygekTeam\KygekPluginTemplate;

use KygekTeam\KtpmplCfs\KtpmplCfs;
use pocketmine\plugin\PluginBase;

class PluginTemplate extends PluginBase {

    public function onEnable() {
        KtpmplCfs::checkConfig($this, "1.0"); // Add this if plugin uses config.yml file, second parameter MUST be versioned as "MAJOR.MINOR"
        KtpmplCfs::checkUpdates($this); // Add this if plugin is planned to be released on Poggit
    }

}